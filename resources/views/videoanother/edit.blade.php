@extends('common.default')
@section('content')
<div class="col-md-12 col-sm-12  ">
  <div class="x_panel">
    <div class="x_title">
      <h2 class="navbar-left">Sửa {{ $videoanother->name }} && <a href="{{ action('TeacherController@index') }}" style="color:darkred">Trở lại</a></h2>
      <ul class="nav navbar-right panel_toolbox">
        <li>
          <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
        </li>
      </ul>
      <div class="clearfix"></div>
    </div>
    <div class="x_content">
      <br>
      {{ Form::open(array('method'=>'PUT', 'action' => array('VideoAnotherController@update', $videoanother->id))) }}
      <div class="form-group row">
        <div class="col-md-6 col-sm-6  form-group has-feedback">
        <label class="control-label col-md-2 col-sm-2">Tiêu đề</label>
          <div class="col-md-11 col-sm-11">
            {{ Form::text('title', $videoanother->title, array('class' => 'form-control has-feedback-left','placeholder'=>'Tên lớp')) }}
          </div>
        </div>
        <div class="col-md-6 col-sm-6  form-group has-feedback">
          <label class="control-label col-md-2 col-sm-2">url</label>
          <div class="col-md-11 col-sm-11">
            {{ Form::text('url', $videoanother->url, array('class' => 'form-control has-feedback-left','placeholder'=>'mô tả')) }}
           
          </div>
        </div>
      </div>
      <div class="form-group row">
        <div class="col-md-4 col-sm-4 form-group has-feedback">
            <label class="control-label col-md-2 col-sm-2">Khối</label>
            <div class="col-md-11 col-sm-11 ">
              {{ Form::select('schoolbock_id', getListKhoi(),$videoanother->schoolbock_id, array('class' => 'form-control')) }}
            </div>
        </div>
        <div class="col-md-4 col-sm-4  form-group has-feedback">
            <label class="control-label col-md-2 col-sm-2">Lớp</label>
            <div class="col-md-11 col-sm-11 ">
              {{ Form::select('class_id', getListClass(),$videoanother->class_id, array('class' => 'form-control')) }}
            </div>
        </div>
        <div class="col-md-4 col-sm-4  form-group has-feedback">
            <label class="control-label col-md-2 col-sm-2">Môn</label>
            <div class="col-md-11 col-sm-11 ">
              {{ Form::select('schoolSubjects_id', getListMon(),$videoanother->schoolSubjects_id, array('class' => 'form-control')) }}
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
