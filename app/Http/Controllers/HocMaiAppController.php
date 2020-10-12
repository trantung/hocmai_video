<?php

namespace App\Http\Controllers;

use App\HocMaiAppVersion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class HocMaiAppController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = HocMaiAppVersion::all();
        return view('hocmai_app.index')->with(compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('hocmai_app.create');
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
        $classId = HocMaiAppVersion::create($input)->id;
        return Redirect::action('HocMaiAppController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $hocmaivideo = HocMaiAppVersion::find($id);
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
        $hocmaivideo = HocMaiAppVersion::find($id);
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
        $hocmaivideo = HocMaiAppVersion::find($id);
        $hocmaivideo->update($input);
        return Redirect::action('HocMaiAppController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        HocMaiAppVersion::destroy($id);
        return Redirect::action('HocMaiAppController@index');
    }
}
