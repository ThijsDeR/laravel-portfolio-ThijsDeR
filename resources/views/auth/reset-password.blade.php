@extends('layout')

@section('head-content')
    <link href="{{ asset('css/auth/authentication.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div id="form-container">
        <form method="POST" action="{{route('password.update')}}">
            @csrf
            <div id="input-container">
                <label for="email">email</label>
                <input type="text" id="email" name="email" class="@error('email') error @enderror">
                @error('email')
                    <p class="error">{{ $message }}</p>
                @enderror
            </div>

            <hr>

            <div id="input-container">
                <label for="password">Wachtwoord</label>
                <input type="password" id="password" name="password" class="@error('password') error @enderror">
                @error('password')
                    <p class="error">{{ $message }}</p>
                @enderror
            </div>

            <hr>

            <div id="input-container">
                <label for="password_confirmation">Confirm Wachtwoord</label>
                <input type="password" id="password_confirmation" name="password_confirmation" class="@error('password_confirmation') error @enderror">
                @error('password_confirmation')
                    <p class="error">{{ $message }}</p>
                @enderror
            </div>

            <hr>

            <input type="hidden" name="token" value="{{$token}}">

            <div id="submit-container"> 
                <button type="submit" id="submitBtn">Reset Password</button>
            </div>
        </form>
    </div>
    
@endsection