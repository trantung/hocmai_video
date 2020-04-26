@extends('common.default')
@section('content')
<div class="col-md-12">
    <div class="form-horizontal form-label-left">
        <div class="form-group row">
            <div class="col-lg-6">
                <label class="col-lg-6 col-md-6 col-sm-6">Tiêu đề Livestream</label>
                <div class="col-md-10 col-sm-10 col-lg-12">
                    <input type="text" value="{{$livestream->name}}" disabled="true" class="form-control">
                </div>
            </div>
            <b>Nguồn video phát</b>
            <div class="col-md-6 col-lg-6 col-sm-6">
                <label class="col-md-6 col-sm-6 col-lg-6 ">ID video</label>
                <div class="col-md-8 col-sm-8 col-lg-8">
                   <input type="text" name="url" id="url" disabled = true> 
                </div>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-6 col-lg-6 col-sm-6">
                <label class="col-md-6 col-sm-6 col-lg-6">Kênh phát</label>
                <div class="col-md-8 col-sm-8 col-lg-12">
                    @if(checkUserRole() == ADMIN)
                    {{ Form::select('schoolblock_id', getListKhoi(), old('schoolblock_id'), array('class' => 'form-control','id'=>'schoolblock_id')) }}
                    @else
                    {{ Form::select('schoolblock_id', getListKhoi(), getSchoolblockByUser(),array('class' => 'form-control', 'disabled' => true)) }}
                    @endif
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-sm-6" id="class_id">
                <label id="label_class1" class="col-lg-6 col-md-6 col-sm-6">Lớp</label>
                <div id="class1" class="col-md-8 col-sm-8 col-lg-8">
                    <select class="form-control" name="class_id">
                        <option value="1">Lớp 12</option>
                        <option value="2">Lớp 10</option>
                        <option value="3">Lớp 11</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-6 col-lg-6 col-sm-6">
                <label class="col-md-6 col-sm-6 col-lg-6">Giáo viên</label>
                <div class="col-md-8 col-sm-8 col-lg-12">
                    {{ Form::select('teacher_id', getListGv(), old('teacher_id'), array('class' => 'form-control')) }}
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-sm-6">
                <label class="col-md-6 col-sm-6 col-lg-6">Môn</label>
                <div class="col-md-8 col-sm-8 col-lg-8">
                    {{ Form::select('subject_id', getListMon(), old('subject_id'),array('class' => 'form-control')) }}
                </div>
            </div>
        </div>
        <div class="form-group row">
            <div class="form-group col-md-12">
                <label>Nội dung</label>
                <textarea name="description" value="{{ old('description') }}" require="true" class="form-control " id="editor1"></textarea>
            </div>
        </div>
    </div>
</div>
@stop