@extends('common.default')
@section('content')
<div class="col-md-12 col-sm-12  ">
  <div class="x_panel">
    <h2>Thêm mới Footer</h2>
    <div class="x_title">
      <a href="{{ action('FooterController@index') }}" class="btn btn-danger" title="Trở lại">Trở lại</a>
      <ul class="nav navbar-right panel_toolbox">
        <li>
          <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
        </li>
      </ul>
      <div class="clearfix"></div>
    </div>
    <div class="x_content">
      <br>
      {{ Form::open(array('method'=>'POST','files'=>true, 'action' => array('FooterController@store'),'class'=>'form-horizontal form_footer')) }}
      <h2>Thời gian hiển thị trong ngày</h2>
      <div class="form-group row">
        <div class="col-lg-6 col-md-12">
          <div class="col-lg-6">
            <label>Từ giờ</label>
            <div class="datetimepicker3">
            <span class="add-on" id="icon_start_footer">
                <i data-time-icon="icon-time" data-date-icon="icon-calendar">
                </i>
              </span>
              <input data-format="hh:mm" type="text" name="start_time" id="start_time" class="start_time_footer"></input>
            </div>
          </div>
          <div class="col-lg-6">
            <label class="col-lg-2">Đến giờ</label>
            <div class="datetimepicker4 col-lg-10" id="input-append">
              <span class="add-on" id="icon_end_footer">
                <i data-time-icon="icon-time" data-date-icon="icon-calendar">
                </i>
              </span>
              <input data-format="hh:mm" type="text" name="end_time" id="end_time"></input>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-12">
            <label class="col-lg-2 col-md-2">trạng thái</label>
            <div class="col-md-10 col-lg-10">
                <select class="form-control" name="status">
                  <option value="0">deactivate</option>
                  <option value="1">active</option>
                </select>
            </div>
        </div>
      </div>
      <div class="form-group row">
        <div class="col-lg-6 col-md-12">
            <label>ảnh đại diện</label>
            <div class="multiselect_div">
              <input type="file" name="image" id="image" class="form-control">
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