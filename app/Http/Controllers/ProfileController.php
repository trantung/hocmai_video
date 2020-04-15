<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use APV\User\Models\User;
use Illuminate\Foundation\Auth\User as AuthUser;
use Illuminate\Support\Facades\Redirect;
// use Auth;
// use App\User;

class ProfileController extends Controller{
    public function index() {
        $user = Auth::user();
        return view('profile.index', compact('user'));
    }
    public function update(Request $request) {
          $user = Auth::user();
          $this->validate($request, [
              'name' => 'required|max:255|unique:users,name,'.$user->id,
              'email' => 'required|email|max:255|unique:users,email,'.$user->id,
          ]);
          $input = $request->only('name','email');
          $user->update($input);
          return Redirect::action('AdminController@index'); 
      }
}








?>