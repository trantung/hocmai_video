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
        <div class="col-md-4 col-sm-4 col-lg-4">
          <label class="control-label col-md-2 col-sm-2">Tiêu đề</label>
          <div class="col-md-11 col-sm-11">
            {{ Form::text('title', $anothervideo->title, array('class' => 'form-control has-feedback-left','placeholder'=>'')) }}
          </div>
        </div>
        <div class="col-md-4 col-sm-4 col-lg-4">
          <label class="control-label col-md-2 col-sm-2">url</label>
          <div class="col-md-11 col-sm-11">
            {{ Form::text('url', $anothervideo->url, array('class' => 'form-control has-feedback-left','placeholder'=>'')) }}

          </div>
        </div>
        <div class="col-md-4 col-sm-4 col-lg-4">
          <label class="col-lg-4 col-md-4 col-sm-4">Độ dài video</label>
          <div class="col-md-10 col-sm-10">
            <input type="time" name="duration" value="{{gmdate('H:i:s', $anothervideo->duration)}}" step="1"/>
          </div>
        </div>
      </div>
      <div class="form-group row">
        <div class="col-md-4 col-sm-4 ">
          <label class="col-lg-6 col-md-6 col-sm-6">Kênh</label>
          <div class="col-md-10 col-sm-10 ">
            @if(checkUserRole() == ADMIN)
            {{ Form::select('schoolblock_id', getListKhoi(), $anothervideo->schoolblock_id, array('class' => 'form-control','id'=>'schoolblock_id')) }}
            @else
            {{ Form::select('schoolblock_id', getListKhoi(), getSchoolblockByUser(), array('class' => 'form-control', 'disabled' => true)) }}
            @endif
          </div>
        </div>
        <div class="col-md-4 col-sm-4" id="class_id">
          <label id="label_class1" class="col-lg-6 col-md-6 col-sm-6">Lớp</label>
          <div id="class1" class="col-md-8 col-sm-8 col-lg-8">
            <select class="form-control" name="class_id">
              <option value="1">Lớp 12</option>
              <option value="2">Lớp 10</option>
              <option value="3">Lớp 11</option>
            </select>
          </div>
        </div>
        <div class="col-md-4 col-sm-4">
          <label class="col-lg-6 col-md-6 col-sm-6">Môn</label>
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