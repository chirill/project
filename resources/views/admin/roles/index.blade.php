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
                    <th>Edit</th>

                </tr>
                </thead>
                <tbody>
                @if($roles)
                    @foreach($roles as $role)
                        <?php $count++;?>
                        <tr>
                            <td>{{$count}}</td>
                            <td><a href="{{route('admin.roles.show',$role->id)}}">{{$role->name}}</a></td>
                            <td><a href="{{route('admin.roles.edit',$role->id)}}">Edit</a></td>
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>
    </div>


    @stop