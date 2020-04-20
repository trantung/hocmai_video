@extends('common.default')
@section('content')
<div class="col-md-12 col-sm-12  ">
  <div class="x_panel">
    <h2>Thêm mới người dùng</h2>
    <div class="x_title">
      <a href="{{ action('UserController@index') }}" class="btn btn-danger" title="Trở lại">Trở lại</a>
      <ul class="nav navbar-right panel_toolbox">
        <li>
          <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
        </li>
      </ul>
      <div class="clearfix"></div>
    </div>
    <div class="x_content">
      <br>
      {{ Form::open(array('method'=>'POST','files'=>true, 'action' => array('UserController@store'),'class'=>'form-horizontal form-label-left')) }}
      <div class="form-group row">
        <div class="col-md-6 col-sm-6">
          <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-user">Họ và tên</i></span>
            </div>
            {{ Form::text('name', null, array('class' => 'form-control name','placeholder'=>'họ & tên')) }}
          </div>
        </div>
        <div class="col-md-6 col-sm-6">
          <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-envelope-o">Email Address</i></span>
            </div>
            {{ Form::text('email', null, array('class' => 'form-control email','placeholder'=>'Ex: example@example.com')) }}
          </div>
        </div>
      </div>
      <div class="form-group row">
        <div class="col-md-6 col-sm-6">
          <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-user">Tên đăng nhập</i></span>
            </div>
            {{ Form::text('username', null, array('class' => 'form-control username','placeholder'=>'username')) }}
          </div>
        </div>
        <div class="col-md-6 col-sm-6">
          <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text">Mật khẩu</span>
            </div>
            {{ Form::password('password', null, array('class' => 'form-control password_get_info','placeholder'=>'nhập mật khẩu')) }}
          </div>
        </div>
      </div>
      <div class="form-group row">
        <div class="col-lg-6 col-md-12">
            <label>Quyền</label>
            <div class="multiselect_div">
              {{ Form::select('role_id', getListRole(), array('class' => 'form-control')) }}
            </div>
        </div>
        <div class="col-lg-6 col-md-12">
            <label>ảnh đại diện</label>
            <div class="multiselect_div">
              <input type="file" name="avatar" id="avatar" class="form-control">
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