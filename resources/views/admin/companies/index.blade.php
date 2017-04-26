@extends('layouts.admin')
@section('content')
    <h1>All Companies</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Nr.</th>
                <th>Company Name</th>

            </tr>
        </thead>
        <tbody>
        @if($companies)
            @foreach($companies as $company)
            <tr>
                <td>nr</td>
                <td>{{$company->name}}</td>

            </tr>
            @endforeach
        @endif
        </tbody>
    </table>

    @stop