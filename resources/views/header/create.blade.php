@extends('common.default')
@section('content')
<div class="col-md-12 col-sm-12  ">
  <div class="x_panel">
    <h2>Thêm mới người dùng</h2>
    <div class="x_title">
      <a href="{{ action('HeaderController@index') }}" class="btn btn-danger" title="Trở lại">Trở lại</a>
      <ul class="nav navbar-right panel_toolbox">
        <li>
          <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
        </li>
      </ul>
      <div class="clearfix"></div>
    </div>
    <div class="x_content">
      <br>
      {{ Form::open(array('method'=>'POST','files'=>true, 'action' => array('HeaderController@store'),'class'=>'form-horizontal form_time')) }}
      <div class="form-group row">
        <label style="margin: 0 10px;padding:10px 0">Mô tả</label>
        <div class="col-lg-12">
          <textarea name="desc" value="{{ old('desc') }}" require="true" class="form-control " id="editor1"></textarea>
        </div>
      </div>
      <h4 style="margin: 5px 10px;padding:10px 0">Thời gian hiển thị</h4>
      <div class="form-group row">
        <div class="col-lg-12 col-md-12">
          <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="col-md-12">
              <label class="col-lg-6 col-md-6">Từ giờ</label>
              <div class="datetimepicker4 col-md-8 col-lg-8 input-append">
                <span class="add-on" id="icon_time_start">
                  <i data-time-icon="icon-time" data-date-icon="icon-calendar">
                  </i>
                </span>
                <input data-format="hh:mm" type="text" name="start_time" id="start_time"></input>
              </div>
            </div>
            <div class="col-md-12">
              <p id="error_time" class="text-danger"></p>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6">
            <label class="col-lg-6 col-md-6"> Đến giờ</label>
            <div class="datetimepicker4 input-append col-md-8 col-lg-8" >
              <span class="add-on" id="icon_time_end">
                <i data-time-icon="icon-time" data-date-icon="icon-calendar">
                </i>
              </span>
              <input data-format="hh:mm" type="text" name="end_time" id="end_time"></input>
            </div>
          </div>
        </div>
        <div class="row clearfix"></div>
        <div class="col-lg-12 col-md-12">
          <div class="col-lg-6">
            <label class="col-md-6 col-sm-6 col-lg-6">ảnh đại diện</label>
            <div class="col-md-8 col-sm-8 col-lg-8">
              <input type="file" name="image" id="image" class="form-control">
            </div>
          </div>
          <div class="col-md-6 col-lg-6 ">
            <label class="col-md-6 col-sm-6 col-lg-6">Trạng thái</label>
            <div class="col-md-8 col-sm-8 col-lg-8">
              <select class="form-control" name="status">
                <option value="0">deactivate</option>
                <option value="1">active</option>
              </select>
            </div>
          </div>
        </div>
      </div>
      <div class="form-group row">
          {{ Form::submit('Submit', array('class' => 'btn btn-success submit_time')) }}
          {{ Form::reset('Reset', array('class' => 'btn btn-info')) }}
      </div>
      {{ Form::close() }}
    </div>
  </div>
</div>
@stop