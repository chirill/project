@extends('layouts.admin')
@section('content')
    <h1>Location {{$location->name}}</h1>
    <div class="row">
        <div class="col-sm-3">
            <p>Users list</p>
            @foreach($location->users as $user)

                <p>{{ucfirst($user->name)}}</p>

            @endforeach
        </div>
    </div>


    @stop