<?php

namespace App\Http\Controllers;

use App\video_anothers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class VideoAnotherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = video_anothers::all();
        return view('videoanother.index')->with(compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('videoanother.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        video_anothers::create($request->all());
        return Redirect::action('VideoAnotherController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $videoanother = video_anothers::find($id);
        return view('videoanother.show',compact('videoanother'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $videoanother = video_anothers::find($id);
        return view('videoanother.edit')->with(compact('videoanother'));
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
        $videoanother = video_anothers::find($id);
        $videoanother->update($input);
        return Redirect::action('VideoAnotherController@index'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        video_anothers::destroy($id);
        return Redirect::action('VideoAnotherController@index');
    }
}
