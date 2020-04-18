@extends('base')

@section('content')
<div class="text-center">
    <a href="{{ route('home') }}" class="btn btn-primary">Home &#127969;</a><br><br>
    {{-- @guest --}}
        <form method="POST" action="{{ route('insertmessage') }}">
            @csrf
            <label for="message">Enter your message</label><br>
            <textarea name="message" class="form-control" id="message" required></textarea><br>

            <label for="receiver">Who will receive this?</label><br>
            <select name="receiver" class="form-control" id="receiver" required>
                {{-- BUANG SEMUA KECUALI FOREACH BAWAH TU --}}
                @if (Auth::check())
                    @foreach ($users as $user)
                        @if(Auth::id() != $user->id)
                            <option value="{{ $user->id }}">{{ $user->name }}</option>   
                        @endif               
                    @endforeach
                @else
                {{-- JANGAN BUANG FOREACH NI --}}
                    @foreach ($users as $user)
                        <option value="{{ $user->id }}">{{ $user->name }}</option> 
                    @endforeach
                {{-- JANGAN BUANG FOREACH TAPI ENDIF KAT BAWAH NI BUANG --}}
                @endif 
            </select><br><br>
            <button type="submit" class="btn btn-primary">Submit &#128076;</button>
        </form>
    {{-- @else
        <h3>You are not allowed to send message as a user!</h3>
    @endguest --}}
</div>
@endsection