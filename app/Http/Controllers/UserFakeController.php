<?php

namespace App\Http\Controllers;

use App\UserFake;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class UserFakeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = UserFake::all()->sortByDesc('id');
        return view('userfake.index')->with(compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('userfake.create');
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
        $userFakeId = UserFake::create($input)->id;
        if (request()->file('avatar')) {
            $file = $request->file('avatar');
            $fileNameImage = $file->getClientOriginalName();
            $file->move(public_path("/uploads/userFake/" . $userFakeId . '/avatar/'), $fileNameImage);
            $imageUrl = '/uploads/userFake/' . $userFakeId . '/avatar/' . $fileNameImage;
        }
        UserFake::where('id', $userFakeId)->update(['avatar' => $imageUrl]);

        return Redirect::action('UserFakeController@index');
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
        $data = UserFake::find($id);
        return view('userfake.edit')->with(compact('data'));
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
        $data = UserFake::find($id);
        $imageUrl = $data->avatar;
        if (request()->file('avatar')) {
            $file = $request->file('avatar');
            $fileNameImage = $file->getClientOriginalName();
            $file->move(public_path("/uploads/userFake/" . $id . '/avatar/'), $fileNameImage);
            $imageUrl = '/uploads/userFake/' . $id . '/avatar/' . $fileNameImage;
        }
        $input['avatar'] = $imageUrl;
        $data->update($input);
        return Redirect::action('UserFakeController@index'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        UserFake::destroy($id);
        return Redirect::action('UserFakeController@index');
    }
}
