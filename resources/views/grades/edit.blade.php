@extends('layout')
    
@section('head-content')
    <link rel="stylesheet" href="/css/form/editStyles.css">
@endsection('head-content')


@section('content')
    <main id="main">
        <form method="POST" action="{{route('grade.update', $grade->id)}}">
            @csrf
            @method('put')
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