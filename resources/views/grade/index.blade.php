@extends('layout')
    
@section('head-content')
    <link rel="stylesheet" href="css/faq/styles.css">
@endsection('head-content')

@section('content')
    <main id="main">
        @foreach($grades as $grade)
            <article>
                <ul>
                    <li>Name: {{$grade->name}}</li>
                    <li>Lowest Passing Grade: {{$grade->lowest_passing_grade}}</li>
                    <li>Best Grade: {{$grade->best_grade}}</li>
                    <li>Passed at: {{$grade->passed_at}}</li>
                </ul>
                <a class="show-btn open" href="{{route('grade.show', $grade->id)}}">Show</a>

            </article>
        @endforeach

        <div id="create-grade">
            <div id="create-grade-button">
                <a href="{{route('grade.create')}}">+</a>
            </div>
        </div>
        
    </main>
@endsection('content')