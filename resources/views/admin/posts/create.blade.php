@extends('layouts.admin')

@section('content')
<h1>Create Post</h1>
    {!! Form::open(['action' => 'AdminPostsController@store', 'method' => 'POST']) !!}
    	<div class="form-group">
            {!! Form::label('title', 'Title') !!}
            {!! Form::text('titile', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('category_id', 'Category') !!}
            {!! Form::select('category_id', array(''=>'option'),null, ['class' => 'form-control']) !!}
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
            {!! Form::submit('Create Post', ['class' => 'btn btn-primary']) !!}
        </div>
    {!! Form::close() !!}
    @include('includes.form_error')
@stop