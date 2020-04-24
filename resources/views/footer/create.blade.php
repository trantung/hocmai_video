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
      {{ Form::open(array('method'=>'POST','files'=>true, 'action' => array('FooterController@store'),'class'=>'form-horizontal form-label-left')) }}
      <h2>Thời gian hiển thị trong ngày</h2>
      @if (Session::has('message'))
        <div class="alert alert-danger">
            <ul>
                <li>{{ Session::get('message') }}</li>
            </ul>
        </div>
        @endif
      <div class="form-group row">
        <div class="col-lg-6 col-md-12">
          <div class="col-lg-6">
            <div class="multiselect_div">
              <label class="col-lg-6 col-md-6">Từ giờ</label>
                <input type="time" name="start_time" value="{{old('start_time')}}"/>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="multiselect_div">
              <label class="col-lg-6 col-md-6">Đến giờ</label>
                <input type="time" name="end_time" value="{{old('end_time')}}" />
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-12">
            <label class="col-lg-2 col-md-2">Trạng thái</label>
            <div class="col-md-10 col-lg-10">
              <div class="multiselect_div">
                {{ Form::select('status', getStatusHeaderFooter(), old('status'),array('class' => 'form-control')) }}
              </div>
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