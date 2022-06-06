@extends('layout')
    
@section('head-content')
    <link rel="stylesheet" href="/css/form/createStyles.css">
@endsection('head-content')

@section('content')
    <main id="main">
        <form method="POST" action="{{route('course.index')}}">
            @csrf
            <div class="field">
                <label for="name" class="label">Name:</label>
                <input type="text" name="name" class="input" id="name" required>
            </div>

            <div class="field">
                <label for="quartile" class="label">Quartile:</label>
                <input type="text" name="quartile" class="input" id="quartile" required>
            </div>

            <div class="field">
                <label for="ec" class="label">Ec:</label>
                <input type="text" name="ec" class="input" id="ec" required>
            </div>

            <div id="buttons">
                <div class="button" id="cancel">
                    <a href="{{route('course.index')}}">Cancel</a>
                </div>
                <div class="button" id="submit">
                    <button type="submit">Submit</button>
                </div>
            </div>
            
        </form>
    </main>
@endsection('content')