@extends('common.default')
@section('content')
<div class="col-md-12 col-sm-12  ">
  <div class="x_panel">
    <h2>Sửa {{ $anothervideo->title }}</h2>
    <div class="x_title">
      <a href="{{ action('AnotherVideoController@index') }}" class="text-danger" title="trở lại"><i class="fa fa-backward"></i></a>
      <ul class="nav navbar-right panel_toolbox">
        <li>
          <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
        </li>
      </ul>
      <div class="clearfix"></div>
    </div>
    <div class="x_content">
      <br>
      {{ Form::open(array('method'=>'PUT', 'action' => array('AnotherVideoController@update', $anothervideo->id))) }}
      <div class="form-group row">
        <div class="col-md-6 col-sm-6 col-lg-6">
          <label class="col-md-4 col-sm-4 col-lg-4">Tiêu đề</label>
          <div class="col-md-9 col-sm-9">
            <input type="text" name="title" id="title" class="form-control" required value="{{$anothervideo->title}}">
          </div>
        </div>
        <div class="col-md-6 col-sm-6 col-lg-6">
          <label class="col-md-8 col-sm-8 col-lg-8">url</label>
          <div class="col-md-8 col-sm-8 col-lg-8">
            <input type="text" name="url" id="url" class="form-control" required value="{{$anothervideo->url}}">
          </div>
        </div>

      </div>
      <div class="form-group row">
        <div class="col-md-6 col-sm-6 col-lg-6 ">
          <label class="col-lg-4">Kênh</label>
          <div class="col-md-9 col-sm-9 ">
            @if(checkUserRole() == ADMIN)
              <select name="schoolblock_id" id="schoolblock_id" class="form-control">
                <option value="1" {{ $anothervideo->schoolblock_id == 1 ? 'selected' : '' }}>Trung học phổ thông</option>
                <option value="2" {{ $anothervideo->schoolblock_id == 2 ? 'selected' : '' }}>Trung học cơ sở</option>
                <option value="3" {{ $anothervideo->schoolblock_id == 3 ? 'selected' : '' }}>Tiểu học</option>
              </select>
            <!-- {{ Form::select('schoolblock_id', getListKhoi(), $anothervideo->schoolblock_id, array('class' => 'form-control','id'=>'schoolblock_id')) }} -->
            @else
            {{ Form::select('schoolblock_id', getListKhoi(), getSchoolblockByUser(), array('class' => 'form-control', 'disabled' => true)) }}
            @endif
          </div>
        </div>
        @if(checkUserRole() == ADMIN)
                <div class="col-md-6 col-lg-6 col-sm-6" id="class_id">
                    <label id="label_class1_edit" class="col-md-8 col-sm-8 col-lg-8">Lớp</label>
                    <div id="class1_edit" class="col-md-8 col-sm-8 col-lg-8">
                        <select class="form-control" name="class_id">
                        <option value="1"{{ $anothervideo->class_id == 1 ? 'selected' : '' }}>Lớp 12</option>
                        <option value="2" {{ $anothervideo->class_id == 2 ? 'selected' : '' }}>Lớp 11</option>
                        <option value="3"{{ $anothervideo->class_id == 3 ? 'selected' : '' }}>Lớp 10</option>
                        <option value="4"{{ $anothervideo->class_id == 4 ? 'selected' : '' }}>Lớp 9</option>
                        <option value="5"{{ $anothervideo->class_id == 5 ? 'selected' : '' }}>Lớp 8</option>
                        <option value="6"{{ $anothervideo->class_id == 6 ? 'selected' : '' }}>Lớp 7</option>
                        <option value="7" {{ $anothervideo->class_id == 7 ? 'selected' : '' }}>Lớp 6</option>
                        <option value="8" {{ $anothervideo->class_id == 8 ? 'selected' : '' }}>Lớp 5</option>
                        <option value="9" {{ $anothervideo->class_id == 9 ? 'selected' : '' }}>Lớp 4</option>
                        <option value="10" {{ $anothervideo->class_id == 10 ? 'selected' : '' }}>Lớp 3</option>
                        <option value="11" {{ $anothervideo->class_id == 11 ? 'selected' : '' }}>Lớp 2</option>
                        <option value="12"{{ $anothervideo->class_id == 12 ? 'selected' : '' }}>Lớp 1</option>
                        </select>
                    </div>
                </div>
                @else
                    @if(getSchoolblockByUser() == 1)
                        <div class="col-md-6 col-lg-6 col-sm-6" id="class_id">
                            <label id="label_class1" class="col-lg-6 col-md-6 col-sm-6">Lớp</label>
                            <div id="class1" class="col-md-8 col-sm-8 col-lg-8">
                                <select class="form-control" name="class_id">
                                    <option value="1" {{ $anothervideo->class_id == 1 ? 'selected' : '' }}>Lớp 12</option>
                                    <option value="2" {{ $anothervideo->class_id == 2 ? 'selected' : '' }}>Lớp 10</option>
                                    <option value="3" {{ $anothervideo->class_id == 3 ? 'selected' : '' }}>Lớp 11</option>
                                </select>
                            </div>
                        </div>
                    @endif
                    @if(getSchoolblockByUser() == 2)
                        <div class="col-md-6 col-lg-6 col-sm-6" id="class_id">
                            <label id="label_class1" class="col-lg-6 col-md-6 col-sm-6">Lớp</label>
                            <div id="class1" class="col-md-8 col-sm-8 col-lg-8">
                                <select class="form-control" name="class_id">
                                    <option value="4" {{ $anothervideo->class_id == 4 ? 'selected' : '' }}>Lớp 9</option>
                                    <option value="5" {{ $anothervideo->class_id == 5 ? 'selected' : '' }}>Lớp 8</option>
                                    <option value="6" {{ $anothervideo->class_id == 6 ? 'selected' : '' }}>Lớp 7</option>
                                    <option value="7" {{ $anothervideo->class_id == 7 ? 'selected' : '' }}>Lớp 6</option>
                                </select>
                            </div>
                        </div>
                    @endif
                    @if(getSchoolblockByUser() == 3)
                        <div class="col-md-6 col-lg-6 col-sm-6" id="class_id">
                            <label id="label_class1" class="col-lg-6 col-md-6 col-sm-6">Lớp</label>
                            <div id="class1" class="col-md-8 col-sm-8 col-lg-8">
                                <select class="form-control" name="class_id">
                                    <option value="8"{{ $anothervideo->class_id == 8 ? 'selected' : '' }}>Lớp 5</option>
                                    <option value="9"{{ $anothervideo->class_id == 9 ? 'selected' : '' }}>Lớp 4</option>
                                    <option value="10"{{ $anothervideo->class_id == 10 ? 'selected' : '' }}>Lớp 3</option>
                                    <option value="11"{{ $anothervideo->class_id == 11 ? 'selected' : '' }}>Lớp 2</option>
                                    <option value="12"{{ $anothervideo->class_id == 12 ? 'selected' : '' }}>Lớp 1</option>
                                </select>
                            </div>
                        </div>
                    @endif
                @endif
      </div>
      <div class="form-group row">
        <div class="col-md-6 col-sm-6 col-lg-6">
          <label class="col-lg-4">Môn</label>
          <div class="col-md-9 col-sm-9 ">
            {{ Form::select('subject_id', getListMon(),$anothervideo->subject_id, array('class' => 'form-control')) }}
          </div>
        </div>
        <div class="col-md-6 col-sm-6 col-lg-6">
          <label class="col-md-8 col-sm-8 col-lg-8">Độ dài video</label>
          <div class="col-md-8 col-sm-8 col-lg-8">
          <input type="text" name="duration" class="masked" placeholder="hh:mm:ss" value="{{gmdate('H:i:s', $anothervideo->duration)}}" data-inputmask="'mask': '99:99:99'"  id="nortlmask"  required />
            <!-- <input type="time" name="duration" value="{{gmdate('H:i:s', $anothervideo->duration)}}" step="1" required /> -->
          </div>
        </div>
      </div>
      <div class="form-group row">
        {{ Form::submit('Submit', array('class' => 'btn btn-success')) }}
      </div>
      {{ Form::close() }}
    </div>
  </div>
</div>
@stop