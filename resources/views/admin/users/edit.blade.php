@extends('templates.main')

@section('content')
    <h1>Edit Users</h1>
    <div class="card">
        <form method="post" action="{{route('admin.users.update', $user->id)}}">
            @method('patch')
            @include('partials.form')
        </form>
    </div>
@endsection
