@extends('common.default')
@section('content')
<div class="container-fluid">
  <!-- DataTables Example -->
  <div class="card mb-3">
    <div class="card-header">
      <i class="fas fa-table"></i>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>STT</th>
              <th>Tên OS</th>
              <th>Version</th>
              <th>Số lượng</th>
              <th>Điểm trung bình</th>
              <th>Chi tiết</th>
            </tr>
          </thead>

          <tbody>
              <?php  $i = 1; ?>
            @foreach($data as $rate)
            <tr>
                <td>{{$i++}}</td>
              <td>{{ getNameOS($rate->os) }}</td>
              <td>{{ $rate->version }}</td>
              <td>{{ $rate->total }}</td>
              <td>{{ round($rate->total_rate/$rate->total, 1) }}</td>
              <td> <a href="{{route('rateapp.os_detail', ['os' => $rate->os, 'version' => $rate->version])}}"><i class="fa fa-eye" style="color:#ff00b4"></i>xem chi tiết</a></td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

@stop