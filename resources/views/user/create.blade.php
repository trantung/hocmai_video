@extends('common.default')
@section('content')
<div class="col-md-12 col-sm-12  ">
  <div class="x_panel">
    <div class="x_title">
      <a href="{{ action('UserController@index') }}" class="text-danger" title="Trở lại"><i class="fa fa-backward"></i></a>
      <ul class="nav navbar-right panel_toolbox">
        <li>
          <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
        </li>
      </ul>
      <div class="clearfix"></div>
    </div>
    <div class="x_content">
      {{ Form::open(array('method'=>'POST','files'=>true, 'action' => array('UserController@store'),'class'=>'form-horizontal form-label-left')) }}
      <div class="form-group row">
        <div class="col-md-6 col-sm-6">
          <label class="col-lg-2 col-md-2" for="username">Tên đăng nhập <span class="text-error text-danger">*</span></label>
          <div class="col-md-10 col-lg-10">
            <input type="text" class="form-control" minlength="4" required ='true' name="username" id="username" value="{{old('username')}}" >
            @if (Session::has('message'))<span class="text-danger">{{ Session::get('message') }}</span>@endif
          </div>
        </div>

        <div class="col-md-6 col-sm-6">
          <label class="col-lg-2 col-md-2" for="name">Họ & tên <span class="text-error text-danger">*</span></label>
          <div class="col-md-10 col-lg-10">
            <input type="text" class="form-control" required ="true" name="name" id="name" value="{{old('name')}}">
          </div>
        </div>
      </div>
      <div class="form-group row">
        <div class="col-md-6 col-sm-6">
          <label class="col-lg-2 col-md-2" for="email">Email <span class="text-error text-danger">*</span></label>
          <div class="col-md-10 col-lg-10">
            <input type="email" class="form-control" required ="true" name="email" id="email"  value="{{old('email')}}">
          </div>
        </div>
        <div class="col-md-6 col-sm-6">
          <label class="col-lg-2 col-md-2" for="password">Mật khẩu <span class="text-error text-danger">*</span></label>
          <div class="col-md-10 col-lg-10">
            <input type="password" class="form-control" required ="true" name="password" id="password" minlength="6" value="{{old('password')}}">
          </div>
        </div>
      </div>
      <div class="form-group row">
        <div class="col-lg-6 col-md-6">
          <label class="col-lg-2">Quyền <span class="text-error text-danger">*</span></label>
          <div class="col-lg-10">
            {{ Form::select('role_id', getListRole(),'', array('class' => 'form-control','id'=>'list_role')) }}
          </div>
        </div>
        <div class="col-lg-6 col-md-6">
          <label class="col-lg-2">ảnh đại diện <span class="text-error text-danger">*</span></label>
          <div class="col-lg-10">
            <input type="file" name="avatar" id="avatar" class="form-control" required ="true" value="{{old('avatar')}}">
          </div>
        </div>
      </div>
      <div class="form-group row">
        {{ Form::submit('Lưu', array('class' => 'btn btn-success')) }}
        {{ Form::reset('Reset', array('class' => 'btn btn-info')) }}
      </div>
      {{ Form::close() }}
    </div>
  </div>
</div>
@stop