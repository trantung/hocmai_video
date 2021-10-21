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
use App\Livestream;

Route::get('/delete_livestream_trash', function(){
    $data = Livestream::where('id','<', 106)->delete();
    
});
Route::get('/is_livestream_update_livestream', function(){
    $data = Livestream::all();
    foreach ($data as $key => $value) {
        $value->update(['is_livestreams' => IS_LIVESTREAM_TEST]);
    }
    dd(11);
});
Route::get('/format_db', function(){
    $data = Livestream::all();
    $timeEnd = date('Y-m-d', strtotime( '+14 days' ) );
    foreach ($data as $key => $value) {
        if ($value->status_time == IS_PUBLISH_ACTIVE) {
            $value->update(['timer_clock' => $value->created_at, 'end_time' => $timeEnd]);
        }
    }
});
Route::get('/format_endtime', function(){
    $data = Livestream::all();
    $timeEnd = date('Y-m-d', strtotime( '+14 days' ) );
    foreach ($data as $key => $value) {
        $value->update(['end_time' => $timeEnd]);
    }
});

Route::get('/test/livestream', function(){
    $path = public_path('livestream/test.mp4');
    // dd($path);
    VideoStreamer::streamFile($path);
});
Route::get('/register/create',function(){
    $data = User::all();
   // dd($data);
    $username = 'super_admin';
    $hashed = Hash::make('123456', [
    'memory' => 1024,
    'time' => 2,
    'threads' => 2,
    ]);
    foreach ($data as $key => $value) {
        if($value['username'] == 'super_admin'){
            $value->update(['password'=>$hashed]);
        }
    }
});
Route::post('register', 'AdminController@store');
Route::group(['prefix' => 'ajax'], function() {
    Route::post('load_video_source', 'AjaxController@loadVideoSource');
    Route::get('loadHeader','AjaxController@loadHeader');
    Route::get('loadFooter','AjaxController@loadFooter');
    Route::post('get_comment_fake','AjaxController@getCommentFake');
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
    // Route::get('/register', 'AdminController@getRegister');
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
    Route::GET('rateapp/os-detail','RateAppController@detail')->name('rateapp.os_detail')->middleware(CheckPermission::class);
    Route::resource('rateapp','RateAppController')->middleware(CheckPermission::class);
    // giáo viên

    Route::resource('/teacher', 'TeacherController');
    Route::resource('/header', 'HeaderController');
    Route::resource('/footer', 'FooterController');
    //hocmaiCod
    Route::resource('/hocmaicod','HocMaiCodController');
    //events
    Route::resource('/event', 'EventController');
    // cấu hình livestream từ nguồn khác
    Route::get('/livestream/another_video/create', 'LivestreamAnotherVideoController@create')->name('livestream_another_video.create');
    Route::post('/livestream/another_video', 'LivestreamAnotherVideoController@store');
    // Route::resource('/livestream/another_video','LivestreamAnotherVideoController');
    Route::get('/livestream/another_video/{id}/edit','LivestreamAnotherVideoController@edit');
    Route::delete('/livestream/{id}','LivestreamAnotherVideoController@destroy')->name('livestream.destroy');
    Route::get('/livestream/{id}/another_video','LivestreamAnotherVideoController@show');
    Route::put('/livestream/another_video/{id}/update','LivestreamAnotherVideoController@update');

    Route::get('/livestream/hocmai_video', 'LivestreamHocmaiVideoController@create');
    Route::post('/livestream/hocmai_video', 'LivestreamHocmaiVideoController@store');
    //commentfake

    Route::resource('/commentfake','CommentFakeController');
    //userfake
    Route::resource('/userfake','UserFakeController');

    //video_hocmai_videos
    Route::resource('/hocmaivideo','HocMaiVideoController');
    Route::resource('/videohocmaivideo','VideoHocMaiVideoController');
    Route::resource('/videoanothervideo','VideoAnotherVideoController');
    Route::resource('/another/video','AnotherVideoController');
    //preview video
    Route::get('/preview/video/{id}', 'PreviewController@show');
    /* end livestream hm */

    //app version
    Route::resource('/manager/app','ManagerAppController');
    
    Route::get('/manager/app','ManagerAppController@index');
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
    // api lich phát
    Route::post('/livestream/calendar', 'ApiController@livestreamCalendar');
    //api chi tiết 1 livestream
    Route::post('/livestream/detail','ApiController@livestreamDetail');
    //api cho header va footer
    Route::get('/header','ApiController@getHeader');
    Route::get('/footer','ApiController@getFooter');
    //api nhan du lieu tu client day len
    Route::post('/livestream/data','ApiController@dataLivestream');
    //api rate app: 
    Route::post('/app/rate','ApiController@rateApp');
    Route::post('/app/rate/current_rate','ApiController@currentRate');
    // api events app
    Route::get('/event','ApiController@getEvent');
    Route::post('/eventDetail','ApiController@getEventDetail');
    //api get app version. Param: app_id = 1, (2)
    Route::post('/app/version/detail','ApiController@postAppVersionDetail');
    //api cho danh sách ngân hàng
    Route::get('/bank/list','ApiController@getBankList');
    //api nhan thong tin cod
    Route::post('/cod','ApiController@postCod');
    Route::post('/cod_list','ApiController@postCodList');
    Route::post('/cod_per','ApiController@postCodPer');

});

