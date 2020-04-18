@extends('base')

@section('content')
    <a href="{{ Route('home') }}" class="btn btn-primary">Home &#127969;</a>
    <a href="{{ Route('putmessage') }}" class="btn btn-warning">Ask Anonymously &#128100;</a><br><br>
    <h2>Login</h2><br>
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <label for="email">Email</label>
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
        <label for="password">Password</label>
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password"><br><br>
        <button type="submit" class="btn btn-primary">
            {{ __('Login') }}
        </button>
    </form>

@endsection