@extends('layouts.admin')

@section('content')
    <h1>Locations</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Nr</th>
                <th>Location</th>
                <th>Company</th>
            </tr>
        </thead>
        <tbody>
        @if($locations)
            @foreach($locations as $location)
            <tr>
                <td>nr</td>
                <td>{{$location->name}}</td>
                <td>{{$location->company->name}}</td>
            </tr>
            @endforeach
        @endif
        </tbody>
    </table>

    @stop

