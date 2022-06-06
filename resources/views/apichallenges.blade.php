@extends('layout')
    
@section('head-content')
    <link rel="stylesheet" href="css/apichallengesStyles.css">

@endsection('head-content')

@section ('content')
    <main id="main">
        <img src="{{$item['links'][0]['href']}}" alt="{{$item['data'][0]['title']}}">
        <ul>
            <li>Title: {{$item['data'][0]['title']}}</li>
            <li>
                Keywords: 
                <ul>
                    @foreach($item['data'][0]['keywords'] as $keyword)
                        <li>{{$keyword}}</li>
                    @endforeach
                </ul>
            </li>
        </ul>
    </main>
@endsection('content')