<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Duik diep in de kunst van moedig leven met de inspirerende podcastserie 'Live Your Life Fearlessly', gehost door Inasja Marroussia Wijdekop. Deze serie nodigt luisteraars uit op een reis van zelfontdekking, persoonlijke groei en het omarmen van een onbevreesde levenshouding.">
    <title>Inasja.com-Podcast</title>
    <link href="{{ asset('build/assets/app-CKW-exbu.css') }}" rel="stylesheet">
</head>
<style>
#progress-circle {
    width: 70px;
    height: 50px;
    border-radius: 50%;
    position: fixed;
    top: 80px;
    right: 20px;
    display: flex;
    align-items: center;
    justify-content: center;
    visibility: hidden; /* Initially hidden */
}

/* Add keyframes for the loading effect */
@keyframes loading {
    0% {
        transform: rotate(0deg);
    }
    100% {
        transform: rotate(360deg);
    }
}
</style>


<body>



    <x-navigation />
    <div id="progress-circle" class="progress-circle ">
    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24"><path fill="#cba5a8" d="M10.14,1.16a11,11,0,0,0-9,8.92A1.59,1.59,0,0,0,2.46,12,1.52,1.52,0,0,0,4.11,10.7a8,8,0,0,1,6.66-6.61A1.42,1.42,0,0,0,12,2.69h0A1.57,1.57,0,0,0,10.14,1.16Z"><animateTransform attributeName="transform" dur="0.75s" repeatCount="indefinite" type="rotate" values="0 12 12;360 12 12"/></path></svg>
    </div>
    <div class="max-w-[580px] mx-auto p-4 mt-20 ">
    <div class="object-cover">
            <img src="{{ asset('assets/images/podcastimg.webp') }}" alt="podcast" class="object-obtain h-60 w-96 mx-auto border-2 border-accent-color rounded-xl ">
    </div>
    <h1 class="text-center font-bold text-2xl">Podcast</h1>
    <div class="mt-10 text-left">
              <h1 class="font-bold">Welkom op de podcastpagina van "Live Your Life Fearlessly" met Inasja Marroussia Wijdekop, beschikbaar via Spotify</h1>
            <br>
            <h3>Duik diep in de kunst van moedig leven met de inspirerende podcastserie "Live Your Life Fearlessly", gehost door Inasja Marroussia Wijdekop. Deze serie nodigt luisteraars uit op een reis van zelfontdekking, persoonlijke groei, en het omarmen van een onbevreesde levenshouding.</h3>
            <br>
            <h3>In elke aflevering verkent Inasja de verschillende facetten van moedig leven, van diepgaande gesprekken met gasten uit uiteenlopende disciplines tot het delen van persoonlijke ervaringen en overwinningen op angst. "Live Your Life Fearlessly" staat vol met authentieke verhalen, praktische adviezen, en inzichten die luisteraars aanmoedigen om voorbij hun angsten te kijken en een leven vol vreugde en mogelijkheden na te streven.</h3>
          <br>
          <h3>Als gids op deze ontdekkingsreis, biedt Inasja Marroussia Wijdekop niet alleen een luisterend oor maar deelt zij ook de wijsheid en strategieën die haar hebben geholpen een leven van vrijheid en authenticiteit te leiden. Haar warmte en empathie maken elke aflevering niet alleen leerzaam maar ook diep ontroerend.</h3>
          <br>
          <h1 class="font-bold">Waarom "Live Your Life Fearlessly" beluisteren?</h1>
          <br>
          <ul>
            <li><h3><strong>Inspirerende verhalen:</strong> Laat je meeslepen door de ervaringen van mensen die de kracht hebben gevonden om hun angsten te overwinnen.</h3></li>
            <li><h3><strong>Praktische tips:</strong> Ontdek benaderingen en technieken om angst in je eigen leven het hoofd te bieden.</h3></li>
            <li><h3><strong>Diepgaande gesprekken:</strong> Geniet van gesprekken die zowel de geest verlichten als het hart raken.</h3></li>
            <li><h3><strong>Ontdek je potentieel:</strong> Leer hoe je een leven zonder grenzen kunt leiden, vol mogelijkheden en blijdschap.</h3></li>
          </ul>
          <br>
          <h3>"Live Your Life Fearlessly" is nu beschikbaar op Spotify en nodigt jou uit om de eerste stap te zetten op weg naar een dapper en onbevreesd bestaan. Of je nu op zoek bent naar inspiratie, praktisch advies, of gewoon wilt genieten van ontroerende verhalen, deze podcast heeft iets te bieden voor iedereen die verlangt naar persoonlijke groei en transformatie.</h3>
<br>
<h3 class="font-bold">Luister nu en laat Inasja Marroussia Wijdekop je begeleiden op jouw reis naar een leven zonder angst. Jouw avontuur naar moed begint hier.</h3>
          </div>
</div>

<div class="spotify-container mt-10 p-4 max-w-[580px] mx-auto">
    <div class="flex flex-col gap-4">
        @php
            $spotifyLinks = [
                "https://open.spotify.com/embed/episode/4zwCLWyjU9mnn4sdIDSNCj",
                    "https://open.spotify.com/embed/episode/2ds5bmQvAzSSCFoLq6n3lM",
                    "https://open.spotify.com/embed/episode/7sklMgOTYeiLc8WFJtntm4",
                    "https://open.spotify.com/embed/episode/0mKVt8wiaRpgI1PS6kAtET",
                    "https://open.spotify.com/embed/episode/1SY94IUlAfETvFVv7RRanK",
                    "https://open.spotify.com/embed/episode/43nhNzRJFy7wjNOwEA2G2k",
                    "https://open.spotify.com/embed/episode/3S9WIYRCwK0K4nqe0lvbIZ",
                    "https://open.spotify.com/embed/episode/7qxBIHUE30GHwtkBGhv0Xy",
                    "https://open.spotify.com/embed/episode/5G6Nxb1h1dCBe5oT56dJhL",
                    "https://open.spotify.com/embed/episode/2fCHyxT0Infeqqxcx4cbb4",
                    "https://open.spotify.com/embed/episode/5yaXhfvjlenwgW2S74qPOd",
                    "https://open.spotify.com/embed/episode/5yMj60O8BkSkyJCihGq4Lp",
                    "https://open.spotify.com/embed/episode/77mtYB6gN3A6Wf381QXfaY",
                    "https://open.spotify.com/embed/episode/7acRYfFIDYgNUTs9PNN5fw",
            ];
        @endphp

        @foreach ($spotifyLinks as $link)
            <iframe class="spotify-iframe" src="{{ $link }}" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
        @endforeach
    </div>
</div>

<br><br>
     <div class="max-w-[580px] mx-auto p-4">
      <h1 class="text-left font-bold">Wil je "Live Your Life Fearlessly" via Spotify beluisteren? Klik dan op het icoon hieronder om direct naar onze Spotify-pagina te gaan en duik in de wereld van moedig leven met Inasja Marroussia Wijdekop.</h1>
</div>
      <br>

      <x-spotify/>

      <br><br><br><br><br>



    <x-footer />


    <script>
window.onload = function() {
    var progressCircle = document.getElementById('progress-circle');
    progressCircle.style.visibility = 'visible';
    progressCircle.style.animation = 'loading 3s linear';

    // Hide the progress circle after 3 seconds
    setTimeout(function() {
        progressCircle.style.visibility = 'hidden';
        progressCircle.style.animation = 'none';
    }, 3000);
};
</script>

</body>
</html>
