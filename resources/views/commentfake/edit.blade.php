@extends('common.default')
@section('content')
<div class="col-md-12 col-sm-12  ">
  <div class="x_panel">
    <h2>Sửa môn {{ $data->name }}</h2>
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
      {{ Form::open(array('method'=>'PUT', 'action' => array('CommentFakeController@update', $data->id))) }}
      <div class="form-group row">
        <div class="col-md-12 col-sm-12">
          <label class="control-label col-md-2 col-sm-2">Người comment</label>
          <div class="col-md-10 col-sm-10">
            {{ Form::select('userFake_id', getListUserFake(), array('class' => 'form-control')) }}
          </div>
        </div>
        <div class="col-md-12 col-sm-12">
          <label class="control-label col-md-2 col-sm-2">Nội dung coment</label>
          <div class="col-md-10 col-sm-10">
            {{ Form::textarea('desc', $data->desc, array('class' => 'form-control')) }}
            
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