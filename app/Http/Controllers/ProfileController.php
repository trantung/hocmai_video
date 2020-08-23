<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use APV\User\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\User as AuthUser;
use Illuminate\Support\Facades\Redirect;
// use Auth;
// use App\User;

class ProfileController extends Controller{
    public function index() {
        $user = Auth::user();
        return view('profile.index', compact('user'));
    }
    public function update(Request $request, $id) {
            $input = $request -> all();
          $user = Auth::user();
          $this->validate($request, [
              'name' => 'required|max:255|unique:users,name,'.$user->id,
              'email' => 'required|email|max:255|unique:users,email,'.$user->id,
          ]);
            $user->name = $request->name;
            $user->email = $request->email;
          //  dd($user->email);
        
          $userId = User::find($id);
          $imageUrl = $userId->avatar;
          $file = request()->file('avatar');
          if($request->password != $userId->password){
            $user->password = Hash::make($request->password);
            $user->save();
          }
          if (request()->file('avatar')) {
            $file = $request->file('avatar');
            $fileNameImage = $file->getClientOriginalName();
            $file->move(public_path("/uploads/admin/" . $userId . '/avatar/'), $fileNameImage);
            $imageUrl = '/uploads/admin/' . $userId . '/avatar/' . $fileNameImage;
        }
        
        User::where('id', $userId)->update(['avatar' => $imageUrl]);
          $input = $request->only('name','email','role_id','avatar');
          $user->update($input);
          return Redirect::action('AdminController@index'); 
      }
}








?>