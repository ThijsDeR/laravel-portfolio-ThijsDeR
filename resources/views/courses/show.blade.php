@extends('layout')
    
@section('head-content')
    <link rel="stylesheet" href="/css/dashboard/showStyles.css">
@endsection('head-content')

@section('content')
    <main id="main">
        <div id="show-all">
            <a href="{{route('courses.index', [$quartile])}}">Show All</a>
        </div>

        <article>
            <div class="header">
                <h2>
                    Course: {{$course->id}}
                </h2>
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
            @if(auth()->user())
                @if(auth()->user()->admin)
                <a href="{{route('courses.edit', [$quartile, $course])}}">Edit Course</a>
                @endif
            @endif
        </article>
    </main>
@endsection('content')