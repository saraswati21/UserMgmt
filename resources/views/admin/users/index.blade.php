@extends('templates.main')

@section('content')
    <div class="row">
        <div class="col-6">
            <h1 class="float-left">Users</h1>
        </div>
        <div class="col-6">
            <a class="btn btn-lg btn-success float-end" href="{{route('admin.users.create')}}" role="button">Create</a>
        </div>
    </div>

    <div class="card">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#ID</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th colspan="2" scope="col">Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <th scope="row">{{$user->id}}</th>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td><a class="btn btn-sm btn-primary" href="{{route('admin.users.edit', $user->id)}}" role="button">Edit</a></td>

                    <td><button type="button" class="btn btn-sm btn-danger" onclick="event.preventDefault();
                            document.getElementById('delete-user-form-{{$user->id}}').submit()">DELETE</button></td>
                    <form id="delete-user-form-{{$user->id}}" method="post" action="{{route('admin.users.destroy', $user->id)}}" style="display: none">
                        @csrf
                        @method("DELETE")
                    </form>
                </tr>
            @endforeach

            </tbody>
        </table>
    </div>
@endsection
