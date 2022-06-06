@extends('layout')
    
@section('head-content')
    <link rel="stylesheet" href="css/faq/styles.css">
@endsection('head-content')

@section('content')
    <main id="main">
        @foreach($courses as $course)
            <article>
                <ul>
                    <li>Course Name: {{$course->name}}</li>
                    <li>Quartile: {{$course->quartile}}</li>
                    <li>Ec: {{$course->ec}}</li>
                </ul>
                <a class="show-btn open" href="{{route('course.show', $course->id)}}">Show</a>
            </article>
        @endforeach

        <div id="create-course">
            <div id="create-course-button">
                <a href="{{route('course.create')}}">+</a>
            </div>
        </div>
        
    </main>
@endsection('content')