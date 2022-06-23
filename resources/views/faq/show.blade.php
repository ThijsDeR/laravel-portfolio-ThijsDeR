@extends('layout')
    
@section('head-content')
    <link rel="stylesheet" href="/css/faq/showStyles.css">
@endsection('head-content')

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
            @if(auth()->user()->admin)
                <a id="edit-btn" href="{{route('faq.edit', $faq->id)}}">Edit</a>
            @endif
        </article>

    </main>
@endsection('content')