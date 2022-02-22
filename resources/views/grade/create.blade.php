@extends('layout')
    
@section('head-content')
    <link rel="stylesheet" href="/css/faq/createStyles.css">
@endsection('head-content')

@section('content')
    <main id="main">
        <form method="POST" action="{{route('grade.index')}}">
            @csrf
            <div class="field">
                <label for="course_name" class="label">Course Name:</label>
                <input type="text" name="course_name" class="input" id="course_name" required>
            </div>

            <div class="field">
                <label for="test_name" class="label">Test Name:</label>
                <input type="text" name="test_name" class="input" id="test_name">
            </div>

            <div class="field">
                <label for="lowest_passing_grade" class="label">Lowest Passing Grade:</label>
                <input class="textarea" name="lowest_passing_grade" id="lowest_passing_grade" cols="30" rows="10" required>
            </div>

            <div class="field">
                <label for="best_grade" class="label">Best Grade:</label>
                <input class="textarea" name="best_grade" id="best_grade" cols="30" rows="10" required>
            </div>

            <div id="buttons">
                <div class="button" id="cancel">
                    <a href="{{route('faq.index')}}">Cancel</a>
                </div>
                <div class="button" id="submit">
                    <button type="submit">Submit</button>
                </div>
            </div>
            
        </form>
    </main>
@endsection('content')