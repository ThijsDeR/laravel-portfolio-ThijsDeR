@extends('layout')
    
@section('head-content')
    <link rel="stylesheet" href="/css/form/createStyles.css">
@endsection('head-content')

@section('content')
    <main id="main">
        <form method="POST" action="{{route('grade.index')}}">
            @csrf
            <div class="field">
                <label for="name" class="label">Name:</label>
                <input type="text" name="name" class="input" id="name">
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