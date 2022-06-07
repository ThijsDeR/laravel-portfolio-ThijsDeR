@extends('layout')
    
@section('head-content')
    <link rel="stylesheet" href="/css/form/createStyles.css">
    <script src="/js/cancelScript.js" defer></script>
@endsection('head-content')

@section('content')
    <main id="main">
        <form method="POST" action="{{route('quartiles.index')}}">
            @csrf
            <div class="field">
                <label for="quartile" class="label">quartile:</label>
                <input type="text" name="quartile" class="input" id="quartile" required>
            </div>

            <div id="buttons">
                <div class="button" id="cancel">
                    <a href="{{route('quartiles.index')}}">Cancel</a>
                </div>
                <div class="button" id="submit">
                    <button type="submit">Submit</button>
                </div>
            </div>
            
        </form>
    </main>
@endsection('content')