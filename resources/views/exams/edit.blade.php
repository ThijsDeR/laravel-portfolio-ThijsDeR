@extends('layout')
    
@section('head-content')
    <link rel="stylesheet" href="/css/form/editStyles.css">
    <script src="/js/cancelScript.js" defer></script>
@endsection('head-content')


@section('content')
    <main id="main">
        <form id="edit" method="POST" action="{{route('exams.update', [$quartile, $course, $ec, $exam])}}">
            @csrf
            @method('put')
            <div class="field">
                <label for="name" class="label">name:</label>
                <input type="text" name="name" class="name" id="name" value="{{$exam->name}}" required>
            </div>

            <div class="field">
                <label for="grade" class="label">grade:</label>
                <input type="text" name="grade" class="grade" id="grade" value="{{$exam->grade}}" required>
            </div>


            <div id="buttons">
                <div class="button" id="cancel">
                    <a href="{{route('exams.show', [$quartile, $course, $ec, $exam])}}">Cancel</a>
                </div>
                <div class="button" id="submit">
                    <button type="submit">Submit</button>
                </div>
            </div>
        </form>

        <form id="delete" method="POST" action="{{route('exams.destroy', [$quartile, $course, $ec, $exam])}}">
            @csrf
            @method('DELETE')
            <div id="buttons">
                <div class="button" id="delete">
                    <button type="submit">Delete</button>
                </div>
            </div>
        </form>
    </main>
@endsection('content')