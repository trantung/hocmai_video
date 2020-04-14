<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\CheckPermission;
// Route::get('/testvideo', function(){
//     return view('testvideo');
// });

Route::group(['prefix' => 'ajax'], function() {
    Route::post('load_video_source', 'AjaxController@loadVideoSource');
});

Route::get('/admin/login', ['uses' => 'AdminController@getLogin', 'as' =>'login']);
Route::post('/admin/login', ['uses' => 'AdminController@postLogin']);
Route::get('/admin/logout', ['uses' => 'AdminController@getLogout', 'as' =>'logout']);

Route::group(['prefix' => '/admin', 'middleware' => 'auth:web'], function () {
    Route::get('/dashboard', 'AdminController@index');
    Route::get('/error', 'AdminController@getError');
    Route::get('/blank', 'AdminController@getBlank');
    Route::get('/tables', 'AdminController@getTables');
    Route::get('/charts', 'AdminController@getCharts');
    Route::get('/register', 'AdminController@getRegister');
    //Role
    Route::resource('/role', 'RoleController');
    /* livestream hm */
    //khối học
    Route::resource('/schoolblock', 'SchoolBlockController')->middleware(CheckPermission::class);
    // môn học
    Route::resource('/subject', 'SubjectController')->middleware(CheckPermission::class);
    //User
    Route::resource('/user', 'UserController')->middleware(CheckPermission::class);
    //lớp học
    Route::resource('/class', 'ClassController')->middleware(CheckPermission::class);
    // giáo viên
    Route::resource('/teacher', 'TeacherController');
    // cấu hình livestream từ nguồn khác
    Route::get('/livestream/another_video', 'LivestreamAnotherVideoController@create');
    Route::post('/livestream/another_video', 'LivestreamAnotherVideoController@store');
    Route::get('/livestream/hocmai_video', 'LivestreamHocmaiVideoController@create');
    Route::post('/livestream/hocmai_video', 'LivestreamHocmaiVideoController@store');
    //video_hocmai_videos
    Route::resource('/hocmaivideo','HocMaiVideoController');
    Route::resource('/videohocmaivideo','VideoHocMaiVideoController');
    Route::resource('/videoanothervideo','VideoAnotherVideoController');
    Route::resource('/another/video','AnotherVideoController');
    //preview video
    Route::get('/preview/video/{id}', 'PreviewController@show');
    /* end livestream hm */

});

//api cho hocmai video
Route::group(['prefix' => '/api'], function () {
    //danh sách các khôi
    Route::get('/block/list', 'ApiController@index');


});

