@extends('common.default')
@section('content')
<div class="col-md-12 col-sm-12  ">
  <div class="x_panel">
    <h2>Thêm mới môn</h2>
    <div class="x_title">
      <a href="{{ action('SubjectController@index') }}" class="btn btn-danger">Trở lại</a>
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
        <div class="col-md-6 col-sm-6  form-group has-feedback">
          <b>Tên môn</b>
          {{ Form::text('name', null, array('class' => 'form-control has-feedback-left','placeholder'=>'tên môn')) }}
        </div>
        <div class="col-md-6 col-sm-6  form-group has-feedback">
          <b>Mô tả</b>
          {{ Form::textarea('desc', null, array('class' => 'form-control has-feedback-left','id'=>'editor1')) }}
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