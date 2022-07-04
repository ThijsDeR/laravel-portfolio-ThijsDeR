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

        @foreach($exams as $exam)
            <article>
                <div class="header">
                    <h2>
                        Exam: {{$exam->id}}
                    </h2>
                    <p class="open-btn" onclick="activeState(event)">v</p>
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
                <a class="show-btn" href="{{route('exams.show', [$quartile, $course, $ec, $exam])}}">Show</a>

            </article>
        @endforeach
        @if(auth()->user())
            @if(auth()->user()->admin)
                <div id="create">
                    <div id="create-button">
                        <a href="{{route('exams.create', [$quartile, $course, $ec])}}">+</a>
                    </div>
                </div>
            @endif
        @endif
        
    </main>
@endsection('content')