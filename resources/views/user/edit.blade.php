@extends('common.default')
@section('content')
<div class="col-md-12 col-sm-12  ">
  <div class="x_panel">
    <h2>Sửa người dùng {{ $user->username }}</h2>
    <div class="x_title">
      <a href="{{ action('UserController@index') }}" class="btn btn-danger">Trở lại</a></h2>
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
        <div class="col-md-6 col-sm-6">
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fa fa-user">Họ và tên</i></span>
            </div>
            {{ Form::text('name', $user->name, array('class' => 'form-control has-feedback-left','placeholder'=>'họ & tên')) }}
          </div>
        </div>
        <div class="col-md-6 col-sm-6">
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fa fa-envelope-o">Email Address</i></span>
            </div>
            {{ Form::text('email', $user->email, array('class' => 'form-control has-feedback-left','placeholder'=>'email')) }}
          </div>
        </div>
      </div>
      <div class="form-group row">
        <div class="col-md-6 col-sm-6">
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fa fa-user">Tên đăng nhập</i></span>
            </div>
            {{ Form::text('username', $user->username, array('class' => 'form-control has-feedback-left','placeholder'=>'username')) }}
          </div>
        </div>
        <div class="col-md-6 col-sm-6">
          <label for="">Mật khẩu</label>
          <div class="input-group mb-3">
            {{ Form::password('password', null, array('class' => 'form-control','placeholder'=>'nhập mật khẩu')) }}
          </div>
        </div>
      </div>
      <div class="form-group row">
        <div class="col-lg-6 col-md-12">
          <label>Quyền</label>
          <div class="multiselect_div">
            {{ Form::select('role_id', getListRole(),$user->role_id, array('class' => 'form-control')) }}
          </div>
        </div>
        <div class="col-lg-6 col-md-12">
          <label>Ảnh đại diện</label>
          <div class="col-lg-12">
            <div class="multiselect_div">
              <input type="file" name="avatar" id="avatar" class="form-control">
            </div>
            <div class="clearfix row">
              @if($user->avatar)
              <img src="{{$user->avatar }}" width="150px" height="auto" />
              @endif
            </div>
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