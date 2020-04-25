@extends('common.default')
@section('content')
<div class="col-md-12 col-sm-12  ">
  <div class="x_panel">
    <h2>Sửa tên: {{ $teacher->name }} </h2>
    <div class="x_title">
      <a href="{{ action('TeacherController@index') }}" class="btn btn-danger">Trở lại</a>
      <ul class="nav navbar-right panel_toolbox">
        <li>
          <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
        </li>
      </ul>
      <div class="clearfix"></div>
    </div>
    <div class="x_content">
      <br>
      {{ Form::open(array('action' => array('TeacherController@update', $teacher->id), 'method' => "PUT", 'files' => true)) }}
      <div class="form-group row">
        <div class="col-md-12 col-sm-12  ">
        <label class="control-label col-md-2 col-sm-2">Tên Giáo viên</label>
          <div class="col-md-11 col-sm-11">
            <input type="text" name="name" id="name" required data-errormessage-value-missing="Please input something" value="{{$teacher->name}}" >
          </div>
        </div>
        <div class="col-md-12 col-sm-12  ">
          <label class="control-label col-md-2 col-sm-2">Mô tả</label>
          <div class="col-md-11 col-sm-11">
            {{ Form::textarea('desc', $teacher->desc, array('class' => 'form-control','id'=>'editor1')) }}
          </div>
        </div>
        <div class="col-md-12 col-sm-12  ">
          <label class="control-label col-md-2 col-sm-2">Ảnh đại diện</label>
          <div class="col-md-11 col-sm-11">
            <input type="file" name="avatar" class="form-control"><br>
            @if($teacher->avatar)
                <img src="{{$teacher->avatar }}" width="150px" height="auto"  />
            @endif
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
