@extends('layout')
    
@section('head-content')
    <link rel="stylesheet" href="/css/form/editStyles.css">
    <script src="/js/cancelScript.js" defer></script>
@endsection('head-content')


@section('content')
    <main id="main">
        <form id="edit" method="POST" action="{{route('quartiles.update', [$quartile])}}">
            @csrf
            @method('put')
            <div class="field">
                <label for="quartile" class="label">Quartile:</label>
                <input type="text" name="quartile" class="input" id="quartile" value="{{$quartile->quartile}}" required>
            </div>


            <div id="buttons">
                <div class="button" id="cancel">
                    <a href="{{route('quartiles.show', [$quartile])}}">Cancel</a>
                </div>
                <div class="button" id="submit">
                    <button type="submit">Submit</button>
                </div>
            </div>
        </form>

        <form id="delete" method="POST" action="{{route('quartiles.destroy', [$quartile])}}">
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