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
          <label class="control-label col-md-2 col-sm-2">Kênh</label>
          <div class="col-md-10 col-sm-10 ">
            {{ Form::select('schoolblock_id', getListKhoi(), array('class' => 'form-control')) }}
          </div>
        </div>
        <div class="col-md-4 col-sm-4 col-lg-4">
          <label class="control-label col-md-2 col-sm-2">Lớp</label>
          <div class="col-md-10 col-sm-10 ">
            {{ Form::select('class_id', getListClass(), array('class' => 'form-control')) }}
          </div>
        </div>
        <div class="col-md-4 col-sm-4 col-lg-4">
          <label class="control-label col-md-2 col-sm-2">Môn</label>
          <div class="col-md-10 col-sm-10 ">
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