@extends('layout')
    
@section('head-content')
    <link rel="stylesheet" href="/css/faq/editStyles.css">
@endsection('head-content')


@section('content')
    <main id="main">
        <form method="POST" action="{{route('grade.update', $grade->id)}}">
            @csrf
            @method('put')
            <!-- <div class="field">
                <label for="course_name" class="label">Course Name:</label>
                <input type="text" name="course_name" class="input" id="course_name" value="{{$grade->course_name}}" required>
            </div>

            <div class="field">
                <label for="test_name" class="label">Test Name:</label>
                <input type="text" name="test_name" class="input" id="test_name" value="{{$grade->test_name}}" required>
            </div>

            <div class="field">
                <label for="lowest_passing_grade" class="label">Lowest Passing Grade:</label>
                <input class="input" name="lowest_passing_grade" id="lowest_passing_grade" value="{{$grade->lowest_passing_grade}}">
            </div> -->

            <div class="field">
                <label for="best_grade" class="label">Best Grade:</label>
                <input class="textarea" name="best_grade" id="best_grade" value="{{$grade->best_grade}}">
            </div>

            <div id="buttons">
                <div class="button" id="cancel">
                    <a href="{{route('grade.show', $grade->id)}}">Cancel</a>
                </div>
                <div class="button" id="submit">
                    <button type="submit">Submit</button>
                </div>
            </div>
            
        </form>
    </main>
@endsection('content')