<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title; }}</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/blogStyles.css">
    <link rel="stylesheet" href="css/navStyles.css">
    <script src="js/blogScript.js" defer></script>
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
        <article id="study">
            <div class="header">
                <h2>My Study Choice</h2>
                <p class="open-btn" onclick="activeState(event)">v</p>
            </div>
            <div class="text">
                <div>
                    <p>
                        Study Choice Activities: "Ik heb eerdere webinars teruggekeken,
                        online open dag bezocht en de online studiekeuzetour bezocht. Bij
                        studiekeuzetests kwam ik uit op interesses voor technische studies
                        zoals ICT."
                        <br />
                        Motivation: "probleemoplossend programmeren met opdrachten en
                        projecten. Hier wilde ik graag op verder bouwen en dit leek mij de
                        perfecte opleiding, mede door de perfecte ligging; goede
                        inlichtingen; persoonlijke contacten in de opleiding."
                        <br />
                        After The Study: "Ik zou graag een carriere in Software Engineering
                        willen beginnen. Ik hoop dan voldoende kennis te bezitten over het
                        programmeren en het werken in een team- en bedrijfsverband."
                    </p>
                </div>
                <img src="img/blog/StudyChoice.png" alt="Studie Keuze richtingen">
            </div>

        </article>
        <article id="swot">
            <div class="header">
                <h2>My SWOT-Analysation</h2>
                <p class="open-btn" onclick="activeState(event)">v</p>
            </div>
            <div class="text">
                <div>
                    <ul>
                        <li>
                            Strenghts: Ik heb veel motivatie voor dingen waar ik
                            geinteresseerd in ben. In dit geval ICT. Ik zoek graag naar hoe
                            iets werkt. Ik kom altijd op tijd en leef graag regels na.
                        </li>
                        <li>
                            Weaknesses: Niet goed leren voor een toets, te lui zijn voor
                            huiswerk en geen motivatie voor dingen die er voor mij niet toe
                            doen.
                        </li>
                        <li>
                            Opportunities: Om meer te leren over ICT, mensen leren kennen,
                            ervaring opdoen en een startersbaan uit de afstudeerstage te
                            krijgen.
                        </li>
                        <li>
                            Threats: Minder ervaren in het zelfstandig werken door de jonge
                            leeftijd. Onvolwassen gedrag tegenover studie.
                        </li>
                    </ul>
                </div>
                <img src="img/blog/Swot.png" alt="Swot analyse">
            </div>

        </article>
        <article id="code-exp">
            <div class="header">
                <h2>My Programming Experience</h2>
                <p class="open-btn" onclick="activeState(event)">v</p>
            </div>
            <div class="text">
                <div>
                    <p>
                        Ik heb al redelijk wat geprogrammeerd in mijn middelbare school
                        periode, hierdoor heb ik al een redelijk grote voorsprong op de rest
                        van mijn klas. Ik begon met de simpele python print("Hello World")
                        zoals beschreven op de homepagina. Mezelf begeleidend met YouTube
                        tutorials van uren lang heb ik mezelf door de eerste stof geworsteld
                        terwijl ik zelf actief meedeed. Vervolgens proberen zelf iets
                        creatiefs in elkaar te zetten wat ik net had geleerd, en er dingen
                        mee uit te proberen. Toen ik door die eerste fase heen was, begon ik
                        met html, css en JavaScript. Na steeds verder uit te breiden op mijn
                        kennis, en andere dingen die beschikbaar waren uitgeprobeerd, ben ik
                        nu uiteindelijk hier beland waar ik hoop mijn kennis nog meer te
                        verbreden.
                    </p>
                </div>
                <img src="img/blog/Programming.png" alt="Programming computer">
            </div>
        </article>
        <article id="feedback">
            <div class="header">
                <h2>My First Feedback</h2>
                <p class="open-btn" onclick="activeState(event)">v</p>
            </div>
            <div class="text">
                <div>
                    <p>
                        "Dank voor het invullen van het formulier. Mooie swot analyse heb je
                        gemaakt. Je woont ook op een mooie plek! Wat we soms wel meekrijgen
                        van studenten uit je gemeente is dat de reistijd wel wat vermoeiend
                        kan zijn naar de HZ toe. als dat iedere dag moet Gelukkig is het
                        vooralsnog goed te combineren met thuis studeren maar wanneer je in
                        projecten werkt misschien goed om rekening mee te houden voor jezelf
                        en afspraken over te maken met je team. Goed te lezen dat je al
                        ervaring hebt met programmeren in projecten. Je zult bij ons meteen
                        zeflstandig moeten werken en plannen en er zullen ook echt wel
                        onderdelen zijn waar je je minder voor interesseert maar je gaat dat
                        vanzelf ervaren. " ~ Daphne Heertjes 2021
                    </p>
                    <br />
                    <p>
                        Ik was het hier best mee eens, ik woon inderdaad best ver weg, maar
                        veel kan je er niet aan doen. Met mijn programmeerervaring ben ik
                        best wel blij sinds ik nu een voorsprong heb.
                    </p>
                </div>
                <img src="img/blog/Feedback.png" alt="Feedback">
            </div>
        </article>
        <article id="ict-work">
            <div class="header">
                <h2>ICT Field Of Work</h2>
                <p class="open-btn" onclick="activeState(event)">v</p>
            </div>
            <div class="text">
                <div>
                    <p>
                        Een ICT'ers werkveld is oneindig groot, er is altijd wel een plek
                        waar ICT van toepassing kan komen. Dit kan gaan van nieuwe hardware
                        voor een supermarkt, tot nieuwe software voor de deltawerken. Dit
                        is een van de redenen waarom ik ICT'er zo'n fijne baan vindt, omdat
                        er overal wel plek is voor ICT werk. Daarnaast door de
                        technologische advancements van deze tijd, zal er later veel
                        technologische kennis nodig zijn. Van de 3 richtingen die je kan op
                        gaan in de studie/werkgebieden, heb ik al een voorkeur voor Software
                        Engineer.
                    </p>
                </div>
                <img src="img/blog/Ict.png" alt="ICT">
            </div>
        </article>
        <article id="profession">
            <div class="header">
                <h2>Profession</h2>
                <p class="open-btn" onclick="activeState(event)">v</p>
            </div>
            <div class="text">
                <div>
                    <table>
                        <tr>
                            <th>Company</th>
                            <th>Type</th>
                            <th>Roles</th>
                            <th>Technologies</th>
                            <th>Pros / Cons</th>
                        </tr>

                        <tr>
                            <td>Google</td>
                            <td>Search Engine</td>
                            <td>Software Engineer; Technical Program Manager; Data Scientist; etc...</td>
                            <td>AI; Robotics, Quantum Computing; Cloud Computing</td>
                            <td>
                                <ul class="pros">
                                    <li> Grote invloed</li>
                                    <li> Groei potentieel</li>
                                    <li> Goed salaris</li>
                                    <li> Company benefits</li>
                                    <li> Flexibiliteit in locaties</li>
                                    <li> Stage mogelijkheid</li>
                                </ul>
                                <ul class="cons">
                                    <li> Hoge instap ervaring</li>
                                    <li> Streng beleid</li>
                                    <li> Minder persoonlijk</li>
                                </ul>
                            </td>
                        </tr>

                        <tr>
                            <td>Guerrilla</td>
                            <td>Game Industrie</td>
                            <td>Software Engineer; Autdors; Animators; Producers</td>
                            <td>Motionbuilder; Various Programming languages; Unreal; and more</td>
                            <td>
                                <ul class="pros">
                                    <li> Game interesse</li>
                                    <li> Kleiner bedrijf</li>
                                    <li> Gelijke hierarchie</li>
                                    <li> Stage mogelijkheid</li>
                                </ul>
                                <ul class="cons">
                                    <li> Hoge instap ervaring</li>
                                </ul>
                            </td>
                        </tr>

                        <tr>
                            <td>SpaceX</td>
                            <td>Spacecraft</td>
                            <td>Software Engineer; Information Security; Networking</td>
                            <td>various Programming languages; Software Tools</td>
                            <td>
                                <ul class="pros">
                                    <li> Interessant onderwerp</li>
                                    <li> Stage mogelijkheid</li>
                                </ul>
                                <ul class="cons">
                                    <li> Locatie ver weg</li>
                                    <li> Slechte management</li>
                                    <li> Slechte bedrijfscultuur</li>
                                </ul>
                            </td>
                        </tr>

                        <tr>
                            <td>Syntess Software</td>
                            <td>ERP Systeem</td>
                            <td>Software developer team web apps; Front-end developer</td>
                            <td>C#; .net; UX</td>
                            <td>
                                <ul class="pros">
                                    <li> Locatie dichtbij</li>
                                    <li> Kleiner bedrijf</li>
                                    <li> Goede Company Benefits</li>
                                    <li> Stage mogelijkheid</li>
                                </ul>
                                <ul class="cons">
                                    <li> Geen interesse sector</li>
                                    <li> Hoge instap ervaring</li>
                                </ul>
                            </td>
                        </tr>

                        <tr>
                            <td>Accenture</td>
                            <td>Remote Working</td>
                            <td>Cloud engineer; Cyber Security; Blockchain developer</td>
                            <td>Various Programming Languages; GIT; SOQL</td>
                            <td>
                                <ul class="pros">
                                    <li> Flexible schema</li>
                                    <li> Flexible locaties</li>
                                    <li> Stage mogelijkheid</li>
                                </ul>
                                <ul class="cons">
                                    <li> Niet Persoonlijk</li>
                                    <li> Hoge Druk</li>
                                </ul>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </article>
    </main>
</body>

</html>