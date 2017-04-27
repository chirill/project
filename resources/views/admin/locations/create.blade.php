@extends('layouts.admin')
@section('content')
    <h1>Create Location</h1>
<div class="row">
    <div class="col-sm-6">
        {!! Form::open(['method'=>'POST', 'action'=>'AdminLocationsController@store']) !!}
        <div class="form-group">
            {!! Form::label('name','Title:') !!}
            {!! Form::text('name',null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('company_id','Name:') !!}
            {!! Form::select('company_id',$companies,null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Create Location',['class'=>'btn btn-primary']) !!}
        </div>
        {!! Form::close() !!}
    </div>
</div>




    @stop