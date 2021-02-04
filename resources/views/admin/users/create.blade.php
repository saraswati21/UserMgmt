@extends('templates.main')

@section('content')
    <h1>Create new Users</h1>
    <div class="card">
        <form method="post" action="{{route('admin.users.store')}}">
            @include('partials.form', ['create'=>true])
        </form>
    </div>
@endsection
