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
          <label class="col-lg-2 col-md-2" for="username">Tên đăng nhập</label>
          <div class="col-md-10 col-lg-10">
            <input type="text" class="form-control" minlength="6" required data-errormessage-value-missing="Please input something" name="password" id="password">
          </div>
        </div>

        <div class="col-md-6 col-sm-6">
          <label class="col-lg-2 col-md-2" for="name">Họ & tên</label>
          <div class="col-md-10 col-lg-10">
            <input type="text" class="form-control" required data-errormessage-value-missing="Please input something" name="name" id="name">
          </div>
        </div>
      </div>
      <div class="form-group row">
        <div class="col-md-6 col-sm-6">
          <label class="col-lg-2 col-md-2" for="email">Email</label>
          <div class="col-md-10 col-lg-10">
            <input type="email" class="form-control" required data-errormessage-value-missing="Please input something" name="email" id="email">
          </div>
        </div>
        <div class="col-md-6 col-sm-6">
          <label class="col-lg-2 col-md-2" for="password">Mật khẩu</label>
          <div class="col-md-10 col-lg-10">
            <input type="password" class="form-control" required data-errormessage-value-missing="Please input something" name="password" id="password">
          </div>
        </div>
      </div>
      <div class="form-group row">
        <div class="col-lg-6 col-md-6">
          <label class="col-lg-2">Quyền</label>
          <div class="col-lg-10">
            {{ Form::select('role_id', getListRole(), array('class' => 'form-control')) }}
          </div>
        </div>
        <div class="col-lg-6 col-md-6">
          <label class="col-lg-2">ảnh đại diện</label>
          <div class="col-lg-10">
            <input type="file" name="avatar" id="avatar" class="form-control" required data-errormessage-value-missing="Please input something">
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