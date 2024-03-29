@extends('layout')
    
@section('head-content')
    <link rel="stylesheet" href="/css/dashboard/showStyles.css">
@endsection('head-content')

@section('content')
    <main id="main">
        <div id="show-all">
            <a href="{{route('ecs.index', [$quartile, $course])}}">Show All</a>
        </div>

        <article>
            <div class="header">
                <h2>
                    Ec: {{$ec->id}}
                </h2>
            </div>
            <br />
            <div class="text">
                <ul>
                    <li>Ec: {{$ec->ec}}</li>
                    <li>Created At: {{$ec->created_at}}</li>
                    <li>Updated At: {{$ec->updated_at}}</li>
                </ul>

                <a href="{{route('exams.index', [$quartile, $course, $ec])}}">Show Exams</a>
            </div>
            @if(auth()->user())
                @if(auth()->user()->admin)
                <a href="{{route('ecs.edit', [$quartile, $course, $ec])}}">Edit Ec</a>
                @endif
            @endif
        </article>
    </main>
@endsection('content')