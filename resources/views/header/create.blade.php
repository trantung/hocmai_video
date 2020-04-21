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
      {{ Form::open(array('method'=>'POST','files'=>true, 'action' => array('HeaderController@store'),'class'=>'form-horizontal form-label-left')) }}
      <div class="form-group row">
        <label>Câu chào buổi sáng</label>
        <div class="col-lg-12">
          {{ Form::textarea('desc', null, array('class' => 'form-control','id'=>'editor1')) }}
        </div>
      </div>
      <h2>Thời gian hiển thị trong ngày</h2>
      <div class="form-group row">
        <div class="col-lg-12 col-md-12">
          <div class="col-lg-3 col-md-3 col-sm-3">
            <div class="multiselect_div">
              <label>Từ giờ</label>
              <div class="datetimepicker3" class="input-append">
                <input data-format="hh:mm" type="text" name="start_time"></input>
                <span class="add-on">
                  <i data-time-icon="icon-time" data-date-icon="icon-calendar">
                  </i>
                </span>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-3">
            <div class="multiselect_div">
              <label>Đến giờ</label>
              <div class="datetimepicker4" class="input-append">
                <input data-format="hh:mm" type="text" name="end_time"></input>
                <span class="add-on">
                  <i data-time-icon="icon-time" data-date-icon="icon-calendar">
                  </i>
                </span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-6 ">
            <label class="control-label col-md-2 col-sm-2">Trạng thái</label>
            <div class="col-md-10 col-sm-10">
              <select class="form-control" name="status">
                <option value="0">deactivate</option>
                <option value="1">active</option>
              </select>
            </div>
          </div>
        </div>
        <div class="col-lg-12 col-md-12">
          <div class="col-lg-6">
            <label>ảnh đại diện</label>
            <div class="multiselect_div">
              <input type="file" name="image" id="image" class="form-control">
            </div>
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