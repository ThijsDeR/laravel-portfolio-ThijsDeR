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

        @foreach($ecs as $ec)
            <article>
                <div class="header">
                    <h2>
                        Ec: {{$ec->id}}
                    </h2>
                    <p class="open-btn" onclick="activeState(event)">v</p>
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
                <a class="show-btn" href="{{route('ecs.show', [$quartile, $course, $ec])}}">Show</a>

            </article>
        @endforeach
        @if(auth()->user())
            <div id="create">
                <div id="create-button">
                    <a href="{{route('ecs.create', [$quartile, $course])}}">+</a>
                </div>
            </div>
        @endif
        
    </main>
@endsection('content')