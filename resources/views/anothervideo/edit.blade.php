@extends('common.default')
@section('content')
<div class="col-md-12 col-sm-12  ">
  <div class="x_panel">
    <h2>Sửa {{ $anothervideo->title }}</h2>
    <div class="x_title">
      <a href="{{ action('AnotherVideoController@index') }}" class="text-danger" title="trở lại"><i class="fa fa-backward"></i></a>
      <ul class="nav navbar-right panel_toolbox">
        <li>
          <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
        </li>
      </ul>
      <div class="clearfix"></div>
    </div>
    <div class="x_content">
      <br>
      {{ Form::open(array('method'=>'PUT', 'action' => array('AnotherVideoController@update', $anothervideo->id))) }}
      <div class="form-group row">
        <div class="col-md-6 col-sm-6 col-lg-6">
          <label class="col-md-2 col-sm-3 col-lg-3">Tiêu đề</label>
          <div class="col-md-9 col-sm-9">
            <input type="text" name="title" id="title" class="form-control" required value="{{$anothervideo->title}}">
          </div>
        </div>
        <div class="col-md-6 col-sm-6 col-lg-6">
          <label class="col-md-2 col-sm-3 col-lg-3">url</label>
          <div class="col-md-9 col-sm-9">
            <input type="text" name="url" id="url" class="form-control" required value="{{$anothervideo->url}}">
          </div>
        </div>

      </div>
      <div class="form-group row">
        <div class="col-md-6 col-sm-6 col-lg-6 ">
          <label class="col-lg-3">Kênh</label>
          <div class="col-md-9 col-sm-9 ">
            @if(checkUserRole() == ADMIN)
            {{ Form::select('schoolblock_id', getListKhoi(), $anothervideo->schoolblock_id, array('class' => 'form-control','id'=>'schoolblock_id')) }}
            @else
            {{ Form::select('schoolblock_id', getListKhoi(), getSchoolblockByUser(), array('class' => 'form-control', 'disabled' => true)) }}
            @endif
          </div>
        </div>
        <div class="col-md-6 col-sm-6 col-lg-6" id="class_id">
          <label id="label_class1" class="col-lg-3">Lớp</label>
          <div id="class1" class="col-md-9 col-sm-9 col-lg-9">
            <select class="form-control" name="class_id">
              <option value="1">Lớp 12</option>
              <option value="2">Lớp 10</option>
              <option value="3">Lớp 11</option>
            </select>
          </div>
        </div>
      </div>
      <div class="form-group row">
        <div class="col-md-6 col-sm-6 col-lg-6">
          <label class="col-lg-3">Môn</label>
          <div class="col-md-9 col-sm-9 ">
            {{ Form::select('subject_id', getListMon(),$anothervideo->subject_id, array('class' => 'form-control')) }}
          </div>
        </div>
        <div class="col-md-6 col-sm-6 col-lg-6">
          <label class="col-lg-3">Độ dài video</label>
          <div class="col-md-9 col-sm-9">
          <input type="text" name="duration" class="masked" placeholder="hh:mm:ss" value="{{gmdate('H:i:s', $anothervideo->duration)}}" data-inputmask="'mask': '99:99:99'"  id="nortlmask"  required />
            <!-- <input type="time" name="duration" value="{{gmdate('H:i:s', $anothervideo->duration)}}" step="1" required /> -->
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