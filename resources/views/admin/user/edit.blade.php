@extends('layouts.admin')

@section('content')

    <h1>Edit User</h1>
    <div class="col-sm-3">
        <img src="{{$user->photo ? $user->photo->file : 'http://placehold.it/40/40'}}" alt="" class="img-responsive img-rounded">
    </div>
    <div class="col-sm-9">
        {!! Form::model($user, ['action' => ['AdminUsersController@update', $user->id], 'method' => 'PATCH', 'files'=>true]) !!}
        <div class="form-group">
            {!! Form::label('name', 'Name:') !!}
            {!! Form::text('name', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('email', 'Email:') !!}
            {!! Form::text('email', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('role_id', 'Role:') !!}
            {!! Form::select('role_id',[''=>'Choose Option'] + $roles , null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('is_active', 'Status:') !!}
            {!! Form::select('is_active', array(1=>'Active', 0=>'Not Active'),null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('password', 'Password') !!}
            {!! Form::text('password', '', ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('photo_id', 'File:') !!}
            {!! Form::file('photo_id', null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Create User', ['class' => 'btn btn-primary']) !!}
        </div>

        {!! Form::open(['action' => ['AdminUsersController@destroy', $user->id], 'method' => 'DELETE']) !!}
        	<div class="form-group">
                {!! Form::submit('Delete User', ['class' => 'btn btn-danger']) !!}
            </div>
        {!! Form::close() !!}

        {!! Form::close() !!}
    </div>

    <div class="roe">
        @include('includes.form_error')
    </div>

@endsection