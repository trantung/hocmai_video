@extends('common.default')
@section('content')
<div class="col-md-12 col-sm-12  ">
  <div class="x_panel">
    <h2>Sửa tên {{ $class->name }}</h2>
    <div class="x_title">
    <a href="{{ action('ClassController@index') }}" class="text-danger" title="trở lại"><i class="fa fa-backward"></i></a>
      <ul class="nav navbar-right panel_toolbox">
        <li>
          <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
        </li>
      </ul>
      <div class="clearfix"></div>
    </div>
    <div class="x_content">
      <br>
      {{ Form::open(array('method'=>'PUT', 'action' => array('ClassController@update', $class->id))) }}
      <div class="form-group row">
        <div class="col-md-6 col-sm-6  ">
        <label class="control-label col-md-2 col-sm-2">Tên lớp</label>
          <div class="col-md-11 col-sm-11">
            <input type="text" name="name" id="name" value="{{$class->name}}" required data-errormessage-value-missing="Please input something" placeholder ="tên lớp" >
          </div>
        </div>
        <div class="col-md-6 col-sm-6  ">
          <label class="col-md-3 col-sm-3">Khối</label>
          <div class="col-md-10 col-sm-10 ">
          {{ Form::select('schoolblock_id', getListKhoi(),$class->schoolblock_id, array('class' => 'form-control')) }}
          </div>
        </div>
      </div>
      <div class="form-group row">
        <div class="col-md-12 col-sm-12">
          <label class="col-md-3 col-sm-3">Mô tả</label>
          <div class="col-md-11 col-sm-11">
            {{ Form::textarea('desc', $class->desc, array('class' => 'form-control','id'=>'editor1')) }}
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
