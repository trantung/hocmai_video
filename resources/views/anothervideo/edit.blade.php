@extends('common.default')
@section('content')
<div class="col-md-12 col-sm-12  ">
  <div class="x_panel">
    <h2>Sửa {{ $anothervideo->title }}</h2>
    <div class="x_title">
      <a href="{{ action('AnotherVideoController@index') }}" class="btn btn-danger">Trở lại</a>
      <ul class="nav navbar-right panel_toolbox">
        <li>
          <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
        </li>
      </ul>
      <div class="clearfix"></div>
    </div>
    <div class="x_content">
      <br>
      {{ Form::open(array('method'=>'PUT', 'action' => array('AnotherVideoController@update', $anothervideo->id))) }}
      <div class="form-group row">
        <div class="col-md-6 col-sm-6  form-group has-feedback">
          <label class="control-label col-md-2 col-sm-2">Tiêu đề</label>
          <div class="col-md-11 col-sm-11">
            {{ Form::text('title', $anothervideo->title, array('class' => 'form-control has-feedback-left','placeholder'=>'')) }}
          </div>
        </div>
        <div class="col-md-6 col-sm-6  form-group has-feedback">
          <label class="control-label col-md-2 col-sm-2">url</label>
          <div class="col-md-11 col-sm-11">
            {{ Form::text('url', $anothervideo->url, array('class' => 'form-control has-feedback-left','placeholder'=>'')) }}

          </div>
        </div>
      </div>
      <div class="form-group row">
        <div class="col-md-3 col-sm-3  form-group has-feedback">
          <label class="control-label col-md-4 col-sm-4">Độ dài video</label>
          <div id="datetimepicker3" class="col-md-8 col-sm-8 input-append">
            <input data-format="hh:mm:ss" type="text" name="duration" class="form-control"></input>
            <span class="add-on">
              <i data-time-icon="icon-time" data-date-icon="icon-calendar" >
              </i>
            </span>
          </div>
        </div>
        <div class="col-md-3 col-sm-3 form-group has-feedback">
          <label class="control-label col-md-2 col-sm-2">Khối</label>
          <div class="col-md-10 col-sm-10 ">
              @if(checkUserRole() == ADMIN)
                {{ Form::select('schoolblock_id', getListKhoi(), $anothervideo->schoolblock_id, array('class' => 'form-control')) }}
                @else
                {{ Form::select('schoolblock_id', getListKhoi(), getSchoolblockByUser(), array('class' => 'form-control', 'disabled' => true)) }}
              @endif
          </div>
        </div>
        <div class="col-md-3 col-sm-3  form-group has-feedback">
          <label class="control-label col-md-2 col-sm-2">Lớp</label>
          <div class="col-md-10 col-sm-10 ">
            {{ Form::select('class_id', getListClass(),$anothervideo->class_id, array('class' => 'form-control')) }}
          </div>
        </div>
        <div class="col-md-3 col-sm-3  form-group has-feedback">
          <label class="control-label col-md-2 col-sm-2">Môn</label>
          <div class="col-md-10 col-sm-10 ">
            {{ Form::select('subject_id', getListMon(),$anothervideo->subject_id, array('class' => 'form-control')) }}
          </div>
        </div>
      </div>
      <div class="form-group row">
        {{ Form::submit('Submit', array('class' => 'btn btn-success')) }}
      </div>
      {{ Form::close() }}
    </div>
  </div>
</div>
@stop