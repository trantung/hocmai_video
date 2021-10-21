@extends('common.default')
@section('content')
<div class="col-md-12 col-sm-12  ">
  <div class="x_panel">
    <div class="x_title">
    <a href="{{ action('FooterController@index') }}" class="text-danger" title="Trở lại"><i class="fa fa-backward"></i></a>
      <ul class="nav navbar-right panel_toolbox">
        <li>
          <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
        </li>
      </ul>
      <div class="clearfix"></div>
    </div>
    <div class="x_content">
      <br>
      {{ Form::open(array('action' => array('FooterController@update', $footer->id), 'method' => "PUT", 'files' => true)) }}
      <h2>Thời gian hiển thị</h2>
      <div class="form-group row">
        <div class="col-lg-12 ">
          <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="col-md-12">
              <label class="col-lg-2">Từ giờ</label>
              <div class="col-lg-8">
                <!-- <input type="time" name="start_time" value="{{$footer->start_time}}" class="form-control" /> -->
                <input type="text" name="start_time" pattern="([01]?[0-9]|2[0-3]):[0-5][0-9]" class="masked form-control" placeholder="hh:mm"  data-inputmask="'mask': '99:99'"  id="nortlmask" value="{{$footer->start_time}}" />
                @if (Session::has('message'))<span class="text-danger">{{ Session::get('message') }}</span>@endif
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="col-md-12">
              <label class="col-lg-2">Từ giờ</label>
              <div class="col-lg-8">
              <input type="text" name="end_time" pattern="([01]?[0-9]|2[0-3]):[0-5][0-9]" class="masked form-control" placeholder="hh:mm"  data-inputmask="'mask': '99:99'"  id="nortlmask" value="{{$footer->end_time}}"    />
                @if (Session::has('message'))<span class="text-danger">{{ Session::get('message') }}</span>@endif
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row form-group">
        <div class="col-lg-12">
          <div class="col-lg-6">
            <label class="col-md-2 col-sm-2 col-lg-2">ảnh đại diện</label>
            <div class="col-md-8 col-sm-8 col-lg-8">
              <input type="file" name="image" id="image" class="form-control">
              @if($footer->image)
                <img src="{{$footer->image}}" alt="" width="100px" height="100px">
              @endif
            </div>
          </div>
          <div class="col-md-6 col-lg-6 ">
            <label class="col-md-2 col-sm-2 col-lg-2">Trạng thái</label>
            <div class="col-md-8 col-sm-8 col-lg-8">
              {{ Form::select('status', getStatusHeaderFooter(), $footer->status, array('class' => 'form-control')) }}
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
@stop