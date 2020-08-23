<?php

namespace App\Http\Controllers;

use App\AnotherVideo;
use App\Livestream;
use App\LivestreamAnotherVideo;
use App\CommentFake;
use App\UserFake;
use App\UserCommentFake;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Session;
use Carbon\Carbon;
use Illuminate\Mail\Message;

class LivestreamAnotherVideoController extends Controller
{
    public function pushToFirebase($id, $input)
    {
        return true;
    }

    public function createComment($id, $input)
    {
        foreach ($input['user_fake_id'] as $key => $value) {
            UserCommentFake::create([
                'userfake_id' => $value,
                'commentfake_id' => $input['comment_fake_id'][$key],
                'livestream_id' => $id,
            ]);
        }
        return true;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Livestream::all();
        return view('livestream_another_video.index')->with(compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('livestream_another_video.create');
    }   

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        //check video_id
        if (empty($input['video_source_id'])) {
            $message = 'Không tìm thấy video load';
            Session::flash('message', "Điền id video đúng và click vào load video");
            return Redirect::back()->withInput();
        }
        //neu lon hon 2 video-->fail
        if (count($input['video_source_id']) > 1) {
            $message = 'Video không thể nhiều hơn 1';
            Session::flash('message', "Không thể có nhiều hơn 1 video");
            return Redirect::back()->withInput();
        }

        $timeClock = $endTime = null;
        if (isset($input['timer_clock'])) {
            $timeClock = str_replace('/', '-', $input['timer_clock']);
            if (date('Y/m/d H:i:s', strtotime($timeClock))) {
                $timeClock = date('Y/m/d H:i:s', strtotime($timeClock));
            }
        }
        $endTimeFormat = str_replace('/', '-', $input['end_time']);
        if (date('Y/m/d H:i:s', strtotime($endTimeFormat))) {
            $endTime = date('Y/m/d H:i:s', strtotime($endTimeFormat));
        }
        //$videoSourceId = $input['video_source_id'];
        $input['end_time'] = $endTime;
        $input['timer_clock'] = $timeClock;
       //$anotherVideo = AnotherVideo::where('id',$videoSourceId)->sum('duration');
       // cộng thời gian video
      // $time_stamp = date('Y/m/d H:i',strtotime($timeClock));
      // $time = strtotime($time_stamp);
      // $new = ($anotherVideo*60) + $time;
       //$newTimeClock = date('Y/m/d H:i',$new);
       //timeClock1 = date_parse_from_format('Y/m/d  H:i',$newTimeClock);
       //dd($endTime1,$timeClock1);
       // endtime1 là thời gian hiển thị còn timeclock thời gian phát , thời gian hiển thị lớn hơn thời gian phát cộng thời gian video
      //  if($endTime1 < $timeClock1){
        //    Session::flash('message', "Vui lòng điền Thời gian hẹn giờ phát nhỏ hơn  thời gian video ");
         //   return Redirect::back()->withInput();
            // Session::flash('time_clock', "Vui lòng điền Thời gian hẹn giờ phát nhỏ hơn thời gian hiển thị cộng với thời gian video!!!");
            // return response()->json(['error'=>'Vui lòng điền Thời gian hẹn giờ phát nhỏ hơn thời gian hiển thị cộng với thời gian video!!!']);
        //}
        if (!isset($input['repeat'])) {
            $input['repeat'] = REPEAT_DEFAULT;
        }
        $livestreamId = Livestream::create($input)->id;
        $livestream = Livestream::find($livestreamId);
        if ($livestream->status_time == IS_PUBLISH_ACTIVE) {
            $livestream->update(['timer_clock' => $livestream->created_at]);
        }
        $imageUrlSmall = $imageUrlBig = $imageUrlMedium = null;
        $date = date('Y-m-d H:i:s');
        $prefix = strtotime($date);
        if (request()->file('file_image_small')) {
            $fileSmall = request()->file('file_image_small');
            $fileNameImage = $prefix . $fileSmall->getClientOriginalName();
            $fileSmall->move(public_path("/uploads/another_video/" . $livestreamId . '/small/'), $fileNameImage);
            $imageUrlSmall = '/uploads/another_video/' . $livestreamId . '/small/' . $fileNameImage;
        }
        
        if (request()->file('file_image_big')) {
            $fileBig = request()->file('file_image_big');
            $fileNameImage = $prefix . $fileBig->getClientOriginalName();
            $fileBig->move(public_path("/uploads/another_video/" . $livestreamId . '/big/'), $fileNameImage);
            $imageUrlBig = '/uploads/another_video/' . $livestreamId . '/big/' . $fileNameImage;
        }
        if (request()->file('image_medium')) {
            $fileBig = request()->file('image_medium');
            $fileNameImage = $prefix . $fileBig->getClientOriginalName();
            $fileBig->move(public_path("/uploads/another_video/" . $livestreamId . '/big/'), $fileNameImage);
            $imageUrlMedium = '/uploads/another_video/' . $livestreamId . '/big/' . $fileNameImage;
        }
        Livestream::where('id', $livestreamId)->update(['image_small' => $imageUrlSmall, 'image_big' => $imageUrlBig,'image_medium'=>$imageUrlMedium]);
        //luu vao bang livestream_another_videos
        foreach ($input['video_source_id'] as $key => $value) {
            LivestreamAnotherVideo::create(['livestream_id' => $livestreamId, 'another_video_id' => $value]);
        }

        return Redirect::action('LivestreamAnotherVideoController@create')->with('success', 'Thao tác thành công');
    }
    public function edit($id){
        $livestream= Livestream::find($id);
        return view('livestream_another_video.edit')->with(compact('livestream'));
    }
    public function update(Request $request,$id)
    {
        $input = $request->all();
      // dd($input);
        //check video_id

        if (empty($input['video_source_id'])) {
            $message = 'Không tìm thấy video load';
            Session::flash('message', "Điền id video đúng và click vào load video");
            return Redirect::back()->withInput();
        }
        $timeClock = $endTime = null;
        if (isset($input['timer_clock'])) {
            $timeClock = str_replace('/', '-', $input['timer_clock']);
            if (date('Y/m/d H:i:s', strtotime($timeClock))) {
                $timeClock = date('Y/m/d H:i:s', strtotime($timeClock));
            }
        }
        $endTimeFormat = str_replace('/', '-', $input['end_time']);
        if (date('Y/m/d H:i:s', strtotime($endTimeFormat))) {
            $endTime = date('Y/m/d H:i:s', strtotime($endTimeFormat));
        }
        $input['end_time'] = Carbon::createFromFormat('Y/m/d H:i:s' ,$endTime);
        $input['timer_clock'] =Carbon::createFromFormat('Y/m/d H:i:s', $timeClock);
        if (!isset($input['repeat'])) {
            $input['repeat'] = REPEAT_DEFAULT;
        }
        // dd($input);
        $livestreamId = Livestream::find($id);
        $imageUrlSmall = $imageUrlBig = $imageUrlMedium = null;
        $date = date('Y-m-d H:i:s');
        $prefix = strtotime($date);
        if (request()->file('file_image_small')) {
            $fileSmall = request()->file('file_image_small');
            $fileNameImage = $prefix . $fileSmall->getClientOriginalName();
            $fileSmall->move(public_path("/uploads/another_video/update/" . $id . '/small/'), $fileNameImage);
            $imageUrlSmall = '/uploads/another_video/update/' . $id . '/small/' . $fileNameImage;
        }
        if (request()->file('file_image_big')) {
            $fileBig = request()->file('file_image_big');
            $fileNameImage = $prefix . $fileBig->getClientOriginalName();
            $fileBig->move(public_path("/uploads/another_video/update/" . $id . '/big/'), $fileNameImage);
            $imageUrlBig = '/uploads/another_video/update/' . $id . '/big/' . $fileNameImage;
        }
        if (request()->file('image_medium')) {
            $fileBig = request()->file('image_medium');
            $fileNameImage = $prefix . $fileBig->getClientOriginalName();
            $fileBig->move(public_path("/uploads/another_video/update/" . $id . '/big/'), $fileNameImage);
            $imageUrlMedium = '/uploads/another_video/update/' . $id . '/big/' . $fileNameImage;
        }

        Livestream::where('id', $livestreamId)->update(['image_small' => $imageUrlSmall, 'image_big' => $imageUrlBig, 'image_medium' => $imageUrlMedium]);
        //luu vao bang livestream_another_videos
        if(empty($input['video_source_id'])){
            foreach ($input['video_source_id'] as $key => $value) {
                LivestreamAnotherVideo::update(['livestream_id' => $id, 'another_video_id' => $value]);
            }
        }
        $livestreamId->update($input);
        return Redirect::action('LivestreamAnotherVideoController@create')->with('success', 'Cập nhật thành công');
    }
    public function show($id){
        $livestream = Livestream::find($id);
        return view('livestream_another_video.show')->with(compact('livestream'));
    }
    public function destroy($id){

      $livestream = Livestream::find($id);
      DB::transaction(function () use ($livestream) {
        $livestream->livestreamAnotherVideo()->delete();
        $livestream->delete();
    });
    return Redirect::action('LivestreamAnotherVideoController@create')->with('success', 'Xóa thành công');
    }
}
