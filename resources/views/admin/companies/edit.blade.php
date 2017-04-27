@extends('layouts.admin')
@section('content')
    <h1>Edit Company</h1>
    <div class="row">
        <div class="col-sm-4">

            {!! Form::model($company,['method'=>'PATCH', 'action'=>['AdminRolesController@update',$company->id]]) !!}

            <div class="form-group">
                {!! Form::label('name','Role Name:') !!}
                {!! Form::text('name',null,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::submit('Update Company',['class'=>'btn btn-primary']) !!}
            </div>
            {!! Form::close() !!}
        </div>

    </div>
    <div class="row">
        <div class="col-sm-4">

            {!! Form::open(['method'=>'DELETE', 'action'=>['AdminCompaniesController@destroy',$company->id]]) !!}

            <div class="form-group">
                {!! Form::submit('Delete Company',['class'=>'btn btn-danger']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>


@stop