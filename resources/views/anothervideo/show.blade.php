@extends('common.default')
@section('content')
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Hiện thị danh sách video</h2>
            </div>
            <div class="pull-right">
            <h2 class="navbar-left"><a class="btn btn-danger" href="{{ action('AnotherVideoController@index') }}">Trở lại</a></h2>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-3 col-md-3">
            <div class="form-group">
                <strong>Tiêu đề:</strong>
                {{ $anothervideo->title }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-3 col-md-3">
            <div class="form-group">
                <strong>url:</strong>
                {{ $anothervideo->url }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-3 col-md-3">
            <div class="form-group">
                <strong>Khối</strong>
                {{ getKhoiNameById($anothervideo->schoolblock_id) }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-3 col-md-3">
            <div class="form-group">
                <strong>Lớp:</strong>
                {{ getClassNameById($anothervideo->class_id) }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-3 col-md-3">
            <div class="form-group">
                <strong>Môn:</strong>
                {{ getMonNameById($anothervideo->subject_id) }}
            </div>
        </div>
    </div>
    @stop