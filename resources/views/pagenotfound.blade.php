<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title; }}</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/pagenotfoundStyles.css">
    <link rel="stylesheet" href="css/navStyles.css">
    <script src="js/pagenotfoundScript.js" defer></script>
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
        <div id="notfound">
            <div id="page-info">
                <h2>{{ $title; }}</h2>
                <p>is not a known page</p>
            </div>
            <img src="img/pagenotfound/404_not_found.svg" alt="">
        </div>
    </main>
</body>

</html>