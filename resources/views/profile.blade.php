<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title; }}</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/profileStyles.css">
    <link rel="stylesheet" href="css/navStyles.css">
    <script src="js/profileScript.js" defer></script>
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
        <div id="links">
            <p onclick="toggleLinks(event)">&gt;</p>
            <ul id="links-list">
                <li class="ik"><a onclick="scrollToElement('ik')">Wie ben ik?</a></li>
                <li class="woonplaats"><a onclick="scrollToElement('woonplaats')">Woonplaats</a></li>
                <li class="hobbies"><a onclick="scrollToElement('hobbies')">Hobbies</a></li>
                <li class="werk"><a onclick="scrollToElement('werk')">Werk</a></li>
            </ul>
        </div>
        <div id="section" class="active">
            <article>
                <h2 id="ik">Wie ben ik?</h2>
                <div id="ik-div">
                    <p>
                        Ik ben Thijs, 16 jaar oud en ik heb mijn examens voor havo succesvol
                        afgerond. Daar heb ik het profiel natuur en techniek gevolgd, omdat
                        ik me daar het meeste tot aangetrokken voelde sinds geschiedenis en
                        aardrijkskunde voor mij totaal geen interessepunten waren.
                    </p>
                    <img id="profile-photo" src="img/profile/profiel_photo.png" alt="Profile Photo">
                </div>
                <h2 id="woonplaats">Waar woon ik?</h2>
                <p>
                    Ik woon in Schoondijke met beide gescheiden ouders. Een beetje een
                    dood dorpje, maar dat is niet erg, want ik hou wel van stilte. Daarvoor
                    heb ik in verschillende dorpen gewoond door de scheiding, zoals in
                    Aardenburg, Sluis, Breskens en Sint laureins.
                    <br />
                    <br />
                </p>
                <h2 id="hobbies">Wat zijn mijn hobbies?</h2>
                <p>Mijn hobbies zijn onder andere:</p>
                <div id="hobbiesdiv">
                    <ul>
                        <li id="games">
                            Gamen
                            <ul id="games-list">
                                <li>Rocket league</li>
                                <li>Dead by Daylight</li>
                                <li>Counter Strike: Global Offensive</li>
                            </ul>
                        </li>
                        <li id="coding">
                            Programmeren
                            <ul id="coding-list">
                                <li>Websites</li>
                                <li>Games (unity)</li>
                                <li>Discord Bots</li>
                            </ul>
                        </li>
                        <li id="other">
                            Other
                            <ul id="other-list">
                                <li>Hamburgers eten</li>
                                <li>Tennissen</li>
                                <li>Volleyballen</li>
                                <li>Tafeltennissen</li>
                            </ul>
                        </li>
                    </ul>
                    <div class="images">
                        <img src="img/profile/DBD.png" alt="Dead By Daylight Trapper" />
                        <img src="img/profile/Programming.png" alt="Programming Computer" />
                        <img src="img/profile/Hamburger.png" alt="Hamburger" />
                    </div>
                </div>
                <h2 id="werk">Waar werk ik?</h2>
                <p>
                    Ik werk als vakkenvuller bij de Jumbo, tegenwoordig ook als kassamedewerker.
                    Ik probeer af en toe eens wat nieuws uit te proberen
                    zodat het niet te saai wordt daar. Daarvoor heb ik bij een partycentrum
                    naast mijn deur gewerkt (nee, geen festivals of wat dan ook,
                    maar een plek waar je feestjes voor oude zakken kan organiseren).
                </p>
            </article>
        </div>
    </main>

</body>

</html>