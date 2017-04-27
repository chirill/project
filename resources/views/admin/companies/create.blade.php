@extends('layouts.admin')
@section('content')
    <h1>Create Location</h1>

    {!! Form::open(['method'=>'POST', 'action'=>'AdminCompaniesController@store']) !!}
        <div class="form-group">
            {!! Form::label('name','Company Name:') !!}
            {!! Form::text('name',null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Create Company',['class'=>'btn btn-primary']) !!}
        </div>
        {!! Form::close() !!}

    @stop