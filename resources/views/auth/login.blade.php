@extends('layout')

@section('head-content')
    <link href="{{ asset('css/auth/authentication.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div id="form-container">
        <form method="POST" action="{{route('login')}}">
            @csrf
            @error('all')
                <p class="error">{{ $message }}</p>
            @enderror

            @if ($retries <= 0)
                <p>Please try again after {{$seconds}} seconds.</p>
            @elseif($retries > 0)
                <p>Retries left: {{$retries}}</p>
            @endif
            <div id="input-container">
                <label for="username">Gebruikersnaam</label>
                <input type="text" id="username" name="username" class="@error('username') error @enderror">
                @error('username')
                    <p class="error">{{ $message }}</p>
                @enderror
            </div>

            <div id="input-container">
                <label for="password">Wachtwoord</label>
                <input type="password" id="password" name="password" class="@error('password') error @enderror">
                <a href="{{route('password.request')}}" id="forgot-password">Wachtwoord Vergeten?</a>
                @error('password')
                    <p class="error">{{ $message }}</p>
                @enderror
            </div>

            <hr>

            <div id="submit-container"> 
                <button type="submit" id="submitBtn">Login</button>
                <div id="remember-container">
                    <input type="checkbox" id="remember" name="remember">
                    <label for="password">Onthoud Mij</label>
                </div>
                <a id="register-button" href="{{route('registerView')}}">Register</a>
            </div>
        </form>
    </div>
    
@endsection