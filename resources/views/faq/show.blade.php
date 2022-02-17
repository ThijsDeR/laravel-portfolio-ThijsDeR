@extends('layout')
    
@section('head-content')
    <link rel="stylesheet" href="/css/faq/showStyles.css">

@section('content')
    <main id="main">
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
            </div>
            <br />
            <div class="text">
                {!! $faq->body; !!}
            </div>
            <a id="edit-btn" href="./faq/{{$faq->id}}/edit">Edit</a>
        </article>

    </main>