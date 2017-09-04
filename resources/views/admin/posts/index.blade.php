@extends('layouts.admin')

@section('content')
    <h1>Posts</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>User</th>
                <th>Category</th>
                <th>Photo</th>
                <th>Title</th>
                <th>Body</th>
                <th>View Posts</th>
                <th>View Comments</th>
            </tr>
        </thead>
        <tbody>
            @if($posts)
                @foreach($posts as $post)
                    <tr>
                        <td>{{$post->id}}</td>
                        <td><a href="{{route('admin.posts.edit', $post->id)}}">{{$post->user->name}}</a></td>
                        <td>{{$post->category ? $post->category->name : 'Undefined'}}</td>
                        <td><img height="50" width="50" src="{{ $post->photo ? $post->photo->file : 'http://placehold.it/400*400' }}" alt="None"></td>
                        <td>{{$post->title}}</td>
                        <td>{{str_limit($post->body, 15)}}</td>
                        <td><a href="{{route('home.post', $post->id)}}">View Post</a></td>
                        <td><a href="{{route('admin.comments.show', $post->id)}}">View Comments</a></td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
@endsection