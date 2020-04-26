@extends('common.default')
@section('content')
<div class="col-md-12 col-sm-12  ">
  <div class="x_panel">
    <div class="x_title">
      <a href="{{ action('SubjectController@index') }}" class="text-danger" title="Trở lại"> <i class="fa fa-backward"></i></a>
      <ul class="nav navbar-right panel_toolbox">
        <li>
          <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
        </li>
      </ul>
      <div class="clearfix"></div>
    </div>
    <div class="x_content">
      <br>
      {{ Form::open(array('method'=>'POST', 'action' => array('SubjectController@store'),'class'=>'form-horizontal form-label-left')) }}
      <div class="form-group row">
        <div class="col-md-12 col-sm-12">
        <b>Tên môn</b>
          {{ Form::text('name', old('name'), array('class' => 'form-control ','placeholder'=>'tên môn','id'=>'name')) }}
          @if (Session::has('message'))<span class="text-danger">{{ Session::get('message') }}</span> @endif
        </div>
      </div>
      <div class="form-group row">
        <div class="col-md-12 col-sm-12  form-group ">
        <b>Mô tả</b>
          {{ Form::textarea('desc', old('desc'), array('class' => 'form-control','id'=>'editor1')) }}
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