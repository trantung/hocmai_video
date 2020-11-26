@extends('common.default')
@section('content')
<div class="row">
  <div class="col-md-12 col-sm-12 ">
    <div class="x_panel">
      <div class="x_title">
        <ul class="nav navbar-right panel_toolbox">
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
          </li>
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        <div class="row">
          <div id="search_header" class="col-md-12">
            {{ Form::open(array('method'=>'get', 'action' => array('HocMaiCodController@index','multiple' => 'multiple'))) }}
              <div class="col-md-1">
                <label class="text-label">Trạng thái</label>
              </div>
              <div class="col-md-2">
                <select class="form-control" name="status">
                  <option value=""></option>
                  <option value="1">Chưa liên hệ</option>
                  <option value="2">Đã liên hệ</option>
                  <option value="3">Khách hủy</option>
                </select>
              </div>
              <div class="col-md-1">
                  <label class="text-label">Từ ngày</label>
              </div>
              <div class="col-md-2">
                  <input type="date" class="form-control search" name="formto">
              </div>
              <div class="col-md-1">
                  <label class="text-label">đến ngày</label>
              </div>
              <div class="col-md-2">
                  <input type="date" class="form-control search" name="to">
              </div>
            
              <div class="col-md-2">
                  {{ Form::submit('tìm kiếm', array('class' => 'btn btn-success')) }}
              </div>
            {{ Form::close() }}
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <div class="card-box table-responsive">
              <table id="example"  class="table table-striped table-bordered" cellspacing="0" width="100%" >
                <thead>
                  <tr>
                    <th>Stt</th>
                    <th>Id</th>
                    <th>Email</th>
                    <th>Số ĐT</th>
                    <th>Tỉnh/TP</th>
                    <th>Tên gói học</th>
                    <th>Số tiền</th>
                    <th>Thời gian</th>
                    <th>Trạng thái</th>
                    <th width="280px">Hành động</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $i = 1 ?>
                  @foreach($data as $hocmaiCod)
                  <tr>
                    <td>{{$i++}}</td>
                    <td>{{ $hocmaiCod->id }}</td>
                    <td>{{ $hocmaiCod->email }}</td>
                    <td>{{ $hocmaiCod->user_phone_cod == null ?$hocmaiCod->user_phone_account  :$hocmaiCod->user_phone_cod }}</td>
                    <td>{{ getCityId($hocmaiCod->city_id)}}</td>
                    <td>{{ $hocmaiCod->course_name_register }}</td>
                    <td>{{ $hocmaiCod->sale_price }}</td>
                    <td>{{date('d-m-Y H:i:s', strtotime($hocmaiCod->created_at)) }}</td>
                    <td>{{ getStatusHocMaiCod($hocmaiCod->status)}}</td>
                    <td>
                        <a href="{{ action('HocMaiCodController@show',$hocmaiCod->id) }}" title="Xem" class="text-info"><i class="fa fa-eye" style="color:#ff00b4"></i></a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @stop
  @section('scripts')
  <!-- <link href="{{asset('css/bootstrap-multiselect.css')}}" rel="stylesheet"/>
  <link href="{{asset('css/jquery.dataTables.min.css')}}" rel="stylesheet" />
  <link href="{{asset('css/buttons.dataTables.min.css')}}" rel="stylesheet" /> -->
  <link href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css" rel="stylesheet"/>
  <link href="https://cdn.datatables.net/buttons/1.6.4/css/buttons.dataTables.min.css"/>
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.6.4/js/dataTables.buttons.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.html5.min.js"></script>
  <script>
  $(document).ready(function() {
    $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5'
        ]
    } );
  } );
  </script>
  @stop