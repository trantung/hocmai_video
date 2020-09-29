@extends('common.default')
@section('content')
<div class="col-md-12 col-sm-12  ">
  <div class="x_panel">
    <div class="x_title">
      <a href="{{ action('EventController@index') }}" class="text-danger" title="Trở lại"><i class="fa fa-backward"></i></a>
      <ul class="nav navbar-right panel_toolbox">
        <li>
          <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
        </li>
      </ul>
      <div class="clearfix"></div>
    </div>
    <div class="x_content">
      <br>
      {{ Form::open(array('action' => array('EventController@update', $event->id), 'method' => "PUT", 'files' => true)) }}
      <div class="form-group row">
        <div class="col-md-12 col-sm-12  ">
          <label class="text-label">Tiêu đề</label>
            {{ Form::text('name', $event->name, array('class' => 'form-control')) }}
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
            <label class=" text-label">Banner</label>
            <input type="file" name="banner" id="banner" class="form-control">
            @if($event->banner)
            <img src="{{$event->banner}}" alt="banner" width="100px" height="100px">
            @endif
        </div>
        <div class="col-md-12 col-sm-12">
            <lable class="text-label">Url webview</lable>
            <input type="text" value="{{$event->urlWebView}}" class="from-control">
        </div>
        <div class="col-md-12 col-sm-12">
            <lable class="text-label">Deep Link</lable>
            <input type="text" value="{{$event->deep_link}}" class="from-control">
        </div>
        <div class="col-md-12 col-sm-12">
            @if($event->fullScreen == 1)
                <input type="checkbox" name="fullScreen" style="margin-bottom: 6px;" checked="checked">
                <label>Hiển thị full màn hình</label><br/><br/>
            @else
                <input type="checkbox" name="fullScreen" style="margin-bottom: 6px;"  >
                <label>Hiển thị full màn hình</label><br/><br/>
            @endif
            @if($event->login_require == 1)
                <input type="checkbox" name="login_require" style="margin-bottom: 6px;" checked="checked">
                <label>Yêu cầu đăng nhập</label><br/><br/>
            @else
                <input type="checkbox" name="login_require" style="margin-bottom: 6px;">
                <label>Yêu cầu đăng nhập</label><br/><br/>
            @endif
        </div>
      </div>
      <h4>Thời gian hiển thị</h4>
      <div class="form-group row">
        <div class="col-lg-12 ">
          <div class="col-lg-6 col-md-6 col-sm-6">
                <label class="text-label">Từ giờ</label>
                <input type="text" class="form-control" data-inputmask="'mask': '99/99/9999 99:99'" id="dd" name="start_time" value="{{Carbon\Carbon::parse($event->start_time)->format('d/m/Y H:i')}}">
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6">
              <label class="text-label">Đến giờ</label>
              <input type="text" class="form-control" data-inputmask="'mask': '99/99/9999 99:99'" id="dd" name="end_time" value="{{Carbon\Carbon::parse($event->end_time)->format('d/m/Y H:i')}}">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
            <h4>Người tham gia</h4>
            <div class="radio_button" style="display:flex">
                <div class="text-left" style="margin-right: 25px;"> 
                    <input type="radio" id="male" name="is_public" value="1" style="margin-bottom: 6px;"{{$event->is_public == 1 ? "checked": ""}}>
                    <label for="male">Công khai</label><br>
                </div>
                <div class="text-righ">
                    <input type="radio" id="female" name="is_public" value="0" style="margin-bottom: 6px;"{{$event->is_public == 0 ? "checked": ""}}>
                    <label for="female">Tester</label><br>
                </div>
            </div>
        </div>
      </div>
      <div class="form-group row">
        {{ Form::submit('Submit', array('class' => 'btn btn-success')) }}
      </div>
      {{ Form::close() }}
    </div>
  </div>
</div>
</div>
@stop
