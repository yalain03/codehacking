@extends('layouts.admin')

@section('content')
    <h1>Categories</h1>

    <div class="col-sm-6">
        {!! Form::open(['method'=>'POST', 'action'=>'AdminCategoriesController@store']) !!}
            <div class="form-group">
                {!! Form::label('name', 'Name:') !!}
                {!! Form::text('name', null, ['class'=>'form-control']) !!}
            </div>
            <div class="hidden">
                {!! csrf_token() !!}
            </div>
            <div class="form-group">
                {!! Form::submit('Create category', ['class'=>'btn btn-success']) !!}
            </div>
        {!! Form::close() !!}
    </div>

    <div class="col-sm-6">
    @if($categories)
        <table class="table">
            <thead>
                <th>id</th>
                <th>Name</th>
                <th>Created</th>
            </thead>
            <tbody>
                @foreach($categories as $category)
                    <tr>
                        <td>{{$category->id}}</td>
                        <td><a href="{{route('admin.categories.edit', $category->id)}}">{{$category->name}}</a></td>
                        <td>{{$category->created_at ? $category->created_at->diffForHumans() : 'no date'}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
    </div>
@endsection