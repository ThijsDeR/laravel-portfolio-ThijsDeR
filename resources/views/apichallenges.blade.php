@extends('layout')
    
@section('head-content')
    <link rel="stylesheet" href="css/apichallengesStyles.css">
    <script src="js/apichallenges.js"></script>

@endsection('head-content')

@section ('content')
    <main id="main">
        <img id="apiImage" src="" alt="" style="width: 50vw; height: 50vh;">
        <ul>
            <li>Title: <span id="apiTitle"></span></li>
            <li>
                Keywords: 
                <ul id="apiKeywords">
    
                </ul>
            </li>
        </ul>

        <button id="reloadData">Reload</button>
    </main>
@endsection('content')