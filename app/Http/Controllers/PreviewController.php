<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\AnotherVideo;

class PreviewController extends Controller
{
    public function show($id)
    {
    	$video = AnotherVideo::find($id);
        $url = getLivestreamUrl($video->source_id);
        return view('testvideo')->with(compact('url'));
    }
    
}
