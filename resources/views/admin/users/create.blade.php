@extends('layouts.admin')
@section('content')
    <h1>Create User</h1>

    {!! Form::open(['method'=>'POST', 'action'=>'AdminUsersController@store']) !!}
        <div class="form-group">
            {!! Form::label('name','Name:') !!}
            {!! Form::text('name',null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('email','Email:') !!}
            {!! Form::email('name',null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('password','Password:') !!}
            {!! Form::text('password',null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('role_id','Select Role:') !!}
            {!! Form::select('role_id',$roles,null,['class'=>'form-control']) !!}
        </div>
    <div class="form-group">
        {!! Form::label('company_id','Select Role:') !!}
        {!! Form::select('company_id',$company,null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('location_id','Select Role:') !!}
        {!! Form::select('location_id',$roles,null,['class'=>'form-control']) !!}
    </div>
        <div class="form-group">
            {!! Form::submit('Create User',['class'=>'btn btn-primary']) !!}
        </div>
        {!! Form::close() !!}


    @stop