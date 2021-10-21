@extends('common.default')
@section('content')
<!-- top tiles -->
<h3>Cài đặt chung Livestream</h3>
<!-- main -content  -->
{{ Form::open(array('action' => array('LivestreamAnotherVideoController@store'), 'method' => "POST", 'multiple'=>true,'class'=>'form','files' => true)) }}
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
        @csrf
        <div class="form-horizontal form-label-left">
            <div class="form-group row">
                <div class="col-md-6 col-sm-6">
                    <input type="text" name="video_another_source_id" id="video_source_id" value="{{ old('video_another_source_id') }}" required="required" class="form-control">
                </div>
                <button id="load_video_source" class="col-form-label col-md-2 col-sm-2">Load video
                </button>
            </div>
            <div class="form-group row">
                <label class="StepTitle">Liên kết video </label>
                <div class="row clearfix"></div>
                <div id="video_source_detail" class="col-md-12">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-lg-6">
                    <label class="col-lg-6 col-md-6 col-sm-6">Tiêu đề Livestream</label>
                    <div class="col-md-10 col-sm-10 col-lg-12">
                        {{ Form::text('name', old('name'), array('class' => 'form-control')) }}
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
                    <textarea name="description" value="{{ old('description') }}" require="true" class="form-control " id="editor1"></textarea>
                </div>
            </div>
        </div>
    </div>
    <div class="step">
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
                    <input type="file" onchange="readURL(this);" id = "file_image_small" name="file_image_small" class="form-control-file">
                </div>
                <!-- Uploaded image area-->
                <div class="col-md-12"><img id="imageResult" src="#" alt="" width="200px" height="100px"></div>
            </div>
            <div class="row form-group">
                <label class="control-label col-md-2 col-sm-2">Cover lớn liveStream</label>
                <div class="col-sm-10 col-md-10">
                    <input id="upload1" type="file" name="file_image_big" id="file_image_big" onchange="readURL1(this);">
                </div>
                <!-- Upload image input-->
                <div class="col-md-12"><img id="imageResult1" src="#" alt="" width="400px" height="200px"></div>
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
            <div class="col-md-12">
                <label class="control-label col-md-2 col-sm-2 ">Thời hạn hiển thị</label>
                <div class="col-md-4 col-sm-4 ">
                    <input type="dateTime-local" name="end_time" id="input_publish_time" class="form-control">
                </div>
            </div>
            <div class="col-md-12" id="timeShow">

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
    </div>
</div>
{{ Form::close() }}
@include('livestream_hocmai_video.script')
@stop