@extends('layouts.admin')

@section('content')
    <h1>Edit Post</h1>
    <div class="row">
        <div class="col-sm-2">
            <img src="{{$post->photo->file}}" alt="">
        </div>
        <div class="col-sm-10">
            {!! Form::model($post,['method' => 'PATCH', 'action' => ['AdminPostsController@update', $post->id], 'files'=>'true']) !!}
            <div class="form-group">
                {!! Form::label('title', 'Title') !!}
                {!! Form::text('title', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('category_id', 'Category') !!}
                {!! Form::select('category_id', $categories, null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('photo_id', 'Photo') !!}
                {!! Form::file('photo_id', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('body', 'Description') !!}
                {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::submit('Update Post', ['class' => 'btn btn-primary']) !!}
            </div>
            {!! Form::close() !!}
            
            {!! Form::open(['action' => ['AdminPostsController@destroy', $post->id], 'method' => 'DELETE']) !!}
                <div class="form-group">
                    {!! Form::submit('Delete Post', ['class' => 'btm btn-danger']) !!}
                </div>
            {!! Form::close() !!}
        </div>
    </div>
    @include('includes.form_error')
@stop