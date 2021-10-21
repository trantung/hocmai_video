@extends('common.default')
@section('content')
<div class="col-md-12 col-sm-12  ">
  <div class="x_panel">
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
      {{ Form::open(array('method'=>'POST','files'=>true, 'action' => array('UserFakeController@store'),'class'=>'form-horizontal form-label-left')) }}
      <div class="form-group row">
        <label class="col-lg-2">Tên</label>
        <div class=" col-lg-9">
          <input type="text" class="form-control" required="true" name="name" id="name">
        </div>
      </div>
      <div class="form-group row">
        <label class=" col-lg-2">Họ và tên</label>
        <div class="col-lg-9">
          <input type="text" class="form-control" required="true" name="fullname" id="fullname">
        </div>
      </div>
      <div class="row form-group">

        <label class="col-lg-12">ảnh đại diện</label>
        <div class="multiselect_div">
          <input type="file" class="form-control" required="true" name="avatar" id="avatar">
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