@extends('common.default')
@section('content')
<div class="col-md-12 col-sm-12  ">
  <div class="x_panel">
    <div class="x_title">
      <h2 class="navbar-left">Thêm mới && <a class="btn btn-danger" href="{{ action('HocMaiVideoController@index') }}">Trở lại</a></h2>
      <ul class="nav navbar-right panel_toolbox">
        <li>
          <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
        </li>
      </ul>
      <div class="clearfix"></div>
    </div>
    <div class="x_content">
      <br>
      {{ Form::open(array('method'=>'POST', 'action' => array('HocMaiVideoController@store'),'class'=>'form-horizontal form-label-left')) }}
      <div class="form-group row">
        <div class="col-md-4 col-sm-4  form-group has-feedback">
          <label for="">ID Học Mãi</label>
          {{ Form::number('scorm_id', null, array('class' => 'form-control has-feedback-left')) }}
        </div>
        <div class="col-md-4 col-sm-4  form-group has-feedback">
          <label for="">Tiêu đề</label>
          {{ Form::text('title', null, array('class' => 'form-control has-feedback-left')) }}
        </div>
        <div class="col-md-4 col-sm-4  form-group has-feedback">
          <label for="">Link video</label>
          {{ Form::text('url', null, array('class' => 'form-control has-feedback-left')) }}
        </div>
      </div>
      <div class="form-group row">
        <div class="col-md-4 col-sm-4  form-group has-feedback">
          <label class="control-label col-md-3 col-sm-3">Tên Khối</label>
          <div class="col-md-10 col-sm-10 ">
            {{ Form::select('schoolblock_id', getListKhoi(), array('class' => 'form-control')) }}
          </div>
        </div>
        <div class="col-md-4 col-sm-4  form-group has-feedback">
          <label class="control-label col-md-3 col-sm-3">Tên Lớp</label>
          <div class="col-md-10 col-sm-10 ">
            {{ Form::select('class_id', getListClass(), array('class' => 'form-control')) }}
          </div>
        </div>
        <div class="col-md-4 col-sm-4  form-group has-feedback">
          <label class="control-label col-md-3 col-sm-3">Tên Môn</label>
          <div class="col-md-10 col-sm-10 ">
            {{ Form::select('schoolsubject_id', getListMon(), array('class' => 'form-control')) }}
          </div>
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