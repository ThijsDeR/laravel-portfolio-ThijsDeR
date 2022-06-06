@extends('layout')
    
@section('head-content')
    <link rel="stylesheet" href="css/faq/styles.css">
@endsection('head-content')

@section('content')
    <main id="main">
        <article>
        <ul>
                    <li>Course Name: {{$course->name}}</li>
                    <li>Quartile: {{$course->quartile}}</li>
                    <li>Ec: {{$course->ec}}</li>
                </ul>
            <a id="edit-btn" href="{{route('course.edit', $course->id)}}">Edit</a>
        </article>
    </main>
@endsection('content')