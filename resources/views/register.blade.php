@extends('base')

@section('content')
    <a href="{{ Route('home') }}" class="btn btn-primary">Home &#127969;</a>
    <a href="{{ Route('putmessage') }}" class="btn btn-warning">Ask Anonymously  &#128100;</a><br><br>
    <h2>Register &#127919;</h2><br>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <label for="name">Name</label>
        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" required autocomplete="name" autofocus>
        <label for="email">Email</label>
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" required autocomplete="email">
        <label for="password">Password</label>
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
        <label for="password-conofirm">Confirm Password</label>
        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
        <br><br>
        <button type="submit" class="btn btn-primary">
            {{ __('register') }}
        </button>
    </form>

@endsection