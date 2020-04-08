@extends('common.default')
@section('content')
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Hiện thị danh sách video</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('videoanother.index') }}"><i class="fa fa-backward" style="color:aliceblue"></i></a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-3 col-md-3">
            <div class="form-group">
                <strong>Tiêu đề:</strong>
                {{ $videoanother->title }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-3 col-md-3">
            <div class="form-group">
                <strong>url:</strong>
                {{ $videoanother->url }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-3 col-md-3">
            <div class="form-group">
                <strong>Khối</strong>
                {{ getKhoiNameById($videoanother->schoolbock_id) }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-3 col-md-3">
            <div class="form-group">
                <strong>Lớp:</strong>
                {{ getClassNameById($videoanother->class_id) }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-3 col-md-3">
            <div class="form-group">
                <strong>Môn:</strong>
                {{ getMonNameById($videoanother->schoolsubject_id) }}
            </div>
        </div>
    </div>
    @stop