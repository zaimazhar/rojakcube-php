@extends('base')

@section('content')
    <h2>RojakCube &#128230;</h2><br>
    <a href="{{ route('home') }}" class="btn btn-primary">Back to Home &#127969;</a>
    <br><br><br><br>

    @guest
        <h3>You must be logged in to get your messages!</h3><br>
        <a href="{{ Route('putmessage') }}" class="btn btn-warning">Ask anonymously &#128100;</a>
        <a href="{{ Route('loginpage') }}" class="btn btn-primary">Login &#128273;</a>
        <a href="{{ Route('registerpage') }}" class="btn btn-success">Register &#128214;</a>
    @else
        <h3>Hi, {{ Auth::user()->name }} &#128075;<br><br>
            <h4>&#128071; Your messages</h4>
        <br>
        @foreach ($messages as $message)
            <div class="card bg-info mb-1">
                <div class="card-body">
                    <h4>Anonymous</h4>
                    <p>{{ $message->message }}<p>
                </div>
            </div>
        @endforeach
    @endguest
    
@endsection