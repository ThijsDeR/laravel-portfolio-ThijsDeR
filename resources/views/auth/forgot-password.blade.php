@extends('layout')

@section('head-content')
    <link href="{{ asset('css/auth/authentication.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div id="form-container">
        <form method="POST" action="{{route('password.email')}}">
            @csrf
            <div id="input-container">
                <label for="email">Email</label>
                <input type="text" id="email" name="email" class="@error('email') error @enderror">
                @error('email')
                    <p class="error">{{ $message }}</p>
                @enderror
            </div>

            @error('status') 
                <p>hello</p>
                <p>{{$message}}</p>
            @enderror
            <div id="submit-container"> 
                <button type="submit" id="submitBtn">Send Email</button>
            </div>

        </form>
    </div>
    
@endsection