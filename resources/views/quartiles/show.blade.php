@extends('layout')
    
@section('head-content')
    <link rel="stylesheet" href="/css/dashboard/showStyles.css">
@endsection('head-content')

@section('content')
    <main id="main">
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
            @if(auth()->user())
                @if(auth()->user()->admin)
                <a href="{{route('quartiles.edit', [$quartile])}}">Edit Quartile</a>
                @endif
            @endif
        </article>
    </main>
@endsection('content')