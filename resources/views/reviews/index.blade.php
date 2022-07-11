@extends('layout')
    
@section('head-content')
    <link rel="stylesheet" href="css/dashboard/indexStyles.css">
    <link rel="stylesheet" href="css/reviewStyles.css">
    <script src="js/closeScript.js" defer></script>
    <script src="js/starScript.js" defer></script>
@endsection('head-content')

@section('content')
    <main id="main">
        <article>
            <form method="POST" action="{{route('reviews.store')}}">
                @csrf
                <div class="field">
                    <label for="reviewer_name" class="label">Naam</label>
                    <input type="text" name="reviewer_name" class="reviewer_name" id="reviewer_name">
                </div>
                
                
                <div class="field">
                    <label for="review" class="label">Review <span class="required">*</span></label>
                    <textarea type="text" name="review" class="sreview" id="review" required></textarea>
                </div>
                
                
                <div class="field">
                    <label for="stars" class="label">Sterren <span class="required">*</span></label>
                    <input type="range" min="2" max="10" value="6" name="stars" class="stars slider" id="stars" required style="width: 20%">
                    <span id="star_amount"></span>
                </div>
                
                <div id="buttons">
                    <div class="button" id="submit">
                        <button type="submit">Submit</button>
                    </div>
                </div>
            </form>
        </article>
        <article>
            <div class="header">
                <h2>
                    Hoeveel sterren heb ik gekregen?
                </h2>
                <p class="open-btn active" onclick="activeState(event)">^</p>
            </div>
            <br />
            <div class="text open">
                <p>Sterren: {{$stars}} van de {{$reviewAmount}} reviews.</p>
            </div>

        </article>
        <div id="close-all">
            <p onclick="closeAll()">Close All</p>
        </div>

        @foreach($reviews as $review)
            <article>
                <div class="header">
                    <h2>
                        Reviewer: {{$review->reviewer_name}} ({{$review->stars}} stars)
                    </h2>
                    <p class="open-btn" onclick="activeState(event)">v</p>
                </div>
                <br />
                <div class="text">
                    <ul>
                        <p>Reviewer: {{$review->reviewer_name}}</p>
                        <p>
                            Review:
                            <p style="background-color: white; color: black; padding-left: 10px;">
                                {{$review->review}}
                            </p>
                        </p>
                        <p>Stars: {{$review->stars}}</p>
                        <p>Created At: {{$review->created_at}}</p>
                    </ul>

                </div>
                <a class="show-btn" href="{{route('reviews.show', $review)}}">Show</a>

            </article>
        @endforeach   
    </main>
@endsection('content')