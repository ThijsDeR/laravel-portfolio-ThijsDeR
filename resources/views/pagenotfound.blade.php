@extends('layout')
    
@section ('head-content')
    <link rel="stylesheet" href="css/pagenotfoundStyles.css">
    <script src="js/pagenotfoundScript.js" defer></script>
@endsection('head-content')

@section ('content')
    <main id="main">
        <div id="notfound">
            <div id="page-info">
                <h2>{{ $title; }}</h2>
                <p>is not a known page</p>
            </div>
            <img src="img/pagenotfound/404_not_found.svg" alt="">
        </div>
    </main>
@endsection('content')