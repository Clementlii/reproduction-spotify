<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="assets /CSS/style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&family=Roboto:wght@300&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="assets /sass/main.scss">
    <link rel="shortcut icon" href="assets /IMG/spotify.png" type="image/x-icon">


    <title>Spotify interface</title>
</head>

<body>


    <div class="sidebar">
        <div class="sidebarnav">
            <nav>
                <ul>
                    <li><a href="">Accueil</a></li>
                    <li><a href="">Recherche</a></li>
                    <li><a href="">Bibliothèque</a></li>
                </ul>
                <ul class="playlists">
                    <li><a href="">Créer une playlist</a></li>
                    <li><a href="">Titres likés</a></li>
                </ul>
            </nav>
        </div>
        <div class="sidebar-link">
            <a href="#about">Rock</a>
            <a href="#services">Punk/Rock</a>
            <a href="#clients">Jazz</a>
            <a href="#contact">Metal</a>
            <a href="#about">MetalProg</a>
            <a href="#services">Electro</a>
            <a href="#clients">Lofi</a>
            <a href="#contact">Indé</a>
            <a href="#clients">Jpop</a>
        </div>
    </div>


    <main>
        <div class="profilContainer">
            <div class="profilImg">
                <p>Clément</p>

            </div>
        </div>
        <nav>
            <div class="arrowNav">
                <p><i class="fas fa-arrow-circle-left"></i> <i class="fas fa-arrow-circle-right"></i></p>
            </div>
        </nav>
        <section id="uiContainer">
            <h1>Bonjour</h1>
            <section class="HelloSelection">
                <div class="Likes">
                    <div class="likePlaylist">
                        <p><i class="fas fa-heart"></i></p>
                    </div>
                    <p>Titres likés</p>
                </div>
                <div class="NativeConstruct">
                    <div class="likePlaylist2">
                        <img src="assets /IMG/bad times roll.jpg" alt="">
                    </div>
                    <p>Let The Bad Times Roll
                        <br>(Deluxe Edition)
                    </p>
                </div>
                <div class="LetTheBadTimeRoll">
                    <div class="likePlaylist2">
                        <img src="assets /IMG/Emigrate.jpg" alt="">
                    </div>
                    <p>A Million Degrees</p>
                </div>



            </section>
            <div class="speration">
                <div class="AMillionDegrees">
                    <div class="likePlaylist2">
                        <img src="assets /IMG/Native .jpg" alt="">
                    </div>
                    <p>Native Construct</p>
                </div>
                <div class="VolBeat">
                    <div class="likePlaylist2">
                        <img src="assets /IMG/volbeat.jpg" alt="">
                    </div>
                    <p>Seal The Deal & Let's
                        <br>Boogie (Deluxe)
                    </p>
                </div>
                <div class="ArtificialLanguage">
                    <div class="likePlaylist2">
                        <img src="assets /IMG/artificialCover.jpeg" alt="">
                    </div>
                    <p>Artificial Language</p>
                </div>
            </div>



            <h2>Recommandations du jour</h2>
        </section>
        <section id="web-container">
            <div class="mme-container">
                <article class="article">
                    <img src="assets /IMG/artificial.jpeg" alt="">
                </article>

            </div>
            <div class="cook-container">
                <article class="article">
                    <img src="assets /IMG/TheObserver.jpeg" alt="">
                </article>

            </div>
            <div class="badTimesRoll ">
                <article class="article">
                    <img src="assets /IMG/bad times roll.jpg" alt="">
                </article>
            </div>
            <div class="kanban-container">
                <article class="article">
                    <img src="assets /IMG/Zelda&Chill.jpg" alt="">
                </article>
            </div>

            <div class="orion-letterr">
                <article class="article" data-aos="fade-left">
                    <img src="assets /IMG/Galore.jpg" alt="">
                </article>

            </div>
            <div class="OrionGo">
                <article class="article">
                    <img src="assets /IMG/mirapolis.jpeg" alt="">
                </article>

            </div>
        </section>
        <!--container des article-->

    </main>
    <div class="playerFooter">
        <div class="play">
            <img src="assets /IMG/volbeat.jpg" alt="">

            <p>Black Rose
                <br> <strong id="artiste">Volbeat</strong>
            </p>
        </div>
        <div>
            <audio class="audio">
                <source src="https://scriptura.github.io/Medias/BagdadCafe.mp3" />
                <p class="message-error">This media is not supported by your browser.</p>
            </audio>
        </div>
        <script src="assets /js/style.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.js"
            integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5media/ 1.1.8/html5media.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/plyr/3.6.8/plyr.min.js"></script>

</body>

</html>