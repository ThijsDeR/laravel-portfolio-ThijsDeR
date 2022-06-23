@extends('layout')
    
@section('head-content')
    <link rel="stylesheet" href="/css/dashboard/showStyles.css">
@endsection('head-content')

@section('content')
    <main id="main">
        <article>
            <div class="header">
                <h2>
                    Course: {{$course->id}}
                </h2>
                <p class="open-btn" onclick="activeState(event)">v</p>
            </div>
            <br />
            <div class="text">
                <ul>
                    <li>Name: {{$course->name}}</li>
                    <li>Created At: {{$course->created_at}}</li>
                    <li>Updated At: {{$course->updated_at}}</li>
                </ul>

                <a href="{{route('ecs.index', [$quartile, $course])}}">Show Ecs</a>
            </div>
            @if(auth()->user()->admin)
                <a href="{{route('courses.edit', [$quartile, $course])}}">Edit Course</a>
            @endif
        </article>
    </main>
@endsection('content')