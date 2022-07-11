@extends('layout')
    
@section('head-content')
    <link rel="stylesheet" href="/css/dashboard/showStyles.css">
@endsection('head-content')

@section('content')
    <main id="main">
        <div id="show-all"> 
            <a href="{{route('reviews.index')}}">Show All</a>
        </div>
        <article>
            <div class="header">
                <h2>
                    Reviewer Name: {{$review->reviewer_name}} ({{$review->stars}} stars)
                </h2>
            </div>
            <br />
            <div class="text">
                <ul>
                    <li>Reviewer Name: {{$review->reviewer_name}}</li>
                    <li>
                        Text:
                        <p>
                            {{$review->review}}
                        </p>
                    </li>
                    <li>Stars: {{$review->stars}}</li>
                    <li>Created At: {{$ec->created_at}}</li>
                    <li>Updated At: {{$ec->updated_at}}</li>
                </ul>

            </div>
        </article>
    </main>
@endsection('content')