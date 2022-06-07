@extends('layout')
    
@section('head-content')
    <link rel="stylesheet" href="/css/form/editStyles.css">
    <script src="/js/cancelScript.js" defer></script>
@endsection('head-content')


@section('content')
    <main id="main">
        <form id="edit" method="POST" action="{{route('courses.update', [$quartile, $course])}}">
            @csrf
            @method('put')
            <div class="field">
                <label for="name" class="label">Name:</label>
                <input type="text" name="name" class="input" id="name" value="{{$course->name}}" required>
            </div>


            <div id="buttons">
                <div class="button" id="cancel">
                    <a href="{{route('courses.show', [$quartile, $course])}}">Cancel</a>
                </div>
                <div class="button" id="submit">
                    <button type="submit">Submit</button>
                </div>
            </div>
        </form>

        <form id="delete" method="POST" action="{{route('courses.destroy', [$quartile, $course])}}">
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