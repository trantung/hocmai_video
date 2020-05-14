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
      {{ Form::open(array('method'=>'POST','files'=>true, 'action' => array('FooterController@store'),'class'=>'form-horizontal form_footer')) }}
      <h2>Thời gian hiển thị trong ngày</h2>
      <div class="form-group row">
        <div class="col-lg-12 ">
          <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="col-md-12">
              <label class="col-lg-2">Từ giờ</label>
              <div class="col-lg-8">
                <input type="text" name="start_time" pattern="([01]?[0-9]|2[0-3]):[0-5][0-9]" class="masked form-control" placeholder="hh:mm"  data-inputmask="'mask': '99:99'"  id="nortlmask" value="{{old('start_time')}}"  required="true"  />
                @if (Session::has('message'))<span class="text-danger">{{ Session::get('message') }}</span>@endif
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="col-md-12">
              <label class="col-lg-2">Đến giờ giờ</label>
              <div class="col-lg-8">
                <!-- <input type="time" name="end_time" value="{{old('end_time')}}" class="form-control" /> -->
                <input type="text" name="end_time" pattern="([01]?[0-9]|2[0-3]):[0-5][0-9]" class="masked form-control" placeholder="hh:mm"  data-inputmask="'mask': '99:99'"  id="nortlmask" value="{{old('end_time')}}"  required="true"  />
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
              <input type="file" name="image" id="image" class="form-control" value="{{old('image')}}" required>
            </div>
          </div>
          <div class="col-md-6 col-lg-6 ">
            <label class="col-md-2 col-sm-2 col-lg-2">Trạng thái</label>
            <div class="col-md-8 col-sm-8 col-lg-8">
              {{ Form::select('status', getStatusHeaderFooter(), old('status'),array('class' => 'form-control')) }}
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