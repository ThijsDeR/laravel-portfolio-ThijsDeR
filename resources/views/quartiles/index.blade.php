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

        @foreach($quartiles as $quartile)
            <article>
                <div class="header">
                    <h2>
                        Quartile: {{$quartile->quartile}}
                    </h2>
                    <p class="open-btn" onclick="activeState(event)">v</p>
                </div>
                <br />
                <div class="text">
                    <ul>
                        <li>Created At: {{$quartile->created_at}}</li>
                        <li>Updated At: {{$quartile->updated_at}}</li>
                    </ul>

                    <a href="{{route('courses.index', [$quartile])}}">Show Courses</a>
                </div>
                <a class="show-btn" href="{{route('quartiles.show', [$quartile])}}">Show</a>

            </article>
        @endforeach
        @if(auth()->user()->admin)
            <div id="create">
                <div id="create-button">
                    <a href="{{route('quartiles.create')}}">+</a>
                </div>
            </div>
        @endif
        
    </main>
@endsection('content')