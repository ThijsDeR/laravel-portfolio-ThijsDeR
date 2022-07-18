<nav>
    <h2 id="title" onclick="scrollToTop('main')">{{ $title ?? 'Home'; }}</h2>
    <div id="nav">
        <ul id="nav-list">
            <li class="nav-option {{ Request::path() === '/' || Request::path() === 'home' ? 'active' : ''}}"><a href="home">Home</a></li>
            <li class="nav-option {{ Request::path() === 'profile' ? 'active' : ''}}"><a href="profile">Profile</a></li>
            <li class="nav-option {{ Request::path() === 'dashboard' ? 'active' : ''}}"><a href="dashboard">Dashboard</a></li>
            <li class="nav-option {{ Request::path() === 'faq' ? 'active' : ''}}"><a href="faq">FAQ</a></li>
            <li id="other-option">
                <div class="dropdown">
                    <p class="dropBtn">Other</p>
                    <div class="dropdown-content" id="navDrop">
                        <a href="{{route('blog')}}">Blog</a>
                        <a href="{{route('portfolio.index')}}">Portfolio</a>
                        <!-- <a href="{{route('reviews.index')}}">Reviews</a> -->
                        @if (auth()->user())
                            <a href="{{route('apichallenges')}}">Api Challenges</a>
                        @endif
                    </div>
                </div>
            </li>
            <li class="nav-option other {{ Request::path() === 'faq' ? 'active' : ''}}"><a href="faq">Blog</a></li>
            <li class="nav-option other {{ Request::path() === 'faq' ? 'active' : ''}}"><a href="faq">Portfolio</a></li>
            <!-- <li class="nav-option other {{ Request::path() === 'faq' ? 'active' : ''}}"><a href="faq">Reviews</a></li> -->
            @if (auth()->user())
                <li class="nav-option other {{ Request::path() === 'faq' ? 'active' : ''}}"><a href="faq">Api Challenges</a></li>
                <li class="nav-option {{ Request::path() === 'userpage' ? 'active' : ''}}"><a href="userpage">{{auth()->user()->username}}</a></li>
            @else
                <li class="nav-option {{ Request::path() === 'login' ? 'active' : ''}}"><a href="login">Login</a></li>
            @endif
        </ul>
        <div id="burger-menu" onclick="burgerMenuToggle()">
            <div id="menu-btn" class="active"></div>
            <div id="close-btn" class=""></div>
        </div>
    </div>
</nav>