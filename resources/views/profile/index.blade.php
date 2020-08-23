@extends('common.default')
@section('content')
<div class="container">
    <div class="card card-register mx-auto mt-5">
        <div class="card-header">Yous Profile</div>
        <div class="card-body">
            {{ Form::open(array('method'=>'PUT', 'action' => array('ProfileController@update', $user->id))) }}
            <div class="form-group hidden">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="_method" value="PATCH">
            </div>
            <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }} col-md-6">
                <label for="email" class="control-label"><b>Name:</b></label>
                <input type="text" name="name" placeholder="Please enter your email here" class="form-control" value="{{ $user->name }}" />
                <?php if ($errors->has('name')) : ?>
                    <span class="help-block">
                        <strong>{{$errors->first('name')}}</strong>
                    </span>
                <?php endif; ?>
            </div>
            <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }} col-md-6">
                <label for="email" class="control-label"><b>Email:</b></label>
                <input type="text" name="email" placeholder="Please enter your email here" class="form-control" value="{{ $user->email }}" />

                <?php if ($errors->has('email')) : ?>
                    <span class="help-block">
                        <strong>{{$errors->first('email')}}</strong>
                    </span>
                <?php endif; ?>
            </div>
            <div class="col-md-6 form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                <label for="password" class="control-label"><b>password:</b></label>
                <input type="password" name="password" placeholder="Please enter your pass here" class="form-control" value="{{ $user->password}}" />
                <?php if ($errors->has('password')) : ?>
                    <span class="help-block">
                        <strong>{{$errors->first('password')}}</strong>
                    </span>
                <?php endif; ?>
            </div>
            @if(checkUserRole() == ADMIN)
                <div class="form-group col-md-6">
                    <label class="control-label">Quyền</label>
                        {{ Form::select('role_id', getListRole(),$user->role_id, array('class' => 'form-control')) }}
                </div>
            @endif
            <div class="form-group">
                <div class="col-md-6">
                    @if($user->avatar)
                    <img type = "file" src="{{ $user->avatar }} "class="form-control" style="width:200px;height:200px" />
                    @endif
                    <input type="file" name="avatar" id="avatar" class="form-control">
                </div>
            </div>
            <div class="form-group">
                {{ Form::submit('Submit', array('class' => 'btn btn-primary')) }}
            </div>
            {{ Form::close() }}
        </div>
    </div>
</div>
@stop