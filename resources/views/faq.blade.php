@extends('layout')
    
@section('head-content')
    <link rel="stylesheet" href="css/faqStyles.css">
    <script src="js/faqScript.js" defer></script>

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
            </article>
        @endforeach
        
    </main>