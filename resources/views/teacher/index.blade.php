
@extends('common.default')
@section('content')
<div class="row">
  <div class="col-md-12 col-sm-12 ">
    <div class="x_panel">
      <div class="x_title">
        <h2>Quản lý Giáo viên<small><a href="{{ action('TeacherController@create') }}"><i class="fa fa-plus-circle"></i> Thêm mới</a></small></h2>
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
                    <th>Tên môn</th>
                    <th>mô tả</th>
                    <th colspan="2">Hành động</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($data as $teacher)
                  <tr>
                    <td>{{ $teacher->id }}</td>
                    <td>{{ $teacher->name }}</td>
                    <td>{{ $teacher->desc }}</td>
                    <td><a href="{{ action('TeacherController@edit', $teacher->id) }}" title="Sửa"><i class="fa fa-edit" style="color:blue"></i></a></td>
                    <td>
                      <form action="{{ route('teacher.destroy',$teacher->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit"><a onclick="return confirm('Bạn có chắc chắn muốn xóa?');">
                          <i class="fa fa-trash" style="color:blue"></i>
                          </a></button>
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