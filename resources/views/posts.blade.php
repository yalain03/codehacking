@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-md-9">
            <table class="table">
                <thead>
                    <tr>
                        <th>Post Title</th>
                        <th>Content</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($posts as $post)
                        <tr>
                        <td><a href="{{ url('/post', ['id'=>$post->id]) }}">{{ $post->title }}</a></td>
                        <td>{{str_limit($post->body, 45)}}</td>
                        </tr>
                        @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @endsection