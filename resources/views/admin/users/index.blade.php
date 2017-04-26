@extends('layouts.admin')

@section('content')

    <h1>Admin Dashboard</h1>
<table class="table">
    <thead>
        <tr>
            <th>Nr.</th>
            <th>Name</th>
            <th>Email</th>
            <th>Company</th>
            <th>Location</th>
            <th>Role</th>
            <th>Status</th>
            <th>Creater</th>
            <th>Updated</th>
        </tr>
    </thead>
    <tbody>
    @if($users)
        @foreach($users as $user)
        <tr>
            <td>nr</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->company->name}}</td>
            <td>{{$user->location->name}}</td>
            <td>{{$user->role->name}}</td>
            <td>{{$user->is_active==1?'Active':'Not Active'}}</td>
            <td>{{$user->created_at->diffForHumans()}}</td>
            <td>{{$user->updated_at->diffForHumans()}}</td>
        </tr>
        @endforeach
    @endif

    </tbody>
  </table>

@stop