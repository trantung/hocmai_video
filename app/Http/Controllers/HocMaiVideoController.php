<?php

namespace App\Http\Controllers;

use App\hocmai_videos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class HocMaiVideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = hocmai_videos::all();
        return view('hocmaivideo.index')->with(compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('hocmaivideo.create');
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
        $classId = hocmai_videos::create($input)->id;
        return Redirect::action('HocMaiVideoController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $hocmaivideo = hocmai_videos::find($id);
        return view('hocmaivideo.show')->with(compact('hocmaivideo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $hocmaivideo = hocmai_videos::find($id);
        return view('hocmaivideo.edit')->with(compact('hocmaivideo'));
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
        $hocmaivideo = hocmai_videos::find($id);
        $hocmaivideo->update($input);
        return Redirect::action('HocMaiVideoController@index'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        hocmai_videos::destroy($id);
        return Redirect::action('HocMaiVideoController@index');
    }
}
