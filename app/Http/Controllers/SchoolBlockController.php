<?php

namespace App\Http\Controllers;

use App\SchoolBlock;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Session;

class SchoolBlockController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = SchoolBlock::all();
        return view('schoolblock.index')->with(compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('schoolblock.create');
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
        if (empty($input['name'])) {
            Session::flash('message', "Quý khách vui lòng điền tên kênh !");
            return Redirect::back()->withInput();
        }
        $schoolblock = SchoolBlock::create($input)->id;
        if (request()->file('avatar')) {
            $file = $request->file('avatar');
            $fileNameImage = $file->getClientOriginalName();
            $file->move(public_path("/uploads/block/" . $schoolblock . '/avatar/'), $fileNameImage);
            $imageUrl = '/uploads/block/' . $schoolblock . '/avatar/' . $fileNameImage;
        }
        SchoolBlock::where('id', $schoolblock)->update(['avatar' => $imageUrl]);
        return Redirect::action('SchoolBlockController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $schoolblock = SchoolBlock::find($id);
        return view('schoolblock.edit')->with(compact('schoolblock'));
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
        if (empty($input['name'])) {
            Session::flash('message', "Quý khách vui lòng điền tên kênh !");
            return Redirect::back()->withInput();
        }
        $schoolblock = SchoolBlock::find($id);
        $imageUrl = $schoolblock->avatar;
        if (request()->file('avatar')) {
            $file = $request->file('avatar');
            $fileNameImage = $file->getClientOriginalName();
            $file->move(public_path("/uploads/block/" . $id . '/avatar/'), $fileNameImage);
            $imageUrl = '/uploads/block/' . $id . '/avatar/' . $fileNameImage;
        }
        $input['avatar'] = $imageUrl;
        $schoolblock->update($input);
        return Redirect::action('SchoolBlockController@index'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        SchoolBlock::destroy($id);
        return Redirect::action('SchoolBlockController@index');
    }
}
