@extends('common.default')
@section('content')
<div class="col-md-12 col-sm-12  ">
  <div class="x_panel">
    <div class="x_title">
      <a href="{{ action('HeaderController@index') }}" class="text-danger" title="Trở lại"><i class="fa fa-backward"></i></a>
      <ul class="nav navbar-right panel_toolbox">
        <li>
          <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
        </li>
      </ul>
      <div class="clearfix"></div>
    </div>
    <div class="x_content">
      <br>
      {{ Form::open(array('method'=>'POST','files'=>true, 'action' => array('EventController@store'),'class'=>'form-horizontal form_time')) }}
      <div class="row">
        <div class="col-lg-12">
            <label class="text-lable">Tiêu đề</label>
            {{ Form::text('name', old('name'), array('class' => 'form-control','required'=>'required')) }}
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
            <label class="text-lable">Banner</label>
            <input type="file" name="banner" id="banner" class="form-control" required>
        </div>
        <div class="col-md-12">
            <label class="text-label"> Url webview </label>
            <input type="text" name="urlWebView" id="urlWebView" class="form-control" required>
        </div>
        <div class="col-md-12">
            <label class="text-label"> Deep Link</label>
            <input type="text" name="deep_link" id="deep_link" class="form-control" >
        </div>
        <div class="col-md-12">
            <label class="text-label"> Event Adjust</label>
            {{ Form::text('event_adjust', old('event_adjust'), array('class' => 'form-control')) }}
        </div>
        <div class="col-md-12">
            <input type="checkbox" name="fullScreen" style="margin-bottom: 6px;" value="0">
            <label>Hiển thị full màn hình</label><br/><br/>
            <input type="checkbox" name="login_require" style="margin-bottom: 6px;" value="1">
            <label>Yêu cầu đăng nhập</label><br/><br/>
        </div>
      </div>
      <h4 style="margin: 5px 10px;padding:10px 0">Thời gian hiển thị</h4>
      <div class="form-group row">
        <div class="col-lg-12 ">
          <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="col-md-12">
              <label class="col-lg-2">Từ giờ</label>
              <div class="col-lg-8">
                    <input type="text" class="form-control" data-inputmask="'mask': '99/99/9999 99:99'"  name="start_time"  placeholder="Ex:dd/mm/yyyy hh:mm" value="{{old('start_time')}}">
                    <span class='text-danger' id="error_cc"  style="display:none"> Vui lòng điền đúng định dạng ngày tháng năm giờ(24h) phút!!</span>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="col-md-12">
              <label class="col-lg-2">Đến giờ</label>
              <div class="col-lg-8">
              <input type="text" class="form-control" data-inputmask="'mask': '99/99/9999 99:99'"  name="end_time"  placeholder="Ex:dd/mm/yyyy hh:mm" value="{{old('end_time')}}">
                    <span class='text-danger' id="error_cc"  style="display:none"> Vui lòng điền đúng định dạng ngày tháng năm giờ(24h) phút!!</span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
            <h4>Người tham gia</h4>
            <div class="radio_button" style="display:flex">
                <div class="text-left" style="margin-right: 25px;"> 
                    <input type="radio" id="male" name="is_public" value="1" style="margin-bottom: 6px;">
                    <label for="male">Công khai</label><br>
                </div>
                <div class="text-righ">
                    <input type="radio" id="female" name="is_public" value="0" style="margin-bottom: 6px;">
                    <label for="female">Tester</label><br>
                </div>
            </div>
        </div>
      </div><div class="row">
        <div class="col-md-6 col-lg-6">
            <label class="col-lg-2">Màn hình dọc, ngang</label>
            <div class="col-md-8 col-sm-8 col-lg-8">
                {{ Form::select('is_screen', getIsScreen(), old('is_screen'),array('class' => 'form-control')) }}
            </div>
        </div>
      </div>
      </div><div class="row">
        <div class="col-md-6 col-lg-6">
            <label class="col-lg-2">Yêu cầu active</label>
            <div class="col-md-8 col-sm-8 col-lg-8">
                {{ Form::select('is_active', getIsActive(), old('is_active'),array('class' => 'form-control')) }}
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
