@extends('layouts.admin')
@section('content')
    <h1>Edin Location</h1>
    <div class="row">
        <div class="col-sm-4">
    {!! Form::model($location,['method'=>'PATCH', 'action'=>['AdminLocationsController@update',$location->id]]) !!}
        <div class="form-group">
            {!! Form::label('name','Title:') !!}
            {!! Form::text('name',null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('company_id','Name:') !!}
            {!! Form::select('company_id',$companies,null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Update Location',['class'=>'btn btn-primary']) !!}
        </div>
        {!! Form::close() !!}
        </div>

    </div>
    <div class="row">
        <div class="col-sm-4">
            {!! Form::close() !!}
            {!! Form::open(['method'=>'DELETE', 'action'=>['AdminLocationsController@destroy',$location->id]]) !!}

            <div class="form-group">
                {!! Form::submit('Delete Location',['class'=>'btn btn-danger']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>


    @stop