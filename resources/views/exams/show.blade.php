@extends('layout')
    
@section('head-content')
    <link rel="stylesheet" href="/css/dashboard/showStyles.css">
@endsection('head-content')

@section('content')
    <main id="main">
        <div id="show-all">
            <a href="{{route('exams.index', [$quartile, $course, $ec])}}">Show All</a>
        </div>

        <article>
            <div class="header">
                <h2>
                    Exam: {{$exam->id}}
                </h2>
            </div>
            <br />
            <div class="text">
                <ul>
                    <li>Name: {{$exam->name}}</li>
                    <li>Grade: {{$exam->grade}}</li>
                    <li>Created At: {{$exam->created_at}}</li>
                    <li>Updated At: {{$exam->updated_at}}</li>
                </ul>

            </div>
            @if(auth()->user())
                @if(auth()->user()->admin)
                    <a href="{{route('exams.edit', [$quartile, $course, $ec, $exam])}}">Edit Exam</a>
                @endif
            @endif
        </article>
    </main>
@endsection('content')