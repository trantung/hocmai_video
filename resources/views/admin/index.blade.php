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
      <div class="row">
        <div class="filters">
          <div class="col-md-3">
            <label for="schoolblock_id"> Lọc theo kênh</label>
            {{ Form::select('schoolblock_id', getListKhoi(), old('schoolblock_id'), array('class' => 'form-control','id'=>'kenh','data-attribute'=>'schoolblock_id')) }}
          </div>
          <div class="col-md-3">
            <label for="class_id"> Lọc theo Lớp</label>
            {{ Form::select('class_id', getListClass(), old('class_id'), array('class' => 'form-control','id'=>'lop','data-attribute'=>'class_id')) }}

          </div>
          <div class="col-md-3">
            <label for="teacher_id"> Lọc theo Giáo viên</label>
            {{ Form::select('teacher_id', getListGv(), old('teacher_id'), array('class' => 'form-control','id'=>'giaovien','data-attribute'=>'teacher_id')) }}
          </div>
          <div class="col-md-3">
            <label for="subject_id"> Lọc theo Môn</label>
            {{ Form::select('subject_id', getListMon(), old('subject_id'), array('class' => 'form-control','id'=>'mon','data-attribute'=>'subject_id')) }}
          </div>
        </div>
      </div>
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
        <table class="table table-filter table-hover m-b-0" id="datatable">
          <thead>
            <tr>
              <th>STT</th>
              <th>Id</th>
              <th>Tiêu đề</th>
              <th>Ngày tạo</th>
              <th>Thời gian phát</th>
              <th class="hidden">Kênh</th>
              <th class="hidden">Lớp</th>
              <th class="hidden">Giáo viên</th>
              <th class="hidden">Môn</th>
              <th>Kênh</th>
              <th>Lớp</th>
              <th>Giáo viên</th>
              <th>Môn</th>
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
              <td class="hidden">
                {{ $value->schoolblock_id }}
              </td>
              <td class="hidden">
                {{ $value->class_id }}
              </td>
              <td class="hidden">
                {{ $value->teacher_id }}
              </td>
              <td class="hidden">
                {{ $value->subject_id }}
              </td>
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
        </table>
      </div>
    </div>
  </div>
@stop