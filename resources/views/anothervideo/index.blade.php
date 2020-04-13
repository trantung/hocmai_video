@extends('common.default')
@section('content')
<div class="row">
  <div class="col-md-12 col-sm-12 ">
    <div class="x_panel">
      <h2>Video từ nguồn khác</h2>
      <div class="x_title">
        <a href="{{action('AnotherVideoController@create')}}"><i class="fa fa-plus-circle"></i> Thêm mới</a>
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
                    <th>STT</th>
                    <th>Tiêu đề video</th>
                    <th>link video</th>
                    <th>Độ dài video</th>
                    <th>Kênh</th>
                    <th>Lớp</th>
                    <th>Môn</th>
                    <th>Ngày tải lên</th>
                    <th width="280px">Hành động</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($data as $sourceVideo)
                  <tr>
                    <td>{{ $sourceVideo->id }}</td>
                    <td>{{ $sourceVideo->title }}</td>
                    <td>{{ $sourceVideo->url }}</td>
                    <td>{{$sourceVideo->duration}}</td>
                    <td>{{ getKhoiNameById($sourceVideo->schoolblock_id) }}</td>
                    <td>{{ getClassNameById($sourceVideo->class_id) }}</td>
                    <td>{{ getMonNameById($sourceVideo->subject_id) }}</td>
                    <td>{{ $sourceVideo->created_at }}</td>
                    <td>
                      <form action="{{ action('AnotherVideoController@destroy',$sourceVideo->id) }}" method="POST">
                        <a href="{{ action('AnotherVideoController@edit',$sourceVideo->id) }}" title="Sửa" class="btn btn-info"><i class="fa fa-edit"></i></a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger"><a onclick="return confirm('Bạn có chắc chắn muốn xóa?');">
                            <i class="fa fa-trash"></i>
                          </a></button>
                        <a href="{{ action('AnotherVideoController@show',$sourceVideo->id) }}" title="xem chi tiết" class="btn btn-primary"><i class="fa fa-eye"></i></a>
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
</div>
@stop