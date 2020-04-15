<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use APV\User\Models\User;
use Illuminate\Foundation\Auth\User as AuthUser;
use Illuminate\Support\Facades\Redirect;

class ProfileController extends Controller{
    public function getAuthUser ()
    {
        return Auth::user();
    }
    public function updateAuthUser(Request $request)
    {
        $this->validate($request,[
            'email'=>'required|email|unique:users,email,'.Auth::id()
        ]);
        $user = User::find(Auth::id());
        $user->name = $request->name;
        $user->email= $request->email;
        $user->save();
        return Redirect::action('AdminController@index');

    }
}








?>