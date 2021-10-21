@extends('common.default')
@section('content')
<div class="container-fluid">
  <!-- DataTables Example -->
  <div class="card mb-3">
    <div class="card-header">
      <i class="fas fa-table"></i>
      <a href="{{ action('RoleController@create') }}">Add</a>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Id</th>
              <th>Role</th>
              <th>Description</th>
              <th>Action</th>
            </tr>
          </thead>

          <tbody>
            @foreach($data as $role)
            <tr>
              <td>{{ $role->id }}</td>
              <td>{{ $role->name }}</td>
              <td>{!! $role->description !!}</td>
              <td>
                {{ Form::open(array('method'=>'DELETE', 'action' => array('RoleController@destroy', $role->id), 'style' => 'display: inline-block;')) }}
                <a href="{{ action('RoleController@edit', $role->id) }}"><i class="fa fa-edit"></i></a>
                <button onclick="return confirm('Bạn có chắc chắn muốn xóa?');">
                  <i class="fa fa-trash text-danger"></i>
                  </button>
                  {{ Form::close() }}
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

@stop