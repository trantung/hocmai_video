@extends('common.default')
@section('content')
<div class="x_content">
    <div class="row">
        <div class="col-sm-12">
            <div class="card-box table-responsive">
                <div class="pull-left">
                    <h2>Tải video</h2>
                </div>
                <div class="pull-right"><a href="{{action('VideoController@create')}}" class="btn btn-info" id="addVideo"><i class="fa fa-plus"></i>Tải video</a></div>
                <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Tiêu đề video</th>
                            <th>link video</th>
                            <th>Khối</th>
                            <th>Lớp</th>
                            <th>Môn</th>
                            <th>Ngày tải lên</th>
                            <th>Người tải</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $video)
                        <tr>
                        <td>{{ $video->id }}</td>
                        <td>{{ $video->name }}</td>
                        <td>{{ $video->url }}</td>
                        <td>{{ getKhoiNameById($video->shoolblock_id) }}</td>
                        <td>{{ getClassNameById($video->class_id) }}</td>
                        <td>{{ getMonNameById($video->schoolSubject_id) }}</td>
                        <td>{{$video->created_at}}</td>
                        <td>Admin</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@stop