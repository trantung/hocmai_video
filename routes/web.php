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
use APV\User\Models\User;

Route::get('/test/install_package', function(){
    User::create([
        'name' => 'Admin',
        'username' => 'super_admin',
        'role_id' => 1,
        'email' => 'trantunghn196@gmail.com',
        'password' => Hash::make(123456),
    ]);
    dd(11);
});

Route::get('/test/livestream', function(){
    $path = public_path('livestream/test.mp4');
    // dd($path);
    VideoStreamer::streamFile($path);
});

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
    Route::get('profile', 'ProfileController@index');
    Route::patch('profile/{id}', 'ProfileController@update');
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
    Route::resource('/header', 'HeaderController');
    Route::resource('/footer', 'FooterController');
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
Route::group(['prefix' => '/api_hocmai'], function () {
    //danh sách các khôi
    Route::get('/block/list', 'ApiController@index');
    //chi tiet
    Route::post('/block/detail', 'ApiController@detail');

    //api dang phat livestream: lấy toàn bộ livestream khi có 
    //end_time >= now
    //nếu livestream có status_time = IS_PUBLISH_ACTIVE tức là đăng ngay thì dk thêm là created_at =< $now =< thời điểm kết thúc livestream(created_at + duration) trong đó duration = getDurationLivestream($livestreamId) tính theo phút
    //nêwus livestream có status_time = IS_PUBLISH_INACTIVE tương tự nhưng là clocker_time
    Route::post('/livestream/play/current', 'ApiController@livestreamPlayCurrent');
    // api lich phát là api lấy thông tin của livestream có status_time = IS_PUBLISH_INACTIVE
    Route::post('/livestream/calendar', 'ApiController@livestreamCalendar');
    //api chi tiết 1 livestream
    Route::post('/livestream/detail','ApiController@livestreamDetail');
    //api cho header va footer
    Route::get('/header','ApiController@getHeader');
    Route::get('/footer','ApiController@getFooter');
    //api nhan du lieu tu client day len
    Route::post('/livestream/data','ApiController@dataLivestream');
});

