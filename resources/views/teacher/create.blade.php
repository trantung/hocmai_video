@extends('common.default')
@section('content')
<div class="col-md-12 col-sm-12  ">
  <div class="x_panel">
    <h2>Thêm mới</h2>
    <div class="x_title">
      <a href="{{ action('TeacherController@index') }}"class="btn btn-danger">Trở lại</a>
      <ul class="nav navbar-right panel_toolbox">
        <li>
          <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
        </li>
      </ul>
      <div class="clearfix"></div>
    </div>
    <div class="x_content">
      <br>
      {{ Form::open(array('action' => array('TeacherController@store'), 'method' => "POST", 'files' => true)) }}
      <div class="form-group row">
        <div class="col-md-12 col-sm-12">
          <label class="control-label col-md-2 col-sm-2">Tên Giáo viên</label>
          {{ Form::text('name', null, array('class' => 'form-control','placeholder'=>'tên giáo viên')) }}
        </div>
      </div>
      <div class="form-group row">
        <div class="col-md-12 col-sm-12">
          <label class="control-label col-md-2 col-sm-2">mô tả</label>
          <div class="col-md-12">
            {{ Form::textarea('desc', null, array('class' => 'form-control','id'=>'editor1')) }}
          </div>
        </div>
      </div>
      <div class="form-group row">
        <div class="col-md-12">
          <label for="avatar" class="control-label col-md-3">Ảnh đại diện</label>
          {{ Form::file('avatar', null, array('id'=>'avatar')) }}
        </div>
      </div>
      <div class="form-group row">
          {{ Form::submit('Submit', array('class' => 'btn btn-success')) }}
          {{ Form::reset('Reset', array('class' => 'btn btn-info')) }}
      </div>
      {{ Form::close() }}
    </div>
  </div>
</div>
@stop