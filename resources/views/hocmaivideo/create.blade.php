@extends('common.default')
@section('content')
<div class="col-md-12 col-sm-12  ">
  <div class="x_panel">
    <div class="x_title">
        <a class="text-danger" href="{{ action('HocMaiVideoController@index') }}" title="trở lại"><i class="fa fa-backward"></i></a>
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
        <div class="col-md-6 col-sm-6 col-lg-6">
          <label for="url"class="col-md-2 col-sm-2">Link video</label>
          <div class="col-md-10 col-sm-10 ">
            <input type="text" name="url" id="url"class="form-control" required>
          </div>
        </div>
        <div class="col-md-6 col-sm-6 col-lg-6">
          <label for="title"class="col-md-2 col-sm-2">Tiêu đề</label>
          <div class="col-md-10 col-sm-10 ">
            <input type="text" name="title" id="title" class="form-control"required >
          </div>
        </div>
      </div>
      <div class="form-group row">
        <div class="col-md-6 col-sm-6 col-lg-6">
          <label for="scorm_id" class="col-md-2 col-sm-2">ID Học Mãi</label>
          <div class="col-md-10 col-sm-10 ">
            <input type="number" name="scorm_id" id="scorm_id" class="form-control"required >
          </div>
        </div>
        <div class="col-md-6 col-sm-6 col-lg-6">
          <label class="col-md-2 col-sm-2">Tên Khối</label>
          <div class="col-md-10 col-sm-10 ">
            {{ Form::select('schoolblock_id', getListKhoi(), array('class' => 'form-control')) }}
          </div>
        </div>
      </div>
      <div class="form-group row">
        
        <div class="col-md-6 col-sm-6 col-lg-6">
          <label class="col-md-2 col-sm-2">Tên Lớp</label>
          <div class="col-md-10 col-sm-10 ">
            {{ Form::select('class_id', getListClass(), array('class' => 'form-control')) }}
          </div>
        </div>
        <div class="col-md-6 col-sm-6 col-lg-6">
          <label class="col-md-2 col-sm-2">Tên Môn</label>
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