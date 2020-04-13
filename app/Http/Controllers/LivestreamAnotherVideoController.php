<?php

namespace App\Http\Controllers;

use App\Livestream;
use App\LivestreamAnotherVideo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Session;

class LivestreamAnotherVideoController extends Controller
{
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
            // dd($input);
            return Redirect::action('LivestreamAnotherVideoController@create')->withInput()->with(compact('message'));
        }
        // dd($input);
        $livestreamId = Livestream::create($input)->id;
        $imageUrlSmall = $imageUrlBig = null;
        if (request()->file('file_image_small')) {
            $fileSmall = request()->file('file_image_small');
            $fileNameImage = $fileSmall->getClientOriginalName();
            $fileSmall->move(public_path("/uploads/another_video/" . $livestreamId . '/small/'), $fileNameImage);
            $imageUrlSmall = '/uploads/another_video/' . $livestreamId . '/small/' . $fileNameImage;
        }
        
        if (request()->file('file_image_big')) {
            $fileBig = request()->file('file_image_big');
            $fileNameImage = $fileBig->getClientOriginalName();
            $fileBig->move(public_path("/uploads/another_video/" . $livestreamId . '/big/'), $fileNameImage);
            $imageUrlBig = '/uploads/another_video/' . $livestreamId . '/big/' . $fileNameImage;
        }
        

        Livestream::where('id', $livestreamId)->update(['image_small' => $imageUrlSmall, 'image_big' => $imageUrlBig]);
        //luu vao bang livestream_another_videos
        foreach ($input['video_source_id'] as $key => $value) {
            LivestreamAnotherVideo::create(['livestream_id' => $livestreamId, 'another_video_id' => $value]);
        }

        return Redirect::action('LivestreamAnotherVideoController@create');
    }
 
}
