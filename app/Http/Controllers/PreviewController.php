<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class PreviewController extends Controller
{
    public function show($id)
    {
        $url = 'https://www.googleapis.com/drive/v3/files/' . $id .'?alt=media&key=' . GOOGLE_API_KEY;
        return view('testvideo')->with(compact('url'));
    }
    
}
