<nav>
    <h2 id="title" onclick="scrollToTop('main')">{{ $title; }}</h2>
    <div id="nav">
        <ul id="nav-list">
            <li class="{{ Request::path() === '/' || Request::path() === 'home' ? 'active' : ''}}"><a href="home">Home</a></li>
            <li class="{{ Request::path() === 'profile' ? 'active' : ''}}"><a href="profile">Profile</a></li>
            <li class="{{ Request::path() === 'dashboard' ? 'active' : ''}}"><a href="dashboard">Dashboard</a></li>
            <li class="{{ Request::path() === 'faq' ? 'active' : ''}}"><a href="faq">FAQ</a></li>
            <li class="{{ Request::path() === 'blog' ? 'active' : ''}}"><a href="blog">Blog</a></li>
        </ul>
        <div id="burger-menu" onclick="burgerMenuToggle()">
            <div id="menu-btn" class="active"></div>
            <div id="close-btn" class=""></div>
        </div>
    </div>
</nav>