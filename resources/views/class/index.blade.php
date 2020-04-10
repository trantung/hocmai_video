@extends('common.default')
@section('content')
<div class="row">
  <div class="col-md-12 col-sm-12 ">
    <div class="x_panel">
      <div class="x_title">
        <h2>Quản lý Lớp</h2>
        <div class="pull-right">
          <a href="{{action('ClassController@create')}}" class="btn btn-info" id="addVideo">
          <i class="fa fa-plus"></i>Thêm mới lớp</a>
        </div>
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
                    <th>Tên lớp</th>
                    <th>Mô tả</th>
                    <th>Môn học</th>
                    <th>Khối học</th>
                    <th colspan="2">Hành động</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($data as $class)
                  <tr>
                    <td>{{ $class->id }}</td>
                    <td>{{ $class->name }}</td>
                    <td>{{ $class->desc }}</td>
                    <td>{{getMonNameById($class->schoolsubjects_id) }}</td>
                    <td>{{ getKhoiNameById($class->schoolblock_id) }}</td>
                    <td><a href="{{ action('ClassController@edit', $class->id) }}" title="Sửa"><i class="fa fa-edit" style="color:blue"></i></a></td>
                    <td>
                      <form action="{{ route('class.destroy',$class->id) }}" method="POST">
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