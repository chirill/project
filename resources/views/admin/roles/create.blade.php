@extends('layouts.admin')
@section('content')
    <h1>Create Role</h1>
<div class="row">
    <div class="col-sm-4">
        {!! Form::open(['method'=>'POST', 'action'=>'AdminRolesController@store']) !!}

        <div class="form-group">
            {!! Form::label('name','Role Name:') !!}
            {!! Form::text('name',null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Create Role',['class'=>'btn btn-primary']) !!}
        </div>
        {!! Form::close() !!}

    </div>
</div>


    @stop