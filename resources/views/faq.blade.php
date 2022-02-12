<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title; }}</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/faqStyles.css">
    <link rel="stylesheet" href="css/navStyles.css">
    <script src="js/faqScript.js" defer></script>
    <script src="js/navScript.js" defer></script>
</head>

<body>
    <nav>
        <h2 id="title" onclick="scrollToTop('main')">{{ $title; }}</h2>
        <div id="nav">
            <ul id="nav-list">
                <li><a href="home">Home</a></li>
                <li><a href="profile">Profile</a></li>
                <li><a href="dashboard">Dashboard</a></li>
                <li><a href="faq">FAQ</a></li>
                <li><a href="blog">Blog</a></li>
            </ul>
            <div id="burger-menu" onclick="burgerMenuToggle()">
                <div id="menu-btn" class="active"></div>
                <div id="close-btn" class=""></div>
            </div>
        </div>
    </nav>
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
</body>

</html>