
@extends('common.default')
@section('content')
<div class="row">
  <div class="col-md-12 col-sm-12 ">
    <div class="x_panel">
      <h2>Quản lý môn</h2>
      <div class="x_title">
        <div class="pull-left">
          <a href="{{action('SubjectController@create')}}" class="btn btn-info">
          <i class="fa fa-plus-circle"></i>Thêm mới</a>
        </div>
        <ul class="nav navbar-right panel_toolbox">
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
          </li>
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        <div class="row">
          <div class="col-sm-12">
            <div class="card-box table-responsive">
              <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                <thead>
                  <tr>
                    <th>Id</th>
                    <th>Tên môn</th>
                    <th>mô tả</th>
                    <th width="280px">Hành động</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($data as $subject)
                  <tr>
                    <td>{{ $subject->id }}</td>
                    <td>{{ $subject->name }}</td>
                    <td>{{ $subject->desc }}</td>
                    <td>
                      <form action="{{ action('SubjectController@destroy',$subject->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <a href="{{ action('SubjectController@edit', $subject->id) }}" title="Sửa" class="btn btn-info"><i class="fa fa-edit" style="color:whilte"></i></a>
                        <button type="submit" class="btn btn-danger"><a onclick="return confirm('Bạn có chắc chắn muốn xóa?');">
                          <i class="fa fa-trash" style="color:whilte"></i>
                          </a></button>
                      </form>
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