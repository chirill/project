@extends('layouts.admin')
@section('content')
    <h1>Edit Role</h1>
    <div class="row">
        <div class="col-sm-4">

            {!! Form::model($role,['method'=>'PATCH', 'action'=>['AdminRolesController@update',$role->id]]) !!}

            <div class="form-group">
                {!! Form::label('name','Role Name:') !!}
                {!! Form::text('name',null,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::submit('Update Role',['class'=>'btn btn-primary']) !!}
            </div>

        </div>

    </div>
    <div class="row">
        <div class="col-sm-4">
            {!! Form::close() !!}
            {!! Form::open(['method'=>'DELETE', 'action'=>['AdminRolesController@destroy',$role->id]]) !!}

            <div class="form-group">
                {!! Form::submit('Delete Role',['class'=>'btn btn-danger']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>


@stop