@extends('common.default')
@section('content')
<div class="col-md-12 col-sm-12  ">
  <div class="x_panel">
    <h2>Sửa người dùng {{ $user->username }}</h2>
    <div class="x_title">
      <a href="{{ action('UserController@index') }}" class="text-danger"><i class="fa fa-backward"></i></a></h2>
      <ul class="nav navbar-right panel_toolbox">
        <li>
          <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
        </li>
      </ul>
      <div class="clearfix"></div>
    </div>
    <div class="x_content">
      <br>
      {{ Form::open(array('action' => array('UserController@update', $user->id), 'method' => "PUT", 'files' => true,'id'=>'upload_form')) }}
      <div class="form-group row">
        <div class="col-md-6 col-sm-6 col-lg-6">
          <label for="name" class="col-md-3 col-lg-3"> Họ và tên</label>
          <div class="col-md-9 col-col-lg-9">
            <input type="text" class="form-control" required="true" name="name" id="name" value="{{$user->name}}">
          </div>
        </div>
        <div class="col-md-6 col-sm-6 col-lg-6">
          <label for="email"class="col-md-3 col-lg-3">Email Address</label>
          <div class="col-md-9 col-col-lg-9">
            <input type="email" class="form-control" required="true" name="email" id="email" value="{{$user->email}}">
          </div>
        </div>
      </div>
      <div class="form-group row">
        <div class="col-md-6 col-sm-6 col-lg-6">
          <label for="username" class="col-md-3 col-lg-3">Tên đăng nhập</label>
          <div class="col-md-9 col-col-lg-9">
            <input type="text" class="form-control" required="true" name="username" id="username" value="{{$user->username}}">
          </div>
        </div>
      </div>
      <div class="form-group row">
        <div class="col-lg-6 col-md-6">
          <label class="col-md-3 col-lg-3">Quyền</label>
          <div class="col-md-9 col-col-lg-9">
            {{ Form::select('role_id', getListRole(),$user->role_id, array('class' => 'form-control')) }}
          </div>
        </div>
        <div class="col-lg-6 col-md-6">
          <label class="col-md-3 col-lg-3">Ảnh đại diện</label>
          <div class="col-md-9 col-col-lg-9">
            <input type="file" name="avatar" id="avatar" class="form-control">
          </div>
          <div class="clearfix row">
            <br>
            <br>
            @if($user->avatar)
            <img src="{{$user->avatar }}" width="150px" height="auto" id="avatar1" style="margin: 10px 0" />
            @endif
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