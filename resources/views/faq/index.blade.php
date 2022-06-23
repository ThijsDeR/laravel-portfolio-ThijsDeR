@extends('layout')
    
@section('head-content')
    <link rel="stylesheet" href="css/faq/styles.css">
    <script src="js/closeScript.js" defer></script>
@endsection('head-content')

@section('content')
    <main id="main">
        <div id="close-all">
            <p onclick="closeAll()">Close All</p>
        </div>

        @foreach($faqs as $faq)
            <article>
                <div class="header">
                    <h2>
                        @if ($faq->link !== null) 
                            <a href="{{ $faq->link; }}" target="_blank">
                                {{ $faq->question; }}
                            </a>
                        @else 
                            {{ $faq->question; }}
                        @endif
                    </h2>
                    <p class="open-btn" onclick="activeState(event)">v</p>
                </div>
                <br />
                <div class="text">
                    {!! $faq->body; !!}
                </div>
                <a class="show-btn" href="{{route('faq.show', $faq->id)}}">Show</a>

            </article>
        @endforeach
        @if(auth()->user()->admin)
            <div id="create-faq">
                <div id="create-faq-button">
                    <a href="{{route('faq.create')}}">+</a>
                </div>
            </div>
        @endif
        
    </main>
@endsection('content')