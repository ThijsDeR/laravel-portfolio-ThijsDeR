@extends('layout')
    
@section('head-content')
    <link rel="stylesheet" href="/css/form/createStyles.css">
    <script src="/js/createfaqScript.js" defer></script>
@endsection('head-content')

@section('content')
    <main id="main">
        <form method="POST" action="{{route('faq.index')}}">
            @csrf
            <div class="field">
                <label for="question" class="label">Question:</label>
                <input type="text" name="question" class="input" id="question" required>
            </div>

            <div class="field">
                <label for="link" class="label">Link:</label>
                <input type="text" name="link" class="input" id="link">
            </div>

            <div class="field">
                <label for="body" class="label">body:</label>
                <textarea class="textarea" name="body" id="body" cols="30" rows="10" required></textarea>
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