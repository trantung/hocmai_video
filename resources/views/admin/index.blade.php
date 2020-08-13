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
    <div class="x_header">
    </div>
    <div class="body x_content">
      <div class="row" style="margin: 5px;display: block">
        <div class="heaher-table filterDiv pull-left" id="filterDiv">
          <a href="{{ action('AdminController@index') }}" class="btn btn-simple btn-sm btn-filter btn-info" data-target="all">Tất cả</a>

          <a href="{{ action('AdminController@index', PLAYING) }}" class="btn  btn-simple btn-sm  btn-filter btn-info" data-target="approved">Đang phát</a>

          <a href="{{ action('AdminController@index', PLAY_TIME_CLOCKER) }}" class="btn  btn-simple btn-sm  btn-filter btn-info" data-target="suspended">Hẹn giờ phát</a>

          <a href="{{ action('AdminController@index', PLAY_FINISH) }}" class="btn  btn-simple btn-sm  btn-filter btn-info" data-target="pending">Đã phát xong</a>
        </div>
      </div>

      <div class="table-responsive m-t-20">
        <table class="table table-bordered table-striped filterTable" id="datatable ">
          <thead>
            <tr>
              <th>STT</th>
              <th>Id</th>
              <th>Tiêu đề</th>
              <th>Ngày tạo</th>
              <th>Thời gian phát</th>
              <th style="width:100px">kênh</th>
              <th style="width:100px"> Lớp</th>
              <th style="width:100px"> Giáo viên</th>
              <th style="width:100px"> Môn </th>
              <th>Trạng thái</th>
            </tr>
          </thead>
          <tbody>
            <?php $i = 1; ?>
            @foreach( $data as $value)
            <tr data-status="approved" class="filter-row">
              <td>{{$i++}}</td>
              <td>{{ $value->id }}</td>
              <td><a href="{{action('LivestreamAnotherVideoController@show',$value->id)}}">{{ $value->name }}</a></td>
              <td>{{ $value->created_at }}</td>
              <td>{{ getTimeLivestreamPlay($value) }}</td>
              <td>
                {{ getKhoiNameById($value->schoolblock_id)}}
              </td>
              <td>
                {{ getClassNameById($value->class_id)}}
              </td>
              <td>
                {{ getGVNameById($value->teacher_id)}}
              </td>
              <td>
                {{ getMonNameById($value->subject_id)}}
              </td>
              <td>
                {!! getStatusLivestream($value) !!}
              </td>
            </tr>
            @endforeach
          </tbody>
          <tfoot>
            <tr>
              <th>STT</th>
              <th>Id</th>
              <th>Tiêu đề</th>
              <th>Ngày tạo</th>
              <th>Thời gian phát</th>
              <th style="width:100px">kênh</th>
              <th style="width:100px"> Lớp</th>
              <th style="width:100px"> Giáo viên</th>
              <th style="width:100px"> Môn </th>
              <th>Trạng thái</th>
            </tr>
          </tfoot>
        </table>
      </div>
    </div>
  </div>
@stop
