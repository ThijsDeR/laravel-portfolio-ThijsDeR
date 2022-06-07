@extends('layout')

@section('head-content')
    <link href="{{ asset('css/auth/authentication.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div id="form-container">
        <form method="POST" action="{{route('login')}}">
            @csrf

            @if($errors->any())
                <div id="input-container">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            
            <div id="input-container">
                <label for="username">Gebruikernaam</label>
                <input type="text" id="username" name="username">
            </div>

            <hr/>

            <div id="input-container">
                <label for="password">Wachtwoord</label>
                <input type="password" id="password" name="password">
            </div>

            <hr/>

            <div id="submit-container"> 
                <button type="submit" class="nice-button">Login</button>
            </div>
        </form>
    </div>
    
@endsection