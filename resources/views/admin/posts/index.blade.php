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
                    <td>{{$post->category_id}}</td>
                    <td>{{$post->photo_id}}</td>
                    <td>{{$post->title}}</td>
                    <td>{{$post->body}}</td>
                    <td>{{$post->created_at->diffForHumans()}}</td>
                    <td>{{$post->updated_at->diffForHumans()}}</td>
                </tr>
            @endforeach
        @endif
    </tbody>
</table>
@stop