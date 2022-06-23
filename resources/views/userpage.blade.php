@extends('layout')
    
@section('head-content')
    <link rel="stylesheet" href="css/userpageStyles.css">
    <script src="js/userpageScript.js" defer></script>
@endsection('head-content')

@section ('content')
    <main id="main">
        <div id="links">
            <p class="" onclick="toggleLinks(event)">&gt;</p>
            <ul id="links-list">
                <li>
                    <a href="{{route('apichallenges')}}">API Challenges</a>
                </li>

            </ul>
        </div>
        <div id="section" class="active">
            <div id="content">
                <h2>Page of {{auth()->user()->username}}</h2>
    
                <a href="{{route('logout')}}">Logout</a>
            </div>
        </div>
    </main>
@endsection('content')