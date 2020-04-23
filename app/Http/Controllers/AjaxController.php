<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AnotherVideo;
use App\HocMaiClass;
use App\HocMaiFooter;
use App\HocMaiHeader;
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
}
