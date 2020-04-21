
@extends('common.default')
@section('content')
<div class="row">
  <div class="col-md-12 col-sm-12 ">
    <div class="x_panel">
      <h2>Quản lý header</h2>
      <div class="x_title">
        <div class="pull-left">
          <a href="{{action('HeaderController@create')}}" class="btn btn-info" id="addVideo">
          <i class="fa fa-plus-circle"></i>Thêm mới header</a>
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
                    <th>Lời chào</th>
                    <th>Ảnh</th>
                    <th>Thời gian hiển thị</th>
                    <th>Trạng thái</th>
                    <th>Hành động</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($data as $header)
                  <tr>
                    <td>{{ $header->id }}</td>
                    <td>{{ $header->desc }}</td>
                    <td><img src="{{ $header->image }}" alt="image"width ="100px" height="100px"></td>
                    <td>{!! $header->start_time !!} - {{$header->end_time}}</td>
                    <td>{{$header->status==1 ?"Active":"Deactivate"}}</td>
                    <td>
                      <form action="{{ route('header.destroy',$header->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <a href="{{ action('HeaderController@edit', $header->id) }}" title="Sửa" class="btn btn-info"><i class="fa fa-edit"></i></a>
                        <button type="submit" class="btn btn-danger"><a onclick="return confirm('Bạn có chắc chắn muốn xóa?');">
                          <i class="fa fa-trash"></i>
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