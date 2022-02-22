@extends('layout')
    
@section('head-content')
    
@endsection('head-content')

@section('content')
    <main id="main">
        <article>
            <ul>
                <li>Course Name: {{$grade->course_name}}</li>
                <li>Test Name: {{$grade->test_name}}</li>
                <li>Lowest Passing Grade: {{$grade->lowest_passing_grade}}</li>
                <li>Best Grade: {{$grade->best_grade}}</li>
                <li>Passed at: {{$grade->passed_at}}</li>
            </ul>
            <a id="edit-btn" href="{{route('grade.edit', $grade->id)}}">Edit</a>
        </article>
    </main>
@endsection('content')