@extends('layout')
    
@section('head-content')
    
@endsection('head-content')

@section('content')
    <main id="main">
        @foreach($grades as $grade)
            <article>
                <ul>
                    <li>Course Name: {{$grade->course_name}}</li>
                    <li>Test Name: {{$grade->test_name}}</li>
                    <li>Lowest Passing Grade: {{$grade->lowest_passing_grade}}</li>
                    <li>Best Grade: {{$grade->best_grade}}</li>
                    <li>Passed at: {{$grade->passed_at}}</li>
                </ul>
                <a class="show-btn" href="{{route('grade.show', $grade->id)}}">Show</a>

            </article>
        @endforeach

        <div id="create-grade">
            <div id="create-grade-button">
                <a href="{{route('grade.create')}}">+</a>
            </div>
        </div>
        
    </main>
@endsection('content')