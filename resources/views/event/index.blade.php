
@extends('common.default')
@section('content')
<div class="row">
  <div class="col-md-12 col-sm-12 ">
    <div class="x_panel">
      <h2>Quản lý Sự kiện</h2>
      <div class="x_title">
        <div class="pull-left">
          <a href="{{action('EventController@create')}}">
          <i class="fa fa-plus-circle"></i>Thêm mới </a>
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
                    <th>STT</th>
                    <th>Tiêu đề</th>
                    <th>banner</th>
                    <th>Thời gian hiển thị</th>
                    <th>UrlWebNew</th>
                    <th width="280px">Hành động</th>
                </thead>
                <tbody>
                  <?php $i = 1;?>
                  @foreach($data as $event)
                  <tr>
                    <td>{{ $i++ }}</td>
                    <td>{!! $event->name !!}</td>
                    <td><img src="{{ $event->banner }}" alt="banner"width ="100px" height="100px"></td>
                    <td>{!! $event->start_time !!} - {{$event->end_time}}</td>
                    <td>{{$event->urlWebView}}</td>
                    <td>
                      <form action="{{ route('event.destroy',$event->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <a href="{{ action('EventController@edit', $event->id) }}" title="Sửa" class="text-info"><i class="fa fa-edit"></i></a>
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