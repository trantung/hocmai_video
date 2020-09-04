@extends('common.default')
@section('content')
<div class="col-md-12 col-sm-12  ">
  <div class="x_panel">
    <div class="x_title">
      <h2 class="navbar-left"><a class="text-danger" href="{{ action('AnotherVideoController@index') }}" title="trở lại"><i class="fa fa-backward"></i></a></h2>
      <ul class="nav navbar-right panel_toolbox">
        <li>
          <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
        </li>
      </ul>
      <div class="clearfix"></div>
    </div>
    <div class="x_content">
      <br>
      {{ Form::open(array('method'=>'POST', 'action' => array('AnotherVideoController@store'),'class'=>'form-horizontal form-label-left')) }}
      <div class="form-group row">
        <div class="col-md-6 col-sm-6 col-lg-6">
          <label class="col-md-5 col-sm-5 col-lg-5">Tiêu đề</label>
          <div class="col-lg-9">
            <input type="text" name="title" id="title" class="form-control" required>
          </div>
        </div>
        <div class="col-md-6 col-sm-6 col-lg-6">
          <label class="col-md-5 col-sm-5 col-lg-5">url</label>
          <div class="col-md-8 col-sm-8 col-lg-8">
            <input type="text" name="url" id="url" class="form-control" required>
          </div>
        </div>

      </div>
      <div class="form-group row">
        <div class="col-lg-6">
          <label class="col-md-5 col-sm-5 col-lg-5">Kênh</label>
          <div class="col-md-9 col-sm-9 ">
            @if(checkUserRole() == ADMIN)
            {{ Form::select('schoolblock_id', getListKhoi(), null, array('class' => 'form-control','id'=>'schoolblock_id')) }}
            @else
            {{ Form::select('schoolblock_id', getListKhoi(), getSchoolblockByUser(), array('class' => 'form-control', 'disabled' => true)) }}
            @endif
          </div>
        </div>
        <div class="col-lg-6" id="class_id">
          <label id="label_class1" class="col-md-5 col-sm-5 col-lg-5">Lớp</label>
          <div id="class1" class="col-md-8 col-sm-8 col-lg-8">
            <select class="form-control" name="class_id">
              <option value="1">Lớp 12</option>
              <option value="2">Lớp 10</option>
              <option value="3">Lớp 11</option>
            </select>
          </div>
        </div>
      </div>
      <div class="row form-group">
        <div class="col-lg-6">
          <label class="col-md-3 col-sm-3 col-lg-4">Môn</label>
          <div class="col-md-9 col-sm-9 ">
            {{ Form::select('subject_id', getListMon(), array('class' => 'form-control')) }}
          </div>
        </div>
        <div class="col-lg-6">
          <label class="col-md-5 col-sm-5 col-lg-5">Độ dài video</label>
          <div class="col-md-8 col-sm-8 col-lg-8">
            <input type="text" name="duration" class="masked" placeholder="hh:mm:ss"  data-inputmask="'mask': '99:99:99'"  id="nortlmask"  required value="{{old('duration')}}"/>
            <!-- <input type="text" name="duration" class="masked" placeholder="hh:mm"  id="nortlmask" pattern="([01]?[0-9]|2[0-3]):[0-5][0-9]" required /> -->
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

