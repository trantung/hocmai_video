@extends('common.default')
@section('content')
<div class="col-md-12 col-sm-12  ">
  <div class="x_panel">
    <div class="x_title">
      <a href="{{ action('SchoolBlockController@index') }}" class="text-danger" title="Trở lại"><i class="fa fa-backward"></i></a>
      <ul class="nav navbar-right panel_toolbox">
        <li>
          <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
        </li>
      </ul>
      <div class="clearfix"></div>
    </div>
    <div class="x_content">
      <br>
      {{ Form::open(array('method'=>'POST', 'action' => array('SchoolBlockController@store'),'class'=>'form-horizontal form-label-left','files'=>true)) }}
      <div class="form-group row">
        <div class="col-md-12 col-sm-12 ">
          <label>Tên Kênh</label>
          {{ Form::text('name', old('name'), array('class' => 'form-control has-feedback-left','placeholder'=>'Tên khối')) }}
          @if(Session::has('message'))<span class="text-danger">{{ Session::get('message') }}</span> @endif     
        </div>
      </div>
      <div class="form-group row">
        <div class="col-md-12 col-sm-12">
          <label>Mô tả</label>
          <textarea name="desc" class="form-control" id="editor1" required></textarea>
          <!-- {{ Form::textarea('desc', null, array('class' => 'form-control has-feedback-left','id'=>'editor1','placeholder'=>'Mô tả')) }} -->
        </div>
      </div>
      <div class="form-group row">
        <div class="col-md-12 col-sm-12">
          <label>Ảnh đại diện kênh </label>
          <input type="file" name="avatar" required>
          <!-- {{ Form::textarea('desc', null, array('class' => 'form-control has-feedback-left','id'=>'editor1','placeholder'=>'Mô tả')) }} -->
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