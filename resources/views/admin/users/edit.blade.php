@extends('layouts.admin')

@section('content')
    <h1>Edit User</h1>

    <div class="col-sm-3">
        <img src="{{$user->photo ? $user->photo->file : 'pic.jpg'}}" alt="None" class="img-responsive">
    </div>

    <div class="col-sm-9">
        {!! Form::model($user, ['method'=>'PATCH', 'action'=>['AdminUsersController@update', $user->id], 'files'=>true]) !!}
        <div class="form-group {!! $errors->has('name') ? 'has-error' : '' !!}">
            {!! Form::label('name', 'Name:') !!}
            {!! Form::text('name', null, ['class'=>'form-control']) !!}
            {!! $errors->first('name', '<small class="help-block">:message</small>') !!}
        </div>

        <div class="form-group {!! $errors->has('email') ? 'has-error' : '' !!}">
            {!! Form::label('email', 'Email:') !!}
            {!! Form::email('email', null, ['class'=>'form-control']) !!}
            {!! $errors->first('email', '<small class="help-block">:message</small>') !!}
        </div>

        <div class="form-group {!! $errors->has('role_id') ? 'has-error' : '' !!}">
            {!! Form::label('role_id', 'Role:') !!}
            {!! Form::select('role_id', ['' => 'Choose Options'] + $roles, null, ['class'=>'form-control']) !!}
            {!! $errors->first('role_id', '<small class="help-block">:message</small>') !!}
        </div>

        <div class="form-group">
            {!! Form::label('is_active', 'Status:') !!}
            {!! Form::select('is_active', array(1 => 'Active', 0 => 'Not Active'), null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('photo_id', 'Photo:') !!}
            {!! Form::file('photo_id', null, ['class'=>'btn btn-default']) !!}
        </div>

        <div class="form-group {!! $errors->has('password') ? 'has-error' : '' !!}">
            {!! Form::label('password', 'Password:') !!}
            {!! Form::password('password', ['class'=>'form-control']) !!}
            {!! $errors->first('password', '<small class="help-block">:message</small>') !!}
        </div>

        <div class="hidden">
            {!! csrf_token() !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Update User', ['class'=>'btn btn-primary col-sm-4']) !!}
        </div>
        {!! Form::close() !!}

        {!! Form::open(['method'=>'DELETE', 'action'=>['AdminUsersController@destroy', $user->id]]) !!}
            <div class="form-group">
                {!! Form::submit('Delete User', ['class'=>'btn btn-warning col-sm-4']) !!}
            </div>
        {!! Form::close() !!}
    </div>
@endsection