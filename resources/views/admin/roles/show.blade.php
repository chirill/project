@extends('layouts.admin')
@section('content')
    <h1>Role - {{$role->name}}</h1>
    @foreach($role->users as $user)
        {{$user->name}}<br>
    @endforeach


    @stop