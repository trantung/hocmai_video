@extends('common.default')
@section('content')
<!-- top tiles -->
<h3>Cài đặt chung Livestream</h3>
<p class="pull-left"><a href="{{action('AdminController@index')}}"><i class="fa fa-backward"></i></a></p>
<!-- main -content  -->
{{ Form::open(array('action' => array('LivestreamAnotherVideoController@update',$livestream->id), 'method' => "PUT", 'multiple'=>true,'class'=>'form','files' => true)) }}
<div class="col-md-12">
    <div class="step">
        <label class="StepTitle">Thêm ID video nguồn khác </label>
        @if (Session::has('message'))
        <div class="alert alert-danger">
            <ul>
                <li>{{ Session::get('message') }}</li>
            </ul>
        </div>
        @endif
        @if (session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif
        @csrf
        <div class="form-horizontal form-label-left">
            <div class="form-group row">
                <div class="col-md-6 col-sm-6">
                    <input type="text" name="video_another_source_id" id="video_source_id" value="{{ getUrlSourceVideoId($livestream->id) }}" disabled="true" required="required" class="form-control">
                </div>
                <button id="load_video_source" class="col-form-label col-md-2 col-sm-2" disabled='true'>Load video
                </button>
            </div>
            <div class="form-group row">
                <label class="StepTitle">Liên kết video </label>
                <div class="row clearfix"></div>
                <div id="video_source_detail" class="col-md-12">
                    <div class="col-md-12">
                        <div class="col-md-2">
                        {{getUrlSourceVideoName($livestream->id)}}<i class="fa fa-times del"></i>
                        </div>
                    </div>
                    <div class="col-md-12" style="display: block;margin:5px" id="edit_livestream">
                        <p class="text-danger">Quý khách vui lòng xóa liên kết video để load ID mới</p>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-lg-6">
                    <label class="col-lg-6 col-md-6 col-sm-6">Tiêu đề Livestream</label>
                    <div class="col-md-10 col-sm-10 col-lg-12">
                        {{ Form::text('name', $livestream->name, array('class' => 'form-control')) }}
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-sm-6">
                    <label class="col-md-6 col-sm-6 col-lg-6 ">Yêu cầu đăng nhập</label>
                    <div class="col-md-8 col-sm-8 col-lg-8">
                        {{ Form::select('require_login', getArrayStatus(), old('require_login'), array('class' => 'form-control')) }}
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-6 col-lg-6 col-sm-6">
                    <label class="col-md-6 col-sm-6 col-lg-6">Kênh phát</label>
                    <div class="col-md-8 col-sm-8 col-lg-12">
                        @if(checkUserRole() == ADMIN)
                        {{ Form::select('schoolblock_id', getListKhoi(), old('schoolblock_id'), array('class' => 'form-control','id'=>'schoolblock_id')) }}
                        @else
                        {{ Form::select('schoolblock_id', getListKhoi(), getSchoolblockByUser(),array('class' => 'form-control', 'disabled' => true)) }}
                        @endif
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-sm-6" id="class_id">
                    <label id="label_class1" class="col-lg-6 col-md-6 col-sm-6">Lớp</label>
                    <div id="class1" class="col-md-8 col-sm-8 col-lg-8">
                        <select class="form-control" name="class_id">
                            <option value="1">Lớp 12</option>
                            <option value="2">Lớp 10</option>
                            <option value="3">Lớp 11</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-6 col-lg-6 col-sm-6">
                    <label class="col-md-6 col-sm-6 col-lg-6">Giáo viên</label>
                    <div class="col-md-8 col-sm-8 col-lg-12">
                        {{ Form::select('teacher_id', getListGv(), old('teacher_id'), array('class' => 'form-control')) }}
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-sm-6">
                    <label class="col-md-6 col-sm-6 col-lg-6">Môn</label>
                    <div class="col-md-8 col-sm-8 col-lg-8">
                        {{ Form::select('subject_id', getListMon(), old('subject_id'),array('class' => 'form-control')) }}
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <div class="form-group col-md-12">
                    <label>Nội dung</label>
                    {{ Form::textarea('description', $livestream->description, array('class' => 'form-control','id'=>'editor1')) }}
                </div>
            </div>
        </div>
    </div>
    <div class="step">
        <h2 class="StepTitle">Cấu hình VideoStream</h2>
        <div class="form-horizontal form-label-left">
            
            <div class="row form-group">
                <label class="control-label col-md-2 col-sm-2">Cover nhỏ liveStream</label>
                <div class="col-sm-10 col-md-10">
                    <input type="file" onchange="readURL(this);" id="file_image_small" name="file_image_small" class="form-control-file">
                    
                </div>
                <!-- Uploaded image area-->
                <div class="col-md-12">
                    @if($livestream->image_small)
                        <img src="{{$livestream->image_small }}" width="150px" height="auto"  />
                    @endif
                    <img id="imageResult" src="#" alt="" width="200px" height="100px">
                </div>
            </div>
            <div class="row form-group">
                <label class="control-label col-md-2 col-sm-2">Cover lớn liveStream</label>
                <div class="col-sm-10 col-md-10">
                    <input id="upload1" type="file" name="file_image_big" id="file_image_big" onchange="readURL1(this);">
                </div>
                <!-- Upload image input-->
                <div class="col-md-12">
                     @if($livestream->image_big)
                        <img src="{{$livestream->image_big}}" width="400px">
                    @endif
                    <img id="imageResult1" src="#" alt="" width="400px" height="200px">
                </div>
                
            </div>
        </div>
    </div>
    <div class="step">
        <h2 class="StepTitle">Cấu hình thời gian</h2>
        <div class="form-group row">
            <div class="col-md-12">
                <label class="control-label col-md-2 col-sm-2 ">Thời điểm đăng Livestream</label>
                <div class="col-md-4 col-sm-4 ">
                    {{ Form::select('status_time', getArrayIsPublish(), old('is_publish'),array('class' => 'form-control','id'=>'selectTime')) }}
                </div>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-12" id="timeShow" style="display: none">
                <label class="control-label col-md-2 col-sm-2 ">Thời gian hẹn giờ phát</label>
                <div class="col-md-4 col-sm-4 ">
                    <input type="text" class="form-control" data-inputmask="'mask': '99/99/9999 99:99'" id="dd" name="timer_clock" value="{{Carbon\Carbon::parse($livestream->timer_clock)->format('d/m/Y H:i')}}">
                </div>
            </div>
            </div>
            <div class="col-md-12">
                <label class="control-label col-md-2 col-sm-2 ">Thời hạn hiển thị</label>
                <div class="col-md-4 col-sm-4 ">
                        <!-- <input type="text" class="form-control" id="datetime" name="datetime" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy HH:MM" data-inputmask-placeholder="dd/mm/yyyy hh:mm"> -->
                    <input type="text" class="form-control" data-inputmask="'mask': '99/99/9999 99:99'" id="aa" name="end_time" value="{{Carbon\Carbon::parse($livestream->end_time)->format('d/m/Y H:i')}}">
                    
                </div>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-12">
                <label for="#" class="col-lg-2">Comment Fake</label>
                <div class="col-lg-4">
                    <select name="commnentFake" id="commnentFake">
                        <option value="0">Không sử dụng</option>
                        <option value="1">Có sử dụng</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="form-group row" style="display:none" id="class_FormCommnet">
            <div class="col-lg-12 col-md-12">
                <div class="col-lg-6 col-md-6">
                    <label for="#" class="col-lg-4 col-md-4">Hình thức commentFake</label>
                    <div class="col-lg-8 col-md-8">
                        <select name="formCommnet" id="formCommnet" class="form-control">
                            <!-- <option value="0">Thủ công</option> -->
                            <option value="1">Tự động</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <label for="#" class="col-lg-4 col-md-4">Thời gian commentFake</label>
                    <div class="col-lg-8 col-md-8">
                        <select name="timeComment" id="timeComment" class="form-control">
                            <option value="0">1 phút 1 commmet</option>
                            <!-- <option value="1">2 phút 1 commmet</option>
                                <option value="2">3 phút 1 commmet</option>
                                <option value="3">4 phút 1 commmet</option>
                                <option value="4">5 phút 1 commmet</option>
                                <option value="5">6 phút 1 commmet</option>
                                <option value="6">ngẫu nhiêu thời gian</option> -->
                        </select>
                    </div>
                </div>
            </div>
            <div class="clearfix row"></div>
            <br>
            <div class="col-md-12" style="margin: 10px 0">
                <div class="col-md-4" id="durationComment">
                    <!-- hiển thị tổng số phút video  -->
                </div>
                <div class="col-md-8">
                    <label for="" class="col-md-6">Thời gian bắt đầu commnet(phút)</label>
                    <div class="col-md-6">
                        <input type="number" name="startTimeComment" id="startTimeLivestream" min="0" class="form-control">
                    </div>
                </div>
                <span>Số lượng comment dự kiến ? <input id="quatity_comment" disabled ></span>
            </div>
            <div class="clearfix row"></div>
            <div class="col-md-12">
                <button id="Load_user_comment" class="btn btn-info">Khởi tạo commnet</button>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Tên user</th>
                            <th>Commnet</th>
                            <th>Thời gian hiển thị</th>
                            <th>Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>0</td>
                            <td>dangnv</td>
                            <td>bài giảng hay</td>
                            <td>03:12</td>
                            <td><a href="#">Xóa</a></td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>dangnv1</td>
                            <td>bài giảng hay</td>
                            <td>03:12</td>
                            <td><a href="#">Xóa</a></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>dangnv2</td>
                            <td>bài giảng hay</td>
                            <td>03:12</td>
                            <td><a href="#">Xóa</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="pull-right">
                <button type="button" class="action btn-sky text-capitalize back btn">Trở lại</button>
                <button type="button" class="action btn-sky text-capitalize next btn">Tiếp</button>
                <button type="submit" name="submit" class="action btn-hot text-capitalize submit btn">lưu</button>
            </div>
        </div>
        <div id="back-to-top"><a href="#"><i class="fa fa-sort-up"></i></a></div>
    </div>
</div>
{{ Form::close() }}
@include('livestream_hocmai_video.script')
@stop