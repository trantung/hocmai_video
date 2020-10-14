@extends('common.default')
@section('content')

<div class="col-md-12 col-sm-12  ">
  <div class="x_panel">
    <div class="x_title">
      <a class="btn btn-danger" href="{{ action('ManagerAppController@index') }}"><i class="fa fa-backward"></i></a>
      <strong><a href="{{ action('ManagerAppController@edit', $appVersion->id) }}" title="Sửa" class="btn btn-info"><i class="fa fa-edit" style="color:blue"></i> Sửa</a></strong>
      <ul class="nav navbar-right panel_toolbox">
        <li>
          <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
        </li>
      </ul>
      <div class="clearfix"></div>
    </div>
    <div class="x_content">
      <br>
      <div class="form-group row">
        <div class="col-md-9 col-sm-9 col-lg-9">
          <label class="text-label">Phiên bản ứng dụng</label>
          <input type="text" name="app_version" id="app_version" class="form-control" value="{{$appVersion->app_version}}" disabled>
        </div>
        <div class="col-md-3 col-sm-3 col-lg-3">
          <label class="text-label">Hệ điều hành</label>
          {{ Form::select('os_id', getAppOs(),$appVersion->os_id, array('class' => 'form-control select_app' ,'disabled'=>'disabled')) }}
        </div>
      </div>
      <div class="form-group row">
        <div class="col-md-9 col-sm-9 col-lg-9">
          <label class="text-label">Adjust_event</label>
          <input type="text" name="adjust_event" id="adjust_event" class="form-control" value="{{$appVersion->adjust_event}}" disabled>
        </div>
        <div class="col-md-3 col-sm-3 col-lg-3">
          <label class="text-label">Trạng thái</label>
          {{ Form::select('status', getStatusHeaderFooter(), $appVersion->status, array('class' => 'form-control select_app','disabled'=>'disabled')) }}
        </div>
      </div>
      <div class="form-group row">
        <div class="form-group col-md-12">
          <label>Nội dung</label>
          {{ Form::textarea('desc', $appVersion->desc, array('class' => 'form-control','id'=>'editor1','disabled'=>'disabled')) }}
        </div>
      </div>
      <div class="form-group row">
        <div class="col-md-4">
          <label class="text-label">Trạng thái</label>
          {{ Form::select('status', getStatusHeaderFooter(), $appVersion->status, array('class' => 'form-control','disabled'=>'disabled')) }}
        </div>
      </div>
    </div>
  </div>
</div>
</div>
@stop