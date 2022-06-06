@extends('layout')

@section('head-content')
    <link rel="stylesheet" href="/css/homeStyles.css">
    <script src="/js/homeScript.js" defer></script>
@endsection('head-content')

@section('content')
    <main id="main">
        <div id="section_header">
            <a href="https://hz.nl" target="_blank"><img id="hz_logo" src="img/home/Hz_logo.png" alt="HZ Logo" /></a>
            <img id="programming" src="img/home/Programming2.jpg" alt="Programmeer laptop met bril" />
            <span id="my">My</span><span id="future">Future</span>
        </div>
        <article>
            <div id="pitch">
                <p id="intro">
                    Ik begon met programmeren toen ik 13 was met de simpele python
                    <span id="print">print</span>(<span id="hello">"Hello World!"</span>)
                    terwijl ik de tutorial van <a href="https://www.youtube.com/c/programmingwithmosh" target="_blank">Mosh-Hamedani</a> keek.
                    Het was een verrassing dat het op het scherm terecht kwam. Ik was
                    zo gefascineerd door de dingen die ik aan het doen was, kleine
                    programma's om dingen laten te printen, dat ik het toen al wist;
                    dit wil ik later worden.
                </p>
                <p id="career1">
                    Na deze tutorials, kwam ik de rest van de wereld van
                    programmeren tegen. Alles wat ik aanraak op mijn laptop was gemaakt
                    van code, en ik wilde daar deel van uitmaken. Zo begon ik aan m'n
                    eerste website in plain html, wat er natuurlijk niet uitzag. Dit
                    werd dan uitgebreid met css, wat er natuurlijk nog steeds niet
                    uitzag omdat ik er niks van af wist. Nadat ik erg verveeld was van
                    het centreren van een div in een andere div, ging ik andere soorten
                    programma's langs:
                </p>
                <ul>
                    <li>Games</li>
                    <li>Discord Bots</li>
                    <li>Minecraft Mods</li>
                </ul>
                <p id="career2">
                    En toen waren we hier, 3 jaar later, ik ben
                    weer terug bij een div centreren in een andere div en oh wat heb ik
                    daar zin in ;)
                </p>
                <p id="hz">
                    Ik denk dat ik erg geschikt ben voor deze opleiding, omdat ik erg
                    gedreven ben om probleemoplossend te programmeren en nieuwe dingen
                    te innoveren. Ook ben ik heel enthousiast over het maken van inspirerende code en van geluk
                    schreeuwen nadat mijn bugs eindelijk gefixt zijn. Ik zie er erg naar
                    uit om mezelf te ontwikkelen tot een echte Software Engineer (Sorry
                    data scientists en Biccers) en hier ook later mijn baan van te
                    maken.
                </p>
            </div>
        </article>
    </main>
@endsection('content')