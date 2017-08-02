@extends('layouts.admin')

@section('content')
    <div class="col-sm-6">
        {!! Form::open(['method'=>'PATCH', 'action'=>['AdminCategoriesController@update', $category->id]]) !!}
        <div class="form-group">
            {!! Form::label('name', 'Name:') !!}
            {!! Form::text('name', $category->name, ['class'=>'form-control']) !!}
        </div>
        <div class="hidden">
            {!! csrf_token() !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Update category', ['class'=>'btn btn-success col-sm-4']) !!}
        </div>
        {!! Form::close() !!}

        {!! Form::open(['method'=>'DELETE', 'action'=>['AdminCategoriesController@destroy', $category->id]]) !!}
            <div-form-group>
                {!! Form::submit('Delete', ['class'=>'btn btn-warning col-sm-4 pull-right']) !!}
            </div-form-group>
        {!! Form::close() !!}
    </div>

    <div class="col-sm-6">

    </div>
@endsection