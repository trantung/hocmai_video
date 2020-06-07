@extends('common.default')
@section('content')
<div class="col-md-12 col-sm-12  ">
  <div class="x_panel">
    <div class="x_title">
      <a href="{{ action('CommentFakeController@index') }}" class="text-danger" title="Trở lại"> <i class="fa fa-backward"></i></a>
      <ul class="nav navbar-right panel_toolbox">
        <li>
          <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
        </li>
      </ul>
      <div class="clearfix"></div>
    </div>
    <div class="x_content">
      <br>
      {{ Form::open(array('method'=>'POST', 'action' => array('CommentFakeController@store'),'class'=>'form-horizontal form-label-left')) }}
      <div class="form-group row">
        <div class="col-md-12 col-sm-12">
          <label class="col-md-2">Nội dung comment</label>
          <div class="col-md-10">
            <textarea type="text" name="name" id="name" cols="30" rows="5" style="width:100%" required></textarea>
          </div>
        </div>
      </div>
      <div class="form-group row">
        <div class="col-md-12 col-sm-12 ">
          <label class="col-md-2">Mô tả comment</label>
          <div class="col-md-10 col-lg-10">
            <textarea type="text" name="desc" id="editor1" required></textarea>
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