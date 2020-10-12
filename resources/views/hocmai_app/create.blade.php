@extends('common.default')
@section('content')
<div class="col-md-12 col-sm-12  ">
  <div class="x_panel">
    <div class="x_title">
        <a class="text-danger" href="{{ action('ManagerAppController@index') }}" title="trở lại"><i class="fa fa-backward"></i></a>
      <ul class="nav navbar-right panel_toolbox">
        <li>
          <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
        </li>
      </ul>
      <div class="clearfix"></div>
    </div>
    <div class="x_content">
      <br>
      {{ Form::open(array('method'=>'POST', 'action' => array('ManagerAppController@store'),'class'=>'form-horizontal form-label-left')) }}

      <div class="form-group row">
        <div class="col-md-6 col-sm-6 col-lg-6">
          <label class="col-md-2 col-sm-2">Hệ điều hành</label>
          <div class="col-md-10 col-sm-10 ">
            {{ Form::select('os_id', getAppOs(), array('class' => 'form-control')) }}
          </div>
        </div>
      </div>

      <div class="form-group row">
        <div class="col-md-6 col-sm-6 col-lg-6">
          <label for="scorm_id" class="col-md-2 col-sm-2">Phiên bản ứng dụng</label>
          <div class="col-md-10 col-sm-10 ">
            <input type="text" name="app_version" id="app_version" class="form-control"required >
          </div>
        </div>
      </div>
      <div class="form-group row">
        <div class="col-md-6 col-sm-6 col-lg-6">
          <label for="scorm_id" class="col-md-6 col-sm-6 col-lg-6">Adjust_event</label>
          <div class="col-md-10 col-sm-10 ">
            <input type="text" name="adjust_event" id="adjust_event" class="form-control"required >
          </div>
        </div>
      </div>
      <div class="form-group row">
        <div class="form-group col-md-12">
          <label>Nội dung</label>
          <textarea name="desc" value="{{ old('desc') }}" require="true" class="form-control " id="editor1"></textarea>
        </div>
      </div>
      <div class="form-group row">
        <div class="col-md-6 col-sm-6 col-lg-6">
          <label class="col-md-2 col-sm-2">Trạng thái</label>
          <div class="col-md-10 col-sm-10 ">
            {{ Form::select('status', getStatusHeaderFooter(), array('class' => 'form-control')) }}
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