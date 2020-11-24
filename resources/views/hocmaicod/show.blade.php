@extends('common.default')
@section('content')
<div class="col-md-12 col-sm-12  ">
  <div class="x_panel">
    <div class="x_title">
        <h4>Đơn hàng COD/ chi tiết</h4>
      <ul class="nav navbar-right panel_toolbox">
        <li>
          <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
        </li>
      </ul>
      <div class="clearfix"></div>
    </div>
    <div class="x_content">
      <br>
        <div class="form-group row">
         <table class="borderless" style="width:100%;margin:5px">
            <tr>
                <td colspan="2"><label class="text-label">ID: </label>
                    {{$data->id}}
                </td>
            </tr>
            <tr>
                <td >
                    <label class="text-label">Email: </label>
                    {{$data->email}}
                </td>
                <td>
                    <label class="text-label">Trạng Thái: </label>
                    {{getStatusHocMaiCod($data->status)}}
                </td>
            </tr>
            <tr>
                <td >
                    <label class="text-label">Số điện thoại: </label>
                    {{$data->user_phone_cod == null ? $data->user_phone_account:$data->user_phone_cod}}
                </td>
                <td><label class="text-label">Họ & tên: </label> {{$data->user_name}}</td>
            </tr>
            <tr>
                <td colspan="2">
                <label class="text-label">Địa chỉ: </label>
                {{$data->address}}
                </td>
            </tr>
            <tr>
                <td colspan="2">
                <label class="text-label">Thời gian: </label>
                {{date('d-m-Y H:i:s', strtotime($data->created_at)) }}
                </td>
            </tr>
         </table>
        </div>
        <div class="form-group row" style="border: 2px solid;padding: 10px;border-radius: 2px;">
            <table class="table table-bordered table-hover table-bordered">
            <tr>
                <th>ID khóa học</th> 
                <th>Tên khóa học</th>
                <th>ID gói học phí</th> 
                <th>Tên gói học phí</th>
                <th>Giá gốc</th> 
                <th>Giá giảm</th>
            </tr>
            <tr>
                <td>{{$data->package_time_id_register}}</td> 
                <td>{{$data->package_time_name_register}}</td>
                <td>{{$data->course_id_register}}</td> 
                <td>{{$data->course_name_register}}</td>
                <td>{{$data->base_price}}</td> 
                <td>{{$data->sale_price}}</td>
            </tr>
            </table>
        </div>
        <div class="form-group row">
        {{ Form::open(array('method'=>'PUT', 'action' => array('HocMaiCodController@update', $data->id))) }}
            <div class="col-md-12">
                <label class="text-label">Ghi Chú </label>
                {!! Form::textarea('note', $data->note, ['id' => 'note', 'rows' => 4, 'cols' => 200,'style'=>'width:100%']) !!}
            </div>
            <div class="col-md-12">
                <label class="text-label">trạng thái </label>
            </div>
            <div class="col-md-4">
                <select class="form-control" name="status">
                    <option value="1" {{ $data->status == 1 ? 'selected' : ''}}> Chưa liên hệ</option>
                    <option value="2" {{ $data->status == 2 ? 'selected' : ''}}> Đã liên hệ</option>
                    <option value="3" {{ $data->status == 3 ? 'selected' : ''}}> Khách hàng hủy</option>
                </select>
            </div>
            
            <div class="col-md-12 text-center">
                {{ Form::submit('Submit', array('class' => 'btn btn-success')) }}
                <a href="{{ action('HocMaiCodController@index') }}" title="Hủy" class="btn btn-info">Hủy</a>
            </div>
        {{ Form::close() }}
        </div>
    </div>
  </div>
</div>
@stop