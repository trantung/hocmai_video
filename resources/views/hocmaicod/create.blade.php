@extends('common.default')
@section('content')
<div class="col-md-12 col-sm-12  ">
  <div class="x_panel">
    <div class="x_title">
        <a class="text-danger" href="{{ action('HocMaiCodController@index') }}" title="trở lại"><i class="fa fa-backward"></i></a>
      <ul class="nav navbar-right panel_toolbox">
        <li>
          <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
        </li>
      </ul>
      <div class="clearfix"></div>
    </div>
    <div class="x_content">
      <br>
      {{ Form::open(array('method'=>'POST', 'action' => array('HocMaiCodController@store'),'class'=>'form-horizontal form-label-left')) }}
        <div class="form-group row">
          <div class="col-md-9 col-sm-9 col-lg-9">
            <label class="text-label">Phiên bản ứng dụng</label>
            <input type="text" name="app_version" id="app_version" class="form-control"required >
          </div>
          <div class="col-md-3 col-sm-3 col-lg-3">
            <label class="text-label">Hệ điều hành</label>
              {{ Form::select('os_id', getAppOs(),null, array('class' => 'form-control select_app')) }}
            </div>
        </div>
        <div class="form-group row">
          <div class="col-md-9 col-sm-9 col-lg-9">
            <label class="text-label">Adjust_event</label>
            <input type="text" name="adjust_event" id="adjust_event" class="form-control"required >
          </div>
          <div class="col-md-3 col-sm-3 col-lg-3">
            <label class="text-label">Trạng thái</label>
              {{ Form::select('status', getStatusHeaderFooter(),null, array('class' => 'form-control select_app')) }}
          </div>
        </div>
        <div class="form-group row">
          <div class="form-group col-md-12">
            <label>Nội dung</label>
            <textarea name="desc" value="{{ old('desc') }}" require="true" class="form-control " id="editor1"></textarea>
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