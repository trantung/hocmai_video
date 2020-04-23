<?php

namespace App\Http\Controllers;

use App\AnotherVideo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class AnotherVideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roleId = checkUserRole();
        if ($roleId == ADMIN) {
            $data = AnotherVideo::all();
        } else {
            $schoolblockId = getSchoolblockByUser();
            $data = AnotherVideo::where('schoolblock_id', $schoolblockId)->get();
        }
        return view('anothervideo.index')->with(compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('anothervideo.create');
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
        $input['source_id'] = getIdFromSourceVideo($input['url']);
        $duration = getDurationVideoFromText($input['duration']);
        $input['duration'] = $duration;
        $id = AnotherVideo::create($input)->id;
        return Redirect::action('AnotherVideoController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $anothervideo = AnotherVideo::find($id);
        return view('anothervideo.show',compact('anothervideo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $anothervideo = AnotherVideo::find($id);
        return view('anothervideo.edit')->with(compact('anothervideo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input = $request->all();
        $videoanother = AnotherVideo::find($id);
        $duration = getDurationVideoFromText($input['duration']);
        $input['duration'] = $duration;
        $videoanother->update($input);
        return Redirect::action('AnotherVideoController@index'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        AnotherVideo::destroy($id);
        return Redirect::action('AnotherVideoController@index');
    }
}
