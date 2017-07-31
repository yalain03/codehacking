@extends('layouts.admin')

@section('content')
    <h1>Create Users</h1>

    {!! Form::open(['method'=>'POST', 'action'=>'AdminUsersController@store', 'files'=>true]) !!}
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
            {!! Form::select('is_active', array(1 => 'Active', 0 => 'Not Active'), 0, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('file', 'Photo:') !!}
            {!! Form::file('file', null, ['class'=>'btn btn-default']) !!}
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
            {!! Form::submit('Create User', ['class'=>'btn btn-primary']) !!}
        </div>
    {!! Form::close() !!}
@endsection