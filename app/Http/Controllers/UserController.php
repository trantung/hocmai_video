<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\AdminController;
use APV\User\Models\User;
use Illuminate\Support\Facades\Hash;
use Session;

class UserController extends AdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = User::all();
        return view('user.index')->with(compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.create');
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
        $input['password'] = Hash::make($input['password']);
        $userId = User::create($input)->id;
        
        if (request()->file('avatar')) {
            $file = $request->file('avatar');
            $fileNameImage = $file->getClientOriginalName();
            $file->move(public_path("/uploads/admin/" . $userId . '/avatar/'), $fileNameImage);
            $imageUrl = '/uploads/admin/' . $userId . '/avatar/' . $fileNameImage;
        }
        User::where('id', $userId)->update(['avatar' => $imageUrl]);
        return Redirect::action('UserController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('user.edit')->with(compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request ,$id)
    {
        $input = $request -> all();
        $user = User::find($id);
        $imageUrl = $user->avatar;
        //dd($imageUrl);
        $file = request()->file('avatar');
        if ($file) {
            $fileNameImage = $file->getClientOriginalName();
           $file->move(public_path("/uploads/admin/"),$fileNameImage);
           $imageUrl = '/uploads/admin/'.$fileNameImage;
        }
        $password = Hash::make($input['password']);
        $user->name = request('name');
        $user->username = request('username');
        $user->email = request('email');
        $user->password = $password;
        $user->avatar = $imageUrl;
        $user->role_id = request('role_id');
        $user->save();
        return Redirect::action('UserController@index'); 
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::destroy($id);
        return Redirect::action('UserController@index');
    }
}
