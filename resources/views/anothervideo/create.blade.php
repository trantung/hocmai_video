@extends('common.default')
@section('content')
<div class="col-md-12 col-sm-12  ">
  <div class="x_panel">
    <div class="x_title">
      <h2 class="navbar-left"><a class="btn btn-danger" href="{{ action('AnotherVideoController@index') }}">Trở lại</a></h2>
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
        <div class="col-md-4 col-sm-4">
          <label class="control-label col-md-3 col-sm-3" for="title"> Tiêu đề</label>
          <div class="col-md-9">
            {{ Form::text('title', null, array('class' => 'form-control has-feedback-left','id'=>'title')) }}
          </div>
        </div>
        <div class="col-md-4 col-sm-4">
          <label class="control-label col-md-3 col-sm-3" for="url"> url</label>
          <div class="col-md-9">
            {{ Form::text('url', null, array('class' => 'form-control has-feedback-left','id'=>'url')) }}
          </div>
        </div>
        <div class="col-md-4 col-sm-4">
          <label class="control-label col-md-3 col-sm-3" for="url">Độ dài video</label>
          <div class="col-md-9">
            <div id="datetimepicker3" class="input-append">
              <input data-format="hh:mm:ss" type="text" name="duration"></input>
              <span class="add-on">
                <i data-time-icon="icon-time" data-date-icon="icon-calendar">
                </i>
              </span>
            </div>
          </div>
        </div>
      </div>
      <div class="form-group row">
        <div class="col-md-4 col-sm-4 col-lg-4">
          <label class=" col-md-3 col-sm-3 col-lg-3">Kênh</label>
          <div class="col-md-9 col-sm-9 ">
            @if(checkUserRole() == ADMIN)
            {{ Form::select('schoolblock_id', getListKhoi(),null, array('class' => 'form-control','id'=>'schoolblock_id')) }}
            @else
            {{ Form::select('schoolblock_id', getListKhoi(), getSchoolblockByUser(),array('class' => 'form-control', 'disabled' => true)) }}
            @endif
          </div>
        </div>
        <div class="col-md-4 col-sm-4 col-lg-4" id="class_id">
          <label id="label_class1" class="col-lg-3 col-md-3 col-sm-3">Lớp</label>
          <div id="class1" class="col-md-9 col-sm-9 col-lg-9">
            <select class="form-control" name="class_id">
              <option value="1">Lớp 12</option>
              <option value="2">Lớp 10</option>
              <option value="3">Lớp 11</option>
            </select>
          </div>
        </div>
        <div class="col-md-4 col-sm-4 col-lg-4">
          <label class="col-md-3 col-sm-3 col-lg-3">Môn</label>
          <div class="col-md-9 col-sm-9 ">
            {{ Form::select('subject_id', getListMon(), array('class' => 'form-control')) }}
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