
@extends('common.default')
@section('content')
<div class="row">
  <div class="col-md-12 col-sm-12 ">
    <div class="x_panel">
      <div class="x_title">
        <h2>Quản lý video học mãi<small><a href="{{ action('HocMaiVideoController@create') }}"><i class="fa fa-plus-circle"></i> Thêm mới</a></small></h2>
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
                    <th>ID học mãi</th>
                    <th>Tiêu đề</th>
                    <th>Link video</th>
                    <th>Lớp</th>
                    <th>Khối</th>
                    <th>Môn</th>
                    <th width="280px">Hành động</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($data as $hocmaivideo)
                  <tr>
                    <td>{{ $hocmaivideo->id }}</td>
                    <td>{{ $hocmaivideo->scorm_id }}</td>
                    <td>{{ $hocmaivideo->title }}</td>
                    <td>{{ $hocmaivideo->url }}</td>
                    <td>{{ getKhoiNameById($hocmaivideo->schoolbock_id) }}</td>
                    <td>{{ getClassNameById($hocmaivideo->class_id) }}</td>
                    <td>{{ getMonNameById($hocmaivideo->schoolsubject_id) }}</td>
                    <td>
                      <form action="{{ route('hocmaivideo.destroy',$hocmaivideo->id) }}" method="POST">
                        <a href="{{ route('hocmaivideo.show',$hocmaivideo->id) }}"><i class="fa fa-eye" style="color:#ff00b4"></i>xem chi tiết |</a>
                        <a href="{{ action('HocMaiVideoController@edit', $hocmaivideo->id) }}" title="Sửa"><i class="fa fa-edit" style="color:blue"></i> Sửa |</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit"><a onclick="return confirm('Bạn có chắc chắn muốn xóa?');">
                          <i class="fa fa-trash" style="color:blue"></i>Xóa
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