@extends('common.default')
@section('content')
<!-- top tiles -->
<!-- main -content  -->
<div class="x_panel">
  <div class="x_title">
    <h2><i class="fa fa-bars"></i> Livestream của tôi</h2>
    <ul class="nav navbar-right panel_toolbox">
      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
      </li>
    </ul>
    <div class="clearfix"></div>
  </div>
  <div class="body x_content">
    <div class="row" style="margin: 5px">
      <div class="heaher-table filterDiv" id="filterDiv">
        <a href="{{ action('AdminController@index') }}" class="btn btn-simple btn-sm btn-filter btn-info" data-target="all">Tất cả</a>

        <a href="{{ action('AdminController@index', PLAYING) }}"class="btn  btn-simple btn-sm  btn-filter btn-info" data-target="approved" >Đang phát</a>

        <a href="{{ action('AdminController@index', PLAY_TIME_CLOCKER) }}" class="btn  btn-simple btn-sm  btn-filter btn-info" data-target="suspended">Hẹn giờ phát</a>

        <a href="{{ action('AdminController@index', PLAY_FINISH) }}" class="btn  btn-simple btn-sm  btn-filter btn-info" data-target="pending">Đã phát xong</a>
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
            <td>{{ getTimeLivestreamPlay($value) }}</td>
            <td>
              {{ getKhoiNameById($value->schoolblock_id) }}
            </td>
            <td>
              {!! getStatusLivestream($value) !!}
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
<script>
  
</script>
@stop