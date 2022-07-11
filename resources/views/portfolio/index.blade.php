@extends('layout')
    
@section('head-content')
    <link rel="stylesheet" href="css/dashboard/indexStyles.css">
    <script src="js/closeScript.js" defer></script>
@endsection('head-content')

@section('content')
    <main id="main">
        <div id="close-all">
            <p onclick="closeAll()">Close All</p>
        </div>

        <article>
            <div class="header">
                <h2>
                    Portfolio Website
                </h2>
                <p class="open-btn" onclick="activeState(event)">v</p>
            </div>
            <br />
            <div class="text">
                <p>Hoe Ironisch, deze website is ook deel van mijn portfolio werk. Op deze website kan je al mijn projecten dus zien; Mijn cijfers staan erop; Mijn verhalen en nog wat andere dingen.</p>
                <br>
                <p>De github link hiervoor is: <a href="https://github.com/ThijsDeR/laravel-portfolio-ThijsDeR" target="_blank">https://github.com/ThijsDeR/laravel-portfolio-ThijsDeR</a></p> 
                <br>
                <p>Van deze website is ook nog een oudere versie beschikbaar. Deze website is geschreven in angular voor Blok 1.</p>
                <br>
                <p>De website kun je bezoeken op: <a href="https://thijsder.github.io/Angular-Website/" target="_blank">https://thijsder.github.io/Angular-Website/</a></p>
                <p>De github link hiervoor is: <a href="https://github.com/ThijsDeR/Angular-Website" target="_blank">https://github.com/ThijsDeR/Angular-Website</a></p>
            </div>
        </article>

        <article>
            <div class="header">
                <h2>
                    Blok 2 OOP Game
                </h2>
                <p class="open-btn" onclick="activeState(event)">v</p>
            </div>
            <br />
            <div class="text">
                <p>
                    In Blok 2 heb ik samen met 3 anderen (<a href="https://github.com/Jochem-D" target="_blank">Jochem Dijkdrent</a>, <a href="https://github.com/Zirconics" target="_blank">Kevin Oreel</a>, <a href="https://github.com/PieterGeschiere" target="_blank">Pieter Geschiere</a>) een game gemaakt voor basisschool kinderen over de gevaren online.
                    In deze game moet je meerdere levels verslaan om de eindbaas te verslaan.
                </p>
                <br>
                <p>De link om deze game te spelen is: <a href="https://thijsder.github.io/Brogrammer-Game/" target="_blank">https://thijsder.github.io/Brogrammer-Game/</a></p>
                <p>De github link hiervoor is: <a href="https://github.com/ThijsDeR/Brogrammer-Game" target="_blank">https://github.com/ThijsDeR/Brogrammer-Game</a></p> 
            </div>
        </article>

        <article>
            <div class="header">
                <h2>
                    Blok 3 / 4 FDE Game
                </h2>
                <p class="open-btn" onclick="activeState(event)">v</p>
            </div>
            <br />
            <div class="text">
                <p>
                    In Blok 3 en 4 heb ik samen met 5 anderen (<a href="https://github.com/PieterGeschiere" target="_blank">Pieter Geschiere</a>, <a href="https://github.com/LarsSonke" target="_blank">Lars Sonke</a>, <a href="https://github.com/Jay-Groen" target="_blank">Jay Groenendijk</a>, <a href="https://github.com/Ex6tenze" target="_blank">Jesper Bertijn</a>, <a href="https://github.com/Jasonjason10" target="_blank">Jason Ofili</a>) een game gemaakt voor middelbare scholieren over het gevaar in het verkeer.
                    In deze game moet je je bewust worden van de gevaren in het verkeer. Dit doe je door de situaties die je in de game krijgt goed te voltooien en dit zo lang mogelijk vol te houden.
                </p>
                <br>
                <p>De link om deze game te spelen is: <a href="https://green-wave-game.herokuapp.com/" target="_blank">https://green-wave-game.herokuapp.com/</a></p>
                <p>De github link hiervoor is: <a href="https://github.com/ThijsDeR/FDE1_Project" target="_blank">https://github.com/ThijsDeR/FDE1_Project</a></p> 
            </div>
        </article>

        <article>
            <div class="header">
                <h2>
                    VS Code Theme
                </h2>
                <p class="open-btn" onclick="activeState(event)">v</p>
            </div>
            <br />
            <div class="text">
                <p>
                    Om te coderen moet je natuurlijk een code editor gebruiken. Maar die ziet er zo saai uit. Daarom heb ik mijn eigen theme gemaakt voor vscode die je kan gebruiken!
                    Als je de theme zou willen gebruiken, kun je bij extensions zoeken naar teaeyes theme.
                </p>
                <br>
                <p>De github link hiervoor is: <a href="https://github.com/ThijsDeR/TeaEyes-Theme" target="_blank">https://github.com/ThijsDeR/TeaEyes-Theme</a></p> 
            </div>
        </article>

        <article>
            <div class="header">
                <h2>
                    Mini JavaScript Game
                </h2>
                <p class="open-btn" onclick="activeState(event)">v</p>
            </div>
            <br />
            <div class="text">
                <p>
                    Als je nou eens niks te doen hebt, schiet dan eens wat balletjes lek. Doe dat natuurlijk niet in het echt, maar in mijn game! Het is een heel simpel spelletje waar je probeert de balletjes af te schieten voordat ze jou bereiken.
                </p>
                <br>
                <p>De link van het spel is: <a href="https://thijsder.github.io/Game-Website/" target="_blank">https://thijsder.github.io/Game-Website/</a></p>
                <p>De github link hiervoor is: <a href="https://github.com/ThijsDeR/Game-Website" target="_blank">https://github.com/ThijsDeR/Game-Website</a></p> 
            </div>
        </article>
    </main>
@endsection('content')