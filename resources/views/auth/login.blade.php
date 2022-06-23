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
            <div id="input-container">
                <label for="username">Gebruikersnaam</label>
                <input type="text" id="username" name="username" class="@error('username') error @enderror">
                @error('username')
                    <p class="error">{{ $message }}</p>
                @enderror
            </div>

            <hr/>

            <div id="input-container">
                <label for="password">Wachtwoord</label>
                <input type="password" id="password" name="password" class="@error('password') error @enderror">
                @error('password')
                    <p class="error">{{ $message }}</p>
                @enderror
            </div>

            <hr/>

            <div id="submit-container"> 
                <button type="submit" id="submitBtn">Login</button>
                <a id="register-button" href="{{route('registerView')}}">Register</a>
            </div>
        </form>
    </div>
    
@endsection