@extends('common.default')
@section('content')
<!-- top tiles -->
<h3>Cài đặt chung Livestream</h3>
<!-- main -content  -->
{{ Form::open(array('action' => array('LivestreamAnotherVideoController@store'), 'method' => "POST", 'multiple'=>true,'files' => true)) }}
<div class="col-md-12">

    <div id="wizard_verticle" class="form_wizard wizard_verticle">
        <ul class="list-unstyled wizard_steps">
            <li>
                <a href="#step-11">
                    <span class="step_no">1</span>
                </a>
            </li>
            <li>
                <a href="#step-22">
                    <span class="step_no">2</span>
                </a>
            </li>
            <li>
                <a href="#step-33">
                    <span class="step_no">3</span>
                </a>
            </li>
        </ul>
        <div id="step-11">
            <span class="StepTitle">Thêm ID video nguồn khác </span>
            @if (Session::has('message'))
                <div class="alert alert-danger">
                    <ul>
                        <li>{{ Session::get('message') }}</li>
                    </ul>
                </div>
            @endif
            @csrf
            <div class="form-horizontal form-label-left">
                <div class="form-group row">
                    <div class="col-md-6 col-sm-6">
                        <input type="text" name="video_another_source_id" id="video_source_id" value="{{ old('video_another_source_id') }}" required="required" class="form-control">
                    </div>
                    <button id="load_video_source" class="col-form-label col-md-2 col-sm-2 btn btn-secondary">Load video
                    </button>
                </div>
                <div class="form-group row">
                    <p>Liên kết video </p>
                    <div id="error_load_video_source" class="col-md-12"></div>
                    <div class="row clearfix"></div>
                    <div id="video_source_detail" class="col-md-12">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="middle-name" class="col-form-label col-md-3 col-sm-3">Tiêu đề Livestream</label>
                    <div class="col-md-6 col-sm-6 col-lg-12">
                        {{ Form::text('name', old('name'), array('class' => 'form-control')) }}
                    </div>
                </div>
                <div class="form-group row">
                    <label class="control-label col-md-2 col-sm-2 ">Yêu cầu đăng nhập</label>
                    <div class="col-md-4 col-sm-4 ">
                        {{ Form::select('require_login', getArrayStatus(), old('require_login'), array('class' => 'form-control')) }}
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-3">
                        <label class="control-label col-md-6 col-sm-6">Giáo viên</label>
                        <div class="col-md-8 col-sm-8 ">
                            {{ Form::select('teacher_id', getListGv(), old('teacher_id'), array('class' => 'form-control')) }}
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label class="control-label col-md-6 col-sm-6">Kênh phát</label>
                        <div class="col-md-8 col-sm-8 ">
                            {{ Form::select('schoolblock_id', getListKhoi(), old('schoolblock_id'), array('class' => 'form-control')) }}
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label class="control-label col-md-6 col-sm-6">Lớp</label>
                        <div class="col-md-8 col-sm-8 ">
                            {{ Form::select('class_id', getListClass(), old('class_id'),array('class' => 'form-control')) }}
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label class="control-label col-md-6 col-sm-6">Môn</label>
                        <div class="col-md-8 col-sm-8 ">
                            {{ Form::select('subject_id', getListMon(), old('subject_id'),array('class' => 'form-control')) }}
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="form-group col-md-12">
                        <label>Nội dung</label>
                        <textarea name="description" value="{{ old('description') }}" class="form-control " id="editor1"></textarea>
                    </div>
                </div>
            </div>
        </div>
        <div id="step-22">
            <h2 class="StepTitle">Cấu hình VideoStream</h2>
            <div class="form-horizontal form-label-left">
                <div class="row form-group">
                    <label class="control-label col-md-2 col-sm-2 ">Lặp lại VideoStream</label>
                    <div class="col-md-4 col-sm-4 ">
                        {{ Form::select('repeat', getListRepeat(), old('repeat'),array('class' => 'form-control')) }}
                    </div>
                </div>
                <div class="row form-group">
                    <label class="control-label col-md-2 col-sm-2">Cover nhỏ liveStream</label>
                    <div class="col-sm-10 col-md-10">
                        <input type="file" onchange="readURL(this);" name="file_image_small" class="form-control-file">
                    </div>
                    <!-- Uploaded image area-->
                    <div class="col-md-12"><img id="imageResult" src="#" alt="" width="200px" height="100px"></div>
                </div>
                <div class="row form-group">
                    <label class="control-label col-md-2 col-sm-2">Cover lớn liveStream</label>
                    <div class="col-sm-10 col-md-10">
                        <input id="upload1" type="file" name="file_image_big" onchange="readURL1(this);">
                    </div>
                    <!-- Upload image input-->
                    <div class="col-md-12"><img id="imageResult1" src="#" alt="" width="400px" height="200px"></div>
                </div>
            </div>
        </div>
        <div id="step-33">
            <h2 class="StepTitle">Cấu hình thời gian</h2>
            <div class="form-horizontal form-label-left">
                <div class="form-group row">
                    <label class="control-label col-md-2 col-sm-2 ">Thời điểm đăng Livestream</label>
                    <div class="col-md-4 col-sm-4 ">
                        {{ Form::select('is_publish', getArrayIsPublish(), old('is_publish'),array('class' => 'form-control','id'=>'selectTime')) }}
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-12">
                        <label class="control-label col-md-2 col-sm-2 ">Thời hạn hiển thị</label>
                        <div class="col-md-4 col-sm-4 ">
                        <input type="dateTime-local" name="publish_time" id="input_publish_time" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-12" id="timeShow">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{ Form::close() }}
@include('livestream_hocmai_video.script')
@stop