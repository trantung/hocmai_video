<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class PreviewController extends Controller
{
    public function show($id)
    {
        $url = getLivestreamUrl($id);
        return view('testvideo')->with(compact('url'));
    }
    
}
