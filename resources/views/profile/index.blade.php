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
            <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                <label for="email" class="control-label"><b>Name:</b></label>
                <input type="text" name="name" placeholder="Please enter your email here" class="form-control" value="{{ $user->name }}" />

                <?php if ($errors->has('name')) : ?>
                    <span class="help-block">
                        <strong>{{$errors->first('name')}}</strong>
                    </span>
                <?php endif; ?>

            </div>
            <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                <label for="email" class="control-label"><b>Email:</b></label>
                <input type="text" name="email" placeholder="Please enter your email here" class="form-control" value="{{ $user->email }}" />

                <?php if ($errors->has('email')) : ?>
                    <span class="help-block">
                        <strong>{{$errors->first('email')}}</strong>
                    </span>
                <?php endif; ?>

            </div>
            <div class="form-group">
                {{ Form::submit('Submit', array('class' => 'btn btn-primary')) }}
            </div>

            {{ Form::close() }}
        </div>
    </div>
</div>
@stop