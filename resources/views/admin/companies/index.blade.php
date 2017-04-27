@extends('layouts.admin')
@section('content')
    <h1>All Companies</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Nr.</th>
                <th>Company Name</th>
                <th>Edit</th>

            </tr>
        </thead>
        <tbody>
        @if($companies)
            @foreach($companies as $company)
                @php
                    $count++;
                @endphp
            <tr>
                <td>{{$count}}</td>
                <td><a href="{{route('admin.companies.show',$company->id)}}">{{$company->name}}</a></td>
                <td><a href="{{route('admin.companies.edit',$company->id)}}">Edit</a></td>

            </tr>
            @endforeach
        @endif
        </tbody>
    </table>

    @stop