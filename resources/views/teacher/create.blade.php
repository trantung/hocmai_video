@extends('common.default')
@section('content')
<div class="col-md-12 col-sm-12  ">
  <div class="x_panel">
    <div class="x_title">
      <a href="{{ action('TeacherController@index') }}" class="text-danger" title="Trở lại"><i class="fa fa-backward"></i></a>
      <ul class="nav navbar-right panel_toolbox">
        <li>
          <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
        </li>
      </ul>
      <div class="clearfix"></div>
    </div>
    <div class="x_content">
      <br>
      {{ Form::open(array('method'=>'POST','files'=>true, 'action' => array('TeacherController@store'),'class'=>'form-horizontal form-label-left')) }}
      <div class="form-group row">
        <label class="col-lg-12">Tên giáo viên</label>
        <div class="col-md-6 col-sm-6">
          <input type="text" class="form-control" required data-errormessage-value-missing="Please input something" name="name" id="name">
        </div>
      </div>
      <div class="form-group row">
        <label class="col-md-2 col-sm-2 col-lg-4">Mô tả</label>
        <div class="col-md-10 col-sm-10 ">
          <textarea name="desc" id="editor1" required data-errormessage-value-missing="Please input something"></textarea>
        </div>
      </div>
      <div class="row form-group">

        <label class="col-lg-12">ảnh đại diện</label>
        <div class="multiselect_div">
          <input type="file" class="form-control" required data-errormessage-value-missing="Please input something" name="avatar" id="avatar">
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