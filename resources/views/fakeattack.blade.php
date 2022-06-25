@extends('layout')
    
@section('head-content')
    <link rel="stylesheet" href="css/apichallengesStyles.css">

@endsection('head-content')

@section ('content')
    <main id="main">
        @foreach($datas as $data) 
            @foreach(array_keys($data) as $key)
                <li>{{$data[$key]}}</li>
            @endforeach
        @endforeach
    </main>
@endsection('content')