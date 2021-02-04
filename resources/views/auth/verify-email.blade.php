@extends('templates.main')

@section('content')
    <h1>Verify E-mail Address</h1>
    <p>You must verify your email address to access this page</p>
    <form method="post" action="{{route('verification.send')}}">
        @csrf
        <button type="submit" class="btn btn-primary">Resend Verification E-mail</button>
    </form>
@endsection
