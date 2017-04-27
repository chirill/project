@extends('layouts.admin')
@section('content')
    <h1>Company - {{$company->name}}</h1>
    @foreach($company->locations as $location)
        address: {{$location->name}} -
        useri:
        @foreach($location->users as $user)
            {{$user->name}}
        @endforeach
    @endforeach

    @stop