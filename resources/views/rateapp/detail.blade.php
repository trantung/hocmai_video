@extends('common.default')
@section('content')
<div class="container-fluid">
  <!-- DataTables Example -->
  <div class="card mb-3">
    <div class="card-header">
    <i class="fa fa-arrow-circle-left"></i>
      <a href="{{ action('RateAppController@index') }}">Trở laị</a>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>STT</th>
              <th>Tên đăng nhập</th>
              <th>Họ & tên</th>
              <th>Comment</th>
              <th>Điểm đánh giá</th>
              <th>Thời gian rate</th>
            </tr>
          </thead>

          <tbody>
              <?php  $i = 1; ?>
            @foreach($data as $rate_details)
            <tr>
                <td>{{$i++}}</td>
              <td>{{ $rate_details->customer_username }}</td>
              <td>{{ $rate_details->customer_name }}</td>
              <td>{{ $rate_details->customer_comment }}</td>
              <td>{{ $rate_details->rate }}</td>
              <td>{{ $rate_details->created_at }}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

@stop