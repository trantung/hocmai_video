@extends('common.default')
@section('content')
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Hiện thị danh sách video</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('hocmaivideo.index') }}"><i class="fa fa-backward" style="color:aliceblue"></i></a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-3 col-md-3">
            <div class="form-group">
                <label>Tiêu đề:</label>
                {{ $hocmaivideo->title }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-3 col-md-3">
            <div class="form-group">
                <label>url:</label>
                {{ $hocmaivideo->url }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-3 col-md-3">
            <div class="form-group">
                <label>Khối :</label>
                {{ getKhoiNameById($hocmaivideo->schoolbock_id) }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-3 col-md-3">
            <div class="form-group">
                <label>Lớp:</label>
                {{ getClassNameById($hocmaivideo->class_id) }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-3 col-md-3">
            <div class="form-group">
                <label>Môn:</label>
                {{ getMonNameById($hocmaivideo->schoolsubject_id) }}
            </div>
        </div>
    </div>
    @stop