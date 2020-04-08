@extends('common.default')
@section('content')
<div class="x_content">
  <div class="row">
    <div class="col-sm-12">
      <div class="card-box table-responsive">
        <div class="pull-left">
          <h2>Video từ nguồn khác</h2>
        </div>
        <div class="pull-right"><a href="{{action('VideoAnotherController@create')}}" class="btn btn-info" id="addVideo"><i class="fa fa-plus"></i>Thêm mời video</a></div>
        <table id="datatable" class="table table-striped table-bordered" style="width:100%">
          <thead>
            <tr>
              <th>STT</th>
              <th>Tiêu đề video</th>
              <th>link video</th>
              <th>Khối</th>
              <th>Lớp</th>
              <th>Môn</th>
              <th>Ngày tải lên</th>
              <th width="280px">Hành động</th>
            </tr>
          </thead>
          <tbody>
            @foreach($data as $video)
            <tr>
              <td>{{ $video->id }}</td>
              <td>{{ $video->title }}</td>
              <td>{{ $video->url }}</td>
              <td>{{ getKhoiNameById($video->schoolbock_id) }}</td>
              <td>{{ getClassNameById($video->class_id) }}</td>
              <td>{{ getMonNameById($video->schoolsubject_id) }}</td>
              <td>{{$video->created_at}}</td>
              <td>
                <form action="{{ route('videoanother.destroy',$video->id) }}" method="POST">

                  <a href="{{ route('videoanother.show',$video->id) }}"><i class="fa fa-eye" style="color:#ff00b4"></i>xem chi tiết |</a>

                  <a href="{{ route('videoanother.edit',$video->id) }}"><i class="fa fa-edit" style="color:blue"></i> Sửa |</a>

                  @csrf
                  @method('DELETE')

                  <button type="submit"><a onclick="return confirm('Bạn có chắc chắn muốn xóa?');">
                          <i class="fa fa-trash" style="color:red"></i>
                          </a>Xóa</button>
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
@stop