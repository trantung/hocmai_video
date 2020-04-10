@extends('common.default')
@section('content')
<div class="col-md-12 col-sm-12  ">
  <div class="x_panel">
    <div class="x_title">
      <h2 class="navbar-left">Sửa {{ $schoolblock->name }} && <a href="{{ action('SchoolBlockController@index') }}" style="color:darkred">Trở lại</a></h2>
      <ul class="nav navbar-right panel_toolbox">
        <li>
          <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
        </li>
      </ul>
      <div class="clearfix"></div>
    </div>
    <div class="x_content">
      <br>
      {{ Form::open(array('method'=>'PUT', 'action' => array('SchoolBlockController@update', $schoolblock->id))) }}
      <div class="form-group row">
        <div class="col-md-6 col-sm-6  form-group has-feedback">
        <label class="control-label col-md-2 col-sm-2">Tên lớp</label>
          <div class="col-md-11 col-sm-11">
            {{ Form::text('name', $schoolblock->name, array('class' => 'form-control has-feedback-left','placeholder'=>'Tên lớp')) }}
            <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
          </div>
        </div>
        <div class="col-md-6 col-sm-6  form-group has-feedback">
          <label class="control-label col-md-2 col-sm-2">Mô tả</label>
          <div class="col-md-11 col-sm-11">
            {{ Form::text('desc', $schoolblock->desc, array('class' => 'form-control has-feedback-left','placeholder'=>'mô tả')) }}
            <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
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
