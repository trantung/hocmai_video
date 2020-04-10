@extends('common.default')
@section('content')
  <!-- top tiles -->
  <!-- main -content  -->
  <div class="row clearfix">
    <div class="col-lg-12">
      <div class="card">
        <div class="header">
          <h2> Livestream của tôi</h2>
        </div>
        <div class="body">
          <div class="row" style="margin: 5px">
            <div class="heaher-table">
              <button type="button" class="btn  btn-simple btn-sm btn-danger btn-filter" data-target="all">Tất cả</button>
              <button type="button" class="btn  btn-simple btn-sm btn-success btn-filter" data-target="approved">Đang phát</button>
              <button type="button" class="btn  btn-simple btn-sm btn-warning btn-filter" data-target="suspended">Hẹn giờ phát</button>
              <button type="button" class="btn  btn-simple btn-sm btn-info btn-filter" data-target="pending">Đã phát xong</button>
            </div>
          </div>
          <div class="table-responsive m-t-20">
            <table class="table table-filter table-hover m-b-0" id="datatable">
              <thead>
                <tr>
                  <th>Id</th>
                  <th>Tiêu đề</th>
                  <th>Ngày tạo</th>
                  <th>Thời gian phát</th>
                  <th>Khối</th>
                  <th>Trạng thái</th>
                </tr>
              </thead>
              <tbody>
                @foreach($data as $value)
                <tr data-status="approved">
                  <td>{{ $value->id }}</td>
                  <td>{{ $value->name }}</td>
                  <td>{{ $value->created_at }}</td>
                  <td>jacob@gnail.com</td>
                  <td>
                    1132131
                  </td>
                  <td><span class="badge badge-success">Đang phát</span></td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
@stop