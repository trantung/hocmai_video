<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use App\Livestream;
use APV\User\Services\UserService;

class AdminController extends Controller
{
    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function getLogin()
    {
    	return view('admin.login');
    }

    public function postLogin(Request $request)
    {
        $input = $request->all();
    	if (!Auth::attempt(['username' => $input['username'], 'password' => $input['password']])) {
            return Redirect::action('AdminController@getLogin');
        }

    	return Redirect::action('AdminController@index');
    }

    public function getLogout()
    {
    	Auth::logout();
    	return Redirect::action('AdminController@getLogin');
    }

    public function getError()
    {
        return view('admin.404');
    }
    public function getBlank()
    {
        return view('admin.blank');
    }
    public function getTables()
    {
        return view('admin.tables');
    }
    public function getCharts()
    {
        return view('admin.charts');
    }
    public function getRegister()
    {
        return view('admin.register');
    }
    
    public function index(Request $request)
    {
       // $data = Livestream::all();
        $data = Livestream::query();
        $input = $request->all();
        $playStatus = array_key_first($input);
        if(array_key_first($input) != null){
            $data = $this->userService->getDashboard($playStatus);
        }else{
            $data = $this->userService->getDashboard($playStatus)->sortByDesc('id');
        }
        return view('admin.index')->with(compact('data'));
    }
}
