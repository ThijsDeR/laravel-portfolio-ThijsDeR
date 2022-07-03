@extends('layout')

@section('head-content')
    <link href="{{ asset('css/auth/authentication.css') }}" rel="stylesheet">
    <script src="{{ asset('js/registerScript.js') }}" defer></script>
@endsection

@section('content')
    <div id="form-container">
        <form method="POST" action="{{route('register')}}">
            @csrf
            <div id="input-container">
                <label for="username">Gebruikersnaam <span class="required">*</span></label>
                <input type="text" id="username" name="username" class="@error('username') error @enderror">
                <p class="error">@error('username') {{ $message }} @enderror</p>
            </div>

            <hr>

            <div id="input-container">
                <label for="email">Email <span class="required">*</span></label>
                <input type="email" id="email" name="email" class="@error('email') error @enderror">
                <p class="error">@error('email') {{ $message }} @enderror</p>
            </div>

            <hr/>

            <div id="input-container">
                <label for="password">Wachtwoord <span class="required">*</span></label>
                <input type="password" id="password" name="password" class="@error('password') error @enderror">
                <p class="error">@error('password') {{ $message }} @enderror</p>
                <p>Gebruik een sterk wachtwoord en sla het op in een wachtwoordmanager voor extra gemak</p>
            </div

            <hr/>

            <div id="submit-container"> 
                <button type="submit" id="register-button">Registreer</button>
                <div id="remember-container">
                    <input type="checkbox" id="remember" name="remember">
                    <label for="password">Onthoud Mij</label>
                </div>
            </div>
        </form>
    </div>
    
@endsection