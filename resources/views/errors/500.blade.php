@extends('layout')
    
@section ('head-content')
    <link rel="stylesheet" href="css/errorStyles.css">
    <script src="js/pagenotfoundScript.js" defer></script>
@endsection('head-content')

@section ('content')
    <main id="main">
        <div id="notfound">
            <img src="img/ServerFire.png" alt="">
            <div id="page-info">
                <h2>Server Error</h2>
                <p>
                    Our server made a Mistake >:(<br>
                    We know about this mistake and we are working<br>
                    on a solution
                </p>
                <div id="backBtns">
                    <a href="{{url()->previous()}}">Go Back</a>
                    <p>Or</p>
                    <a href="{{route('home')}}">Go Home</a>
                </div>
            </div>
        </div>
    </main>
@endsection('content')