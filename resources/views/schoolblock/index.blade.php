@extends('common.default')
@section('content')
<div class="row">
  <div class="col-md-12 col-sm-12 ">
    <div class="x_panel">
      <h2>Quản lý Kênh</h2>
      <div class="x_title">
        <a href="{{ action('SchoolBlockController@create') }}" class="btn btn-info"><i class="fa fa-plus-circle"></i> Thêm mới</a>
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
                    <th>Tên Khối</th>
                    <th>mô tả</th>
                    <th>ảnh</th>
                    <th width="280px">Hành động</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($data as $schoolblock)
                  <tr>
                    <td>{{ $schoolblock->id }}</td>
                    <td>{{ $schoolblock->name }}</td>
                    <td>{!! $schoolblock->desc !!}</td>
                    <td><img src="{{ $schoolblock->avatar }}" alt="avatar" width="100px" height="100px"></td>
                    <td>
                      <form action="{{ route('schoolblock.destroy',$schoolblock->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <a href="{{ action('SchoolBlockController@edit', $schoolblock->id) }}" title="Sửa" class="text-info"><i class="fa fa-edit"></i></a>
                        <button type="submit" class="text-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa?');" title="xóa">
                          <i class="fa fa-trash"></i>
                        </button>
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