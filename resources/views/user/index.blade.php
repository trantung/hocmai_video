@extends('common.default')
@section('content')
<div class="row">
  <div class="col-md-12 col-sm-12 ">
    <div class="x_panel">
      <h2>Quản lý người dùng</h2>
      <div class="x_title">
        <a href="{{ action('UserController@create') }}"><i class="fa fa-plus-circle"></i> Thêm mới</a>
        <ul class="nav navbar-right panel_toolbox">
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
          </li>
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        <div class="row">
          <div class="col-sm-12">
            <div class="card-box table-responsive">
              <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                <thead>
                  <tr>
                    <th>Id</th>
                    <th>Username</th>
                    <th>tên người dùng</th>
                    <th>Email</th>
                    <th>Quyền</th>
                    <th>Ảnh đại diện</th>
                    <th width="280px">Hành động</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($data as $user)
                  <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->username }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ getRoleNameById($user->role_id) }}</td>
                    <td><img src="{{ $user->avatar }}" alt="avatar" width="100px" height="100px"></td>
                    <td>
                    <form action="{{ route('user.destroy', $user->id)}}" method="post">
                      <a href="{{ action('UserController@edit', $user->id) }}" title="Sửa" class="text-info"><i class="fa fa-edit"></i></a>

                          @csrf
                          @method('DELETE')
                        <button class="text-danger" onclick="return confirm('Bạn muốn xóa?');" data-type="confirm" type="submit"><i class="fa fa-trash-o"></i></button>
                      </form>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @stop