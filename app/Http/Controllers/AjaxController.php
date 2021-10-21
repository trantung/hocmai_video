<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AnotherVideo;
use App\HocMaiClass;
use App\HocMaiFooter;
use App\HocMaiHeader;
use App\CommentFake;
use App\UserFake;
use Illuminate\Support\Facades\DB;

class AjaxController extends Controller
{
    public function loadVideoSource(Request $request)
    {
        $video_source_id = $request->video_source_id;
        $anotherVideo = AnotherVideo::find($video_source_id);
        if (!$anotherVideo) {
            $response = array(
                'status' => 'Fail',
                'msg' => 'Không có video này',
            );
            return response()->json($response);
        }
        
        $response = array(
          'status' => 'success',
          'video_title' => $anotherVideo->title,
          'source_id' => $anotherVideo->source_id,
          'video_id' => $anotherVideo->id,
          'duration'=>$anotherVideo->duration
        );
        return response()->json($response); 
        
    } 
    // lấy toàn bộ end_time trong header
    public function loadHeader(){

        $end_time = HocMaiHeader::pluck('end_time');
        return response()->json($end_time);
    }
     // lấy toàn bộ end_time trong footer
    public function loadFooter(Request $request){
        $end_time = HocMaiHeader::pluck('end_time');
        return response()->json($end_time);
    }

    private function getCommentFakeNotEnough($number)
    {
        $listComment = CommentFake::all();
        $a = $listComment->count();
        for($i= 0 ;$i <= $number%$a;$i++){
            
        }
        dd($a);
        return 123;
    }

    private function getUserFake()
    {
        return $result = UserFake::all()->random(1)->first();
    }

    private function getUserFakeName($userFake)
    {
        return $userFake->fullname . ' ' . $userFake->name;
    }

    private function getTimeCommentDisplay($start, $timeLoop, $key)
    {
        $result = $start + $key * $timeLoop;
        // dd(gmdate("H:i:s", $result));
        return gmdate("H:i:s", $result);
    }

    public function getCommentFake(Request $request)
    {
        $number = $request->number;
        $videoId = $request->video_source_id;
        $start = $request->comment_start_time * 60;
      //  dd($start);
        $video = AnotherVideo::find($videoId);
        $duration = $video->duration - $start;
        $timeLoop = $number * 60;
        $commentNumber = (int) floor($duration/$timeLoop);
        //var_dump($commentNumber);
        $list = CommentFake::all();
        //var_dump($list);
        //nếu số lượng comment không đủ
        if ($list->count() < $commentNumber) {
            return $this->getCommentFakeNotEnough($commentNumber);
        }
        $result = [];
        $commentList = $list->random($commentNumber);
        
        foreach ($commentList as $key => $value) {
            $userFake = $this->getUserFake();
            $result[$key]['order'] = $key + 1;
            $result[$key]['user_fake_name'] = $this->getUserFakeName($userFake);
            $result[$key]['user_fake_id'] = $userFake->id;
            $result[$key]['comment_fake_id'] = $value->id;
            $result[$key]['comment_fake_name'] = $value->name;
            $result[$key]['comment_fake_des'] = $value->desc;
            $result[$key]['time'] = $this->getTimeCommentDisplay($start, $timeLoop, $key);
        }
        $response = array(
          'status' => 'success',
          'result' => $result
        );
        return response()->json($response);
    }
}
