@extends('common.default')
@section('content')
<div class="col-md-12 col-sm-12  ">
  <div class="x_panel">
    <h2>Sửa tên: {{ $data->name }} </h2>
    <div class="x_title">
    <a href="{{ action('UserFakeController@index') }}" class="text-danger" title="Trở lại"><i class="fa fa-backward"></i></a>
      <ul class="nav navbar-right panel_toolbox">
        <li>
          <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
        </li>
      </ul>
      <div class="clearfix"></div>
    </div>
    <div class="x_content">
      <br>
      {{ Form::open(array('action' => array('UserFakeController@update', $data->id), 'method' => "PUT", 'files' => true)) }}
        <div class="form-group row">
          <label class="control-label col-md-2 col-sm-2">Tên</label>
          <div class="col-md-9 col-sm-9">
            <input type="text" name="name" id="name" required data-errormessage-value-missing="Please input something" value="{{$data->name}}" >
          </div>
        </div>
        <div class="form-group row  ">
          <label class="control-label col-md-2 col-sm-2">Họ & tên</label>
          <div class="col-md-9 col-sm-9">
            <input type="text" name="fullname" id="fullname" required data-errormessage-value-missing="Please input something" value="{{$data->fullname}}" >
          </div>
        </div>
        <div class="form-group row  ">
          <label class="col-md-2 col-sm-2">Ảnh đại diện</label>
          <div class="col-md-10 col-sm-10">
            <input type="file" name="avatar" class="form-control"><br>
            @if($data->avatar)
                <img src="{{$data->avatar }}" width="150px" height="auto"  />
            @endif
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
