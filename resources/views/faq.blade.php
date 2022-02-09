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
        <article id="printing">
            <div class="header">
                <h2>
                    <a href="https://hzuniversity.topdesk.net/tas/public/ssp/content/detail/knowledgeitem?unid=788273619b3f42619b41940c9942f3da" target="_blank">
                        How can you print a document from your laptop at HZ?
                    </a>
                </h2>
                <p class="open-btn" onclick="activeState(event)">v</p>
            </div>
            <br />
            <div class="text">
                <div>
                    <ul>
                        <li>
                            Go to the website
                            <a href="http://print.hz.nl">print.hz.nl</a>
                        </li>
                        <li>Type in your HZ username and password and click on Login</li>
                        <li>
                            Click on Choose File and select the file you want to print.
                        </li>
                        <li>
                            Click on Next. Repeat the previous step if you want to add more
                            documents.
                        </li>
                        <li>
                            Wait until the document has been processed and then tick the
                            Advanced option to state whether you want double-sided or black
                            & white printing.
                        </li>
                        <li>
                            Click on the HZ printer or HZ plotter to print your document(s)
                            .
                        </li>
                    </ul>
                    <p>
                        Once the print job has been requested you must register using your
                        HZ pass on the TouchID next to the multifunctional printer. Next,
                        select printer option Print / Afdrukken. In the menu, select the
                        multifunctional printer to where the job has been sent. Next, you
                        can see which printer job i ready to be printed. The print job is
                        the completed provided there is sufficient credit on your printing
                        account. When the printing is completed, press Stop on the
                        TouchID, followed by Logout.
                    </p>
                </div>
                <img src="img/faq/Printer.png" alt="Printer" />
            </div>
        </article>
        <article id="scan">
            <div class="header">
                <h2>
                    <a href="https://hzuniversity.topdesk.net/tas/public/ssp/content/detail/knowledgeitem?unid=d065a4e8a56d47dcbd0ffb9cdf78f20b" target="_blank">
                        How can you scan a document a send it to your laptop at HZ?
                    </a>
                </h2>
                <p class="open-btn" onclick="activeState(event)">v</p>
            </div>
            <br />
            <div class="text">
                <div>
                    <ul>
                        <li>
                            Ensure you have at least €0.07 credit. Although scanning is
                            free, you must have this amount of credit on your HZ pass.
                        </li>
                        <li>
                            Register using your HZ pass on the TouchID next to the
                            multifunctional printer.
                        </li>
                        <li>In the TouchID menu, select option Scanning - Scan.</li>
                        <li>Lay the original sheet on the feeder or glass plate.</li>
                        <li>Press Scan and Send.</li>
                        <li>Press Scan to me.</li>
                        <li>Press Yes.</li>
                        <li>Press the Start button.</li>
                        <li>
                            The following screen appears for scanning via the glass plate.
                            Press the green Start button on the printer to scan page by
                            page. Once this is ready, press Start Sending.
                        </li>
                    </ul>
                    <p>
                        When scanning is completed, press Stop on the TouchID, followed by
                        Logout.
                    </p>
                </div>
                <img src="img/faq/Scan.png" alt="Scanner" />
            </div>
        </article>
        <article id="sick">
            <div class="header">
                <h2>
                    What do you need to do when you are sick / show symptoms of
                    coronavirus?
                </h2>
                <p class="open-btn" onclick="activeState(event)">v</p>
            </div>
            <br />
            <div class="text">
                <div>
                    <p>
                        Notify your teacher so that they can stream their lessons while
                        you stay at home.
                    </p>
                </div>
                <img src="img/faq/Corona.png" alt="CoronaVirus" />
            </div>
        </article>
        <article id="project-space">
            <div class="header">
                <h2>How can you book a project space in one of the wings?</h2>
                <p class="open-btn" onclick="activeState(event)">v</p>
            </div>
            <br />
            <div class="text">
                <div>
                    <ul>
                        <li>
                            Go to
                            <a href="https://hzuniversity.topdesk.net/tas/public/ssp/content/page/locationreservationplanner?from=f56d5230-ffe5-4ab7-ad47-ec9374b5ec34">
                                this link
                            </a>
                        </li>
                        <li>
                            Check the option type of meeting room to see all meeting rooms
                            that are available for reservation.
                        </li>
                        <li>Select a room</li>
                        <li>Fill in your details</li>
                        <li>Confirm reservation</li>
                    </ul>
                </div>
                <img src="img/faq/Meeting-Room.png" alt="Meeting Room" />
            </div>
        </article>
        <article id="parking">
            <div class="header">
                <h2>
                    What are the instructions if you want to park your car at the HZ
                    parking lot?
                </h2>
                <p class="open-btn" onclick="activeState(event)">v</p>
            </div>
            <br />
            <div class="text">
                <div>
                    <p>
                        Hold your HZ card in front of the barrier, and it will open for you
                        so you can park your car.
                    </p>
                </div>
                <img src="img/faq/Parking.png" alt="Parking lot" />
            </div>
        </article>
    </main>
</body>

</html>