<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AnotherVideo;

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
        );
        return response()->json($response); 
        
    }
}
