@extends('layout')
    
@section('head-content')
    <link rel="stylesheet" href="css/faq/styles.css">
@endsection('head-content')

@section('content')
    <main id="main">
        <article>
            <ul>
                <li>Name: {{$grade->name}}</li>
                <li>Lowest Passing Grade: {{$grade->lowest_passing_grade}}</li>
                <li>Best Grade: {{$grade->best_grade}}</li>
                <li>Passed at: {{$grade->passed_at}}</li>
            </ul>
            @if(auth()->user())
                <a id="edit-btn" href="{{route('grade.edit', $grade->id)}}">Edit</a>
            @endif
        </article>
    </main>
@endsection('content')