@extends('templates.main')

@section('content')
    <h1>Reset Password</h1>
    <form method="post" action="{{route('password.email')}}">
        @csrf
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input name="email" type="email" class="form-control @error('email')  is-invalid @enderror" id="email1" aria-describedby="email" value="{{old('email')}}">
            @error('email')
            <span class="invalid-feedback" role="alert">
                    {{$message}}
                </span>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Reset Password</button>
    </form>
@endsection
