@extends('layout')
    
@section('head-content')
    <link rel="stylesheet" href="/css/form/createStyles.css">
    <script src="/js/cancelScript.js" defer></script>
@endsection('head-content')

@section('content')
    <main id="main">
        <form method="POST" action="{{route('exams.index', [$quartile, $course, $ec])}}">
            @csrf
            <div class="field">
                <label for="name" class="label">Name:</label>
                <input type="text" name="name" class="input" id="name" required>
            </div>

            <div class="field">
                <label for="grade" class="label">Grade:</label>
                <input type="text" name="grade" class="input" id="grade" required>
            </div>

            <div id="buttons">
                <div class="button" id="cancel">
                    <a href="{{route('exams.index', [$quartile, $course, $ec])}}">Cancel</a>
                </div>
                <div class="button" id="submit">
                    <button type="submit">Submit</button>
                </div>
            </div>
            
        </form>
    </main>
@endsection('content')