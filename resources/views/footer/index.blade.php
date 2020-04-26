
@extends('common.default')
@section('content')
<div class="row">
  <div class="col-md-12 col-sm-12 ">
    <div class="x_panel">
      <h2>Quản lý footer</h2>
      <div class="x_title">
        <div class="pull-left">
          <a href="{{action('FooterController@create')}}" class="btn btn-info" id="addVideo">
          <i class="fa fa-plus-circle"></i>Thêm mới footer</a>
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
                    <th>Ảnh </th>
                    <th>Thời gian hiển thị</th>
                    <th>Trạng thái</th>
                    <th>Hành động</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($data as $footer)
                  <tr>
                    <td>{{ $footer->id }}</td>
                    <td><img src="{{ $footer->image }}" alt="image"width ="100px" height="100px"></td>
                    <td>{{ ($footer->start_time)}} - {{ $footer->end_time }}</td>
                    <td>{{ $footer->status == 1 ?"Active":"Deactivate" }}</td>
                    <td>
                      <form action="{{ route('footer.destroy',$footer->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <a href="{{ action('FooterController@edit', $footer->id) }}" title="Sửa" class="text-info"><i class="fa fa-edit"></i></a>
                        <button type="submit" class="text-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa?');">
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