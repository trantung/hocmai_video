<?php

namespace App\Http\Controllers;

use App\HocMaiHeader;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;


class HeaderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $data = HocMaiHeader::all();
        return view('header.index')->with(compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('header.create');
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
        $headerId = HocMaiHeader::create($input)->id;
        if (request()->file('image')) {
            $file = $request->file('image');
            $fileNameImage = $file->getClientOriginalName();
            $file->move(public_path("/uploads/admin/header/" . $headerId . '/image/'), $fileNameImage);
            $imageUrl = '/uploads/admin/header/' . $headerId . '/image/' . $fileNameImage;
        }
        HocMaiHeader::where('id', $headerId)->update(['image' => $imageUrl]);
        return Redirect::action('HeaderController@index');
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
        $header = HocMaiHeader::find($id);
        return view('header.edit')->with(compact('header'));
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
        $header = HocMaiHeader::find($id);
        $imageUrl = $header->image;
        if (request()->file('image')) {
            $file = $request->file('image');
            $fileNameImage = $file->getClientOriginalName();
            $file->move(public_path("/uploads/admin/header/" . $id . '/image/'), $fileNameImage);
            $imageUrl = '/uploads/admin/header/' . $id . '/image/' . $fileNameImage;
        }
        $input['image'] = $imageUrl;
        $header->update($input);
        return Redirect::action('HeaderController@index'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        HocMaiHeader::destroy($id);
        return Redirect::action('HeaderController@index');
    }
}
