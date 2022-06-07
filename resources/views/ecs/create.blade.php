@extends('layout')
    
@section('head-content')
    <link rel="stylesheet" href="/css/form/createStyles.css">
    <script src="/js/cancelScript.js" defer></script>
@endsection('head-content')

@section('content')
    <main id="main">
        <form method="POST" action="{{route('ecs.index', [$quartile, $course])}}">
            @csrf
            <div class="field">
                <label for="ec" class="label">Ec:</label>
                <input type="text" name="ec" class="input" id="ec" required>
            </div>

            <div id="buttons">
                <div class="button" id="cancel">
                    <a href="{{route('ecs.index', [$quartile, $course])}}">Cancel</a>
                </div>
                <div class="button" id="submit">
                    <button type="submit">Submit</button>
                </div>
            </div>
            
        </form>
    </main>
@endsection('content')