@extends('layout')
    
@section('head-content')
    <link rel="stylesheet" href="/css/form/editStyles.css">
    <script src="/js/cancelScript.js" defer></script>
@endsection('head-content')


@section('content')
    <main id="main">
        <form id="edit" method="POST" action="{{route('ecs.update', [$quartile, $course, $ec])}}">
            @csrf
            @method('put')
            <div class="field">
                <label for="ec" class="label">Ec:</label>
                <input type="text" name="ec" class="ec" id="ec" value="{{$ec->ec}}" required>
            </div>


            <div id="buttons">
                <div class="button" id="cancel">
                    <a href="{{route('ecs.show', [$quartile, $course, $ec])}}">Cancel</a>
                </div>
                <div class="button" id="submit">
                    <button type="submit">Submit</button>
                </div>
            </div>
        </form>

        <form id="delete" method="POST" action="{{route('ecs.destroy', [$quartile, $course, $ec])}}">
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