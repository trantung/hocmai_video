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
      {{ Form::open(array('method'=>'POST','files'=>true, 'action' => array('HeaderController@store'),'class'=>'form-horizontal form_time')) }}
      <div class="form-group row">
        <label style="margin: 0 10px;padding:10px 0">Mô tả</label>
        <div class="col-lg-12">
          {{ Form::textarea('desc', old('desc'), array('class' => 'form-control','id'=>'editor1')) }}
        </div>
      </div>
      <h4 style="margin: 5px 10px;padding:10px 0">Thời gian hiển thị</h4>
      <div class="form-group row">
        <div class="col-lg-12 ">
          <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="col-md-12">
              <label class="col-lg-2">Từ giờ</label>
              <div class="col-lg-8">
                <input type="time" name="start_time" value="{{old('start_time')}}" class="form-control" />
                @if (Session::has('message'))<span class="text-danger">{{ Session::get('message') }}</span>@endif
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="col-md-12">
              <label class="col-lg-2">Đến giờ</label>
              <div class="col-lg-8">
                <input type="time" name="end_time" value="{{old('end_time')}}" class="form-control"/>
                @if (Session::has('message'))<span class="text-danger">{{ Session::get('message') }}</span>@endif
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row form-group">
        <div class="col-lg-12">
         
          <div class="col-md-6">
            <label class="col-md-2 col-sm-2 col-lg-2">Trạng thái</label>
            <div class="col-md-8 col-sm-8 col-lg-8">
              {{ Form::select('status', getStatusHeaderFooter(), old('status'),array('class' => 'form-control')) }}
            </div>
          </div>
          <div class="col-md-6">
            <label class="col-lg-2">mã code</label>
            <div class="col-lg-8">                                   
                 <input id="color" type="text" value="rgb(255, 128, 0)" name="color" class="jscolor" />
            </div>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="col-lg-6">
            <label class="col-md-2 col-sm-2 col-lg-2">ảnh đại diện</label>
            <div class="col-md-8 col-sm-8 col-lg-8">
              <input type="file" name="image" id="image" class="form-control" required>
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
