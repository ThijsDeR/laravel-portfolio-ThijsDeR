@extends('layout')
    
@section('head-content')
    <link rel="stylesheet" href="css/dashboard/indexStyles.css">
    <script src="js/closeScript.js" defer></script>
@endsection('head-content')

@section('content')
    <main id="main">
        <div id="close-all">
            <p onclick="closeAll()">Close All</p>
        </div>

        @foreach($courses as $course)
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
                <a class="show-btn" href="{{route('courses.show', [$quartile, $course])}}">Show</a>

            </article>
        @endforeach
        @if(auth()->user()->admin)
            <div id="create">
                <div id="create-button">
                    <a href="{{route('courses.create', [$quartile])}}">+</a>
                </div>
            </div>
        @endif
        
    </main>
@endsection('content')