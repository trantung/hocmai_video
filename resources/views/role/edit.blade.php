@extends('common.default')
@section('content')

<div class="container">
  <div class="card card-register mx-auto mt-5">
    <div class="card-header">Edit a role</div>
    <div class="card-body">
      {{ Form::open(array('method'=>'PUT', 'action' => array('RoleController@update', $role->id))) }}
        <div class="row form-group">
          <div class="col-md-6">
            <label>Role name</label>
            <div class="form-label-group">
              {{ Form::text('name', $role->name, array('class' => 'form-control')) }}
            </div>
          </div>
        </div>
        <div class="row form-group">
          <div class="col-md-6">
            <label>Decription</label>
            <div class="form-label-group">
              {{ Form::text('description', $role->description, array('class' => 'form-control')) }}
            </div>
          </div>
        </div>
        <div class="row form-group">
         {{ Form::submit('Submit', array('class' => 'btn btn-primary')) }}
        </div>
      {{ Form::close() }}
    </div>
  </div>
</div>

@stop
