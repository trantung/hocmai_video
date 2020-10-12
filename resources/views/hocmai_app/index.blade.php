
@extends('common.default')
@section('content')
<div class="row">
  <div class="col-md-12 col-sm-12 ">
    <div class="x_panel">
      <div class="x_title">
        <h2>Quản lý App version</h2>
        <small> <a href="{{action('ManagerAppController@create')}}"><i class="fa fa-plus-circle"></i> Thêm mới</a></small>
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
                    <th>App Id</th>
                    <th>Os Id</th>
                    <th>App version</th>
                    <th>Status</th>
                    <th>adjust_event</th>
                    <th width="280px">Hành động</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($data as $hocmaiApp)
                  <tr>
                    <td>{{ $hocmaiApp->id }}</td>
                    <td>{{ $hocmaiApp->app_id }}</td>
                    <td>{{ $hocmaiApp->os_id }}</td>
                    <td>{{ $hocmaiApp->app_version }}</td>
                    <td>{{ getNameStatusAppVersion($hocmaiApp->status) }}</td>
                    <td>{{ $hocmaiApp->adjust_event }}</td>
                    <td>
                        <form action="{{ action('ManagerAppController@destroy',$hocmaiApp->id) }}" method="POST">
                        <a href="{{ action('ManagerAppController@show',$hocmaiApp->id) }}"><i class="fa fa-eye" style="color:#ff00b4"></i>xem chi tiết |</a>
                        <a href="{{ action('ManagerAppController@edit', $hocmaiApp->id) }}" title="Sửa"><i class="fa fa-edit" style="color:blue"></i> Sửa |</a>
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