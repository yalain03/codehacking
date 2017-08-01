@extends('layouts.admin')

@section('content')
    <h1>Create Posts</h1>

    {!! Form::open(['method'=>'POST', 'action'=>'AdminPostsController@store', 'files'=>true]) !!}
        <div class="form-group {!! $errors->has('title') ? 'has-error' : '' !!}">
            {!! Form::label('title', 'Title:') !!}
            {!! Form::text('title', null, ['class'=>'form-control']) !!}
            {!! $errors->first('title', '<small class="help-block">:message</small>') !!}
        </div>

        <div class="form-group {!! $errors->has('category_id') ? 'has-error' : '' !!}">
            {!! Form::label('category_id', 'Category:') !!}
            {!! Form::select('category_id', array(1=>'PHP', 0=>'JavaScript'), null, ['class'=>'form-control']) !!}
            {!! $errors->first('category_id', '<small class="help-block">:message</small>') !!}
        </div>

        <div class="form-group {!! $errors->has('photo_id') ? 'has-error' : '' !!}">
            {!! Form::label('photo_id', 'Photo:') !!}
            {!! Form::file('photo_id', null) !!}
            {!! $errors->first('photo_id', '<small class="help-block">:message</small>') !!}
        </div>

        <div class="form-group {!! $errors->has('body') ? 'has-error' : '' !!}">
            {!! Form::label('body', 'Content:') !!}
            {!! Form::textarea('body', null, ['class'=>'form-control']) !!}
            {!! $errors->first('body', '<small class="help-block">:message</small>') !!}
        </div>

        <div class="hidden">
            {!! csrf_token() !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Create Post', ['class'=>'btn btn-primary']) !!}
        </div>
    {!! Form::close() !!}
@endsection