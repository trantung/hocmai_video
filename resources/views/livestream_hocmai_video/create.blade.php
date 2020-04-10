@extends('common.default')
@section('content')
    <!-- top tiles -->
    <h3>Cài đặt chung Livestream</h3>
    <!-- main -content  -->
    {{ Form::open(array('action' => array('LivestreamHocmaiVideoController@store'), 'method' => "POST", 'multiple'=>true,'files' => true)) }}
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
                <span class="StepTitle">Thêm ID hocmai</span>
                <div class="form-horizontal form-label-left">
                    <div class="form-group row">
                        <div class="col-md-6 col-sm-6">
                            <input type="text" id="video_source_id" required="required" class="form-control">
                        </div>
                        <button id="load_video_source" class="col-form-label col-md-2 col-sm-2 btn btn-secondary" >Load video
                        </button>
                    </div>
                    <div class="form-group row">
                        <p>Liên kết video </p>
                        <div id="error_load_video_source"></div>
                        <div id="video_source_detail">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="middle-name" class="col-form-label col-md-3 col-sm-3">Tiêu đề Livestream</label>
                        <div class="col-md-6 col-sm-6 col-lg-12">
                            {{ Form::text('name', null, array('class' => 'form-control')) }}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="control-label col-md-2 col-sm-2 ">Yêu cầu đăng nhập</label>
                        <div class="col-md-4 col-sm-4 ">
                            {{ Form::select('require_login', getArrayStatus(), array('class' => 'form-control')) }}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="control-label col-md-2 col-sm-2 ">Giáo viên</label>
                        <div class="col-md-4 col-sm-4 ">
                            {{ Form::select('teacher_id', getListGv(), array('class' => 'form-control')) }}
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="form-group col-md-12">
                             <label>Nội dung</label>
                             <textarea name="description" class="form-control " id="editor1"></textarea>
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
                            {{ Form::select('repeat', getListRepeat(), array('class' => 'form-control')) }}
                        </div>
                    </div>
                    <div class="row form-group">
                        <label class="control-label col-sm-2 col-sm-2">Cover nhỏ liveStream</label>
                        <!-- For demo purpose -->
                        <input type="file" name="file_image_small"/>
                    </div>
                    <div class="row form-group">
                        <label class="control-label col-sm-2 col-sm-2">Cover lớn liveStream</label>
                        <input type="file" name="file_image_big"/>
                    </div>
                </div>
            </div>
            <div id="step-33">
                <h2 class="StepTitle">Cấu hình thời gian</h2>
                <div class="form-horizontal form-label-left">
                    <div class="form-group row">
                        <label class="control-label col-md-2 col-sm-2 ">Thời điểm đăng Livestream</label>
                        <div class="col-md-4 col-sm-4 ">
                            {{ Form::select('publish_time', getListTimePublish()) }}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="control-label col-md-2 col-sm-2 ">Thời hạn hiển thị</label>
                        <div class="col-md-4 col-sm-4 ">
                            {{ Form::text('timer_clock', null, array('class' => 'form-control')) }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{ Form::submit('Submit', array('class' => 'btn btn-success')) }}
    {{ Form::close() }}

    @include('livestream_another_video.script')
@stop