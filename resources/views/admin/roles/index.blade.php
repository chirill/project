@extends('layouts.admin')
@section('content')
    <h1>Roles</h1>
    <div class="row">
        <div class="col-sm-4">
            <table class="table">
                <thead>
                <tr>
                    <th>nr</th>
                    <th>Role Name</th>

                </tr>
                </thead>
                <tbody>
                @if($roles)
                    @foreach($roles as $role)
                        <?php $count++;?>
                        <tr>
                            <td>{{$count}}</td>
                            <td>{{$role->name}}</td>
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>
    </div>


    @stop