@extends('common.default')
@section('content')
<?php use Carbon\Carbon;?>
<?php 
    $now = Carbon::now();
    $now = $now->toDateTimeString();
    $timeNow = strtotime($now);
?>
<div class="col-md-12">
    <div class="x_panel">
        <div class="x_title">
            <div class="pull-right">
                <?php if ($livestream->status_time == IS_PUBLISH_INACTIVE): ?>
                    <form action="{{ route('livestream.destroy',$livestream->id) }}" method="POST">
                        <a href="{{action('LivestreamAnotherVideoController@edit',$livestream->id)}}"  class="btn btn-info">Sửa</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Xóa</button>
                    </form>
                <?php endif ?>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="x-content">
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group row">
                        <div class="col-lg-6">
                            <label class="col-lg-6 col-md-6 col-sm-6">Tiêu đề Livestream</label>
                            <div class="col-md-8 col-sm-8 col-lg-8">
                                <input type="text" value="{{$livestream->name}}" disabled="true" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-sm-6">
                            <label class="col-md-6 col-sm-6 col-lg-6 ">ID video</label>
                            <div class="col-md-8 col-sm-8 col-lg-8">
                            <input type="text" value="{{getUrlSourceVideoId($livestream->id)}}" disabled="true" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6 col-lg-6 col-sm-6">
                            <label class="col-md-6 col-sm-6 col-lg-6">Kênh phát</label>
                            <div class="col-md-8 col-sm-8 col-lg-8">
                                <select name="schoolblock_id" id="schoolblock_id" disabled="disabled">
                                    <option value="{{$livestream->schoolblock_id}}">{{ getKhoiNameById($livestream->schoolblock_id) }}</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-sm-6" id="class_id">
                            <label id="label_class1" class="col-lg-6 col-md-6 col-sm-6">Lớp</label>
                            <div id="class1" class="col-md-8 col-sm-8 col-lg-8">
                                <select name="class_id" id="class_id" disabled="disabled">
                                    <option value="{{$livestream->class_id}}">{{getClassNameById($livestream->class_id)}}</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6 col-lg-6 col-sm-6">
                            <label class="col-md-6 col-sm-6 col-lg-6">Giáo viên</label>
                            <div class="col-md-8 col-sm-8 col-lg-8">
                                <select name="teacher_id" id="teacher_id" disabled="disabled">
                                    <option value="{{$livestream->teacher_id}}">{{getGvNameById($livestream->teacher_id)}}</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-sm-6">
                            <label class="col-md-6 col-sm-6 col-lg-6">Môn</label>
                            <div class="col-md-8 col-sm-8 col-lg-8">
                                <select name="subject_id" id="subject_id" disabled="disabled">
                                    <option value="{{$livestream->subject_id}}">{{getMonNameById($livestream->subject_id)}}</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6 col-lg-6 col-sm-6">
                            <label class="col-md-6 col-sm-6 col-lg-6">Cấu hình video stream</label>
                            <div class="col-md-8 col-sm-8 col-lg-8">
                                <select name="repeat" id="repeat" disabled="disabled">
                                    <option value="$livestream->repeat">{{getNameRepeat($livestream->repeat)}}</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-sm-6">
                            <div class="pull-left">
                                <label for="image_small" class="col-lg-6">Cover Nhỏ</label>
                                <div class="col-lg-8">
                                <img src="{{$livestream->image_small}}" alt="image_small" width="100px">
                                </div>
                            </div>
                            <div class="pull-right" style="position: relative;right: 105px">
                                <label for="image_big" class="col-lg-6">Cover Lớn</label>
                                <div class="col-lg-8">
                                <img src="{{$livestream->image_big}}" alt="image_big" width="200px">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-6">
                            <label for="" class="col-lg-6">Thời gian đăng</label>
                            <div class="col-lg-8">
                            <span style="background-color: #e6ae11;color:floralwhite;margin:0 5px">
                                
                                <?php 
                                if ($livestream->status_time == IS_PUBLISH_INACTIVE): ?>
                                    hẹn giờ
                                <?php endif ?>
                                <?php
                                 if($livestream->status_time != IS_PUBLISH_INACTIVE && $timeNow > $livestream->end_time ): ?>
                                    Phát xong
                                <?php endif?>
                                <?php
                                 if($livestream->status_time != IS_PUBLISH_INACTIVE && $livestream->create_at< $timeNow && $timeNow < $livestream->end_time ): ?>
                                    đang phát
                                <?php endif ?>
                            </span><input type="text" value="{{$livestream->created_at}}" disabled style="width:78% !important;">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <label for="" class="col-lg-6">Thời gian hiển thị</label>
                            <div class="col-lg-8">
                                <input type="text" value="{{$livestream->timer_clock}}" disabled>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
