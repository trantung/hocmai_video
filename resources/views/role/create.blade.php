@extends('common.default')
@section('content')

<div class="container">
  <div class="card card-register mx-auto mt-5">
    <div class="card-header">Register a role</div>
    <div class="card-body">
      {{ Form::open(['action' => 'RoleController@store']) }}
        <div class="row form-group">
          <div class="col-md-6">
            <label>Role name</label>
            <div class="form-label-group">
              <input type="text" name="name" class="form-control" autofocus="autofocus">
            </div>
          </div>
        </div>
        <div class="row form-group">
          <div class="col-md-6">
            <label>Decription</label>
            <div class="form-label-group">
              <input type="text" name="description" class="form-control">
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
