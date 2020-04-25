@extends('common.default')
@section('content')
<div class="col-md-12 col-sm-12  ">
  <div class="x_panel">
    <h2>Thêm lớp học mới</h2>
    <div class="x_title">
      <a href="{{ action('ClassController@index') }}" class="btn btn-danger" title="trở lại">Trở lại</a>
      <ul class="nav navbar-right panel_toolbox">
        <li>
          <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
        </li>
      </ul>
      <div class="clearfix"></div>
    </div>
    <div class="x_content">
      <br>
      {{ Form::open(array('method'=>'POST', 'action' => array('ClassController@store'),'class'=>'form-horizontal form-label-left')) }}
      <div class="form-group row">
        <div class="col-md-6 col-sm-6">
          <label class="col-lg-3">Tên lớp học</label>
          <div class="col-lg-10">
            <input type="text" name="name" id="name" required data-errormessage-value-missing="Please input something" placeholder ="tên lớp">
          </div>
        </div>
        <div class="col-md-6 col-sm-6">
            <label class="col-lg-3">Khối</label>
            <div class="col-lg-10 ">
              {{ Form::select('schoolblock_id', getListKhoi(), array('class' => 'form-control')) }}
            </div>
        </div>
      </div>
      <div class="form-group row">
        <div class="col-md-12 col-sm-12 ">
          <label class="col-md-3 col-sm-3">Mô tả</label>
          <div class="col-md-11 col-sm-11">
            <textarea name="desc" id="editor1" class="form-control" required data-errormessage-value-missing="Please input something"></textarea>
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