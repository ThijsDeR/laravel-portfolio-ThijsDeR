@extends('layout')
    
@section ('head-content')
    <link rel="stylesheet" href="css/profileStyles.css">
    <link rel="stylesheet" href="css/general/sideLinkStyles.css">
    <script src="js/profileScript.js" defer></script>
@endsection('head-content')

@section ('content')
    <main id="main">
        <div id="links">
            <p onclick="toggleLinks(event)">&gt;</p>
            <ul id="links-list">
                <li class="ik"><a onclick="scrollToElement('ik')">Wie ben ik?</a></li>
                <li class="woonplaats"><a onclick="scrollToElement('woonplaats')">Woonplaats</a></li>
                <li class="hobbies"><a onclick="scrollToElement('hobbies')">Hobbies</a></li>
                <li class="werk"><a onclick="scrollToElement('werk')">Werk</a></li>
                <li class="werk"><a onclick="scrollToElement('opdrachten')">Wat heb ik al gedaan?</a></li>
                <li class="werk"><a onclick="scrollToElement('review')">Review</a></li>
            </ul>
        </div>
        <div id="section" class="active">
            <article>
                <h2 id="ik">Wie ben ik?</h2>
                <div id="ik-div">
                    <p>
                        Ik ben Thijs, 17 jaar oud en ik heb mijn examens voor havo succesvol
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
                    Ik werk als Software Engineer Bij <a href="https://www.epesi.nl/">Epesi</a> (Middelburg) sinds Januari 2022. Daarvoor heb ik bij de jumbo en een partycentrum
                    naast mijn deur gewerkt (nee, geen festivals of wat dan ook,
                    maar een plek waar je feestjes voor oude zakken kan organiseren).
                </p>
                <h2 id="opdrachten">Wat heb ik al gedaan?</h2>
                <p>
                    In mijn "Carriere" als Programmeur heb ik al redelijk wat gedaan. Een deel daar van is dus ook te zien online!
                    Check wat precies <a href="{{route('portfolio.index')}}">Hier</a>.
                </p>
            </article>
                
        </div>
    </main>
@endsection('content')