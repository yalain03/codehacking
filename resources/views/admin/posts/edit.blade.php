@extends('layouts.admin')

@section('content')
    <h1>Edit Posts</h1>

    {!! Form::model($post, ['method'=>'PATCH', 'action'=>['AdminPostsController@update', $post->id], 'files'=>true]) !!}
    <div class="form-group {!! $errors->has('title') ? 'has-error' : '' !!}">
        {!! Form::label('title', 'Title:') !!}
        {!! Form::text('title', null, ['class'=>'form-control']) !!}
        {!! $errors->first('title', '<small class="help-block">:message</small>') !!}
    </div>

    <div class="form-group {!! $errors->has('category_id') ? 'has-error' : '' !!}">
        {!! Form::label('category_id', 'Category:') !!}
        {!! Form::select('category_id', [''=>'Choose option'] + $categories, null, ['class'=>'form-control']) !!}
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
        {!! Form::submit('Save Changes', ['class'=>'btn btn-success col-sm-4']) !!}
    </div>
    {!! Form::close() !!}

    {!! Form::open(['method'=>'DELETE', 'action'=>['AdminPostsController@destroy', $post->id]]) !!}
        <div class="form-group">
            {!! Form::submit('Delete Post', ['class'=>'btn btn-danger col-sm-4 pull-right']) !!}
        </div>
    {!! Form::close() !!}
@endsection