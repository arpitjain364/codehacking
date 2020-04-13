@extends('layouts.admin')

@section('content');
    <h1>Post</h1>
    
<table class="table">
    <thead>
        <tr>
            <td>Post ID</td>
            <td>User</td>
            <td>Category ID</td>
            <td>Photo ID</td>
            <td>Title</td>
            <td>Body</td>
            <td>Created At</td>
            <td>Updated At</td>
            <td></td>
        </tr>
    </thead>
    <tbody>
        @if ($posts)
            @foreach($posts as $post)
                <tr>
                    <td>{{$post->id}}</td>
                    <td>{{$post->user->name}}</td>
                    <td>{{$post->category ? $post->category->name : "No cate"}}</td>
                    <td><img height="40" width="40" src="{{$post->photo ? $post->photo->file : "http://placeholder.com/400"}}"></td>
                    <td><a href="{{route('admin.posts.edit', $post->id)}}">{{$post->title}}</a></td>
                    <td>{{$post->body}}</td>
                    <td>{{$post->created_at->diffForHumans()}}</td>
                    <td>{{$post->updated_at->diffForHumans()}}</td>
                </tr>
            @endforeach
        @endif
    </tbody>
</table>
@stop