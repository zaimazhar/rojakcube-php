@extends('base')

@section('content')
    <div class="text-center">
        <h3>Well Hello there.</h3>
        @guest
            <a href="{{ Route('messages') }}" class="btn btn-primary">Start Messaging &#128172;</a>
        @else
            <a href="{{ Route('messages') }}" class="btn btn-primary">Go to messages &#128172;</a>
            <a class="btn btn-danger" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        @endguest
        
    </div>
@endsection
