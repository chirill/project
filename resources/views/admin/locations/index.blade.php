@extends('layouts.admin')

@section('content')
    <h1>Locations</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Nr</th>
                <th>Location</th>
                <th>Company</th>
                <th>Edit</th>
                <th>Users in Location</th>
            </tr>
        </thead>
        <tbody>
        @if($locations)
            @foreach($locations as $location)
            @php $count++; $persoane = 0; @endphp
            @foreach($location->users as $user)
                @php $persoane++; @endphp
            @endforeach
            <tr>
                <td>{{$count}}</td>
                <td><a href="{{route('admin.locations.show',$location->id)}}">{{$location->name}}</a></td>
                <td>{{$location->company->name}}</td>
                <td>{{$persoane}}</td>
                <td><a href="{{route('admin.locations.edit',$location->id)}}">Edit</a></td>
            </tr>

            @endforeach
        @endif
        </tbody>
    </table>

    @stop

