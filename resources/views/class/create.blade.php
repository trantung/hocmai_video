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
          <label>Tên lớp học</label>
          {{ Form::text('name', null, array('class' => 'form-control ','placeholder'=>'tên lớp')) }}
        </div>
        <div class="col-md-6 col-sm-6">
            <label class="control-label col-md-2 col-sm-2">Khối</label>
            <div class="col-md-11 col-sm-11 ">
              {{ Form::select('schoolblock_id', getListKhoi(), array('class' => 'form-control')) }}
            </div>
          
        </div>
      </div>
      <div class="form-group row">
        <div class="col-md-12 col-sm-12">
          <label>Mô tả</label>
          {{ Form::textarea('desc', null, array('class' => 'form-control ','id'=>'editor1')) }}
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