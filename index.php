<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <title>MÉLOVOX</title>
    <link rel="stylesheet" href="index_style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rock+Salt&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=search" />
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&family=Josefin+Slab:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <div id="logo_title">
            <a href="index.php"><img id="logo" src="visuel\logo\logo.png" alt=""></a>
            <h1>Mélovox</h1>
        </div>
        <div id="search_connex">
            <div id="burger">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <a href="search.php"><span class="material-symbols-outlined">search</span></a>
            <a href="connexion.php"><button>Connexion</button></a>
            <span class="vertical_line"></span>
            <a href="form.php"><button>Inscription</button></a>
        </div>
    </header>

    <section id="presentation">
        <h2><span class="symbols">🎶</span> Bienvenue sur MÉLOVOX <span class="symbols">🎶</span></h2>

        <div id="gallery" class="zone_pres">
            <div class="icone_lien">
                <img src="visuel\icons\gallery_icon.png" alt="">
                <a href="Gallery.php">Accéder à la Galerie</a>
            </div>
            <div class="texte_pres">
                <h3>Explorez la galerie</h3>
                <p>Plongez dans un univers musical riche et varié centré sur le partage et la découverte de morceau qui résonne avec passion et créativité. <br>Notre plateforme est dédiée à la diffusion de contenus musicaux qui célèbrent la diversité des genres et d’artistes indépendant du monde entier.</p>
            </div>
        </div>

        <div id="liste_aleatoire" class="zone_pres">
            <div class="icone_lien">
                <img src="visuel\icons\icone_playlist_aléatoire.png" alt="">
                <a href="">Laisser vous surprendre par le titre aléatoire du jour !</a>
            </div>
            <div class="texte_pres">
                <h3>Des Découvertes Inattendues.</h3>
                <p>Notre mission est de vous faire découvrir et mettre en avant des artistes et des sons qui ne manqueront pas de vous surprendre par leur créativité. Que vous soyez un passionné de rock, un amateur de pop, ou un explorateur de musiques du monde, nous avons ce qu'il vous faut</p>
            </div>
        </div>
    </section>

    <section class="texte_pres" id="artiste_moment">
        <h2>🎤 Les artistes du moment 🎧</h2>
        <div id="slide_artiste">
            <img class="arrow" src="visuel\icons\buttons_icons\Arrow_left_circle.png" alt="">
            <div class="photo_artiste">
                <a href="artist_profile.php"><img src="visuel\icons\users icons\alexia.png" alt=""></a>
                <a href="artist_profile.php">Alexia</a>
            </div>
            <div class="photo_artiste">
                <a href="artist_profile.php"><img src="visuel\icons\users icons\charles.png" alt=""></a>
                <a href="artist_profile.php">Charles</a>
            </div>
            <div class="photo_artiste">
                <a href="artist_profile.php"><img src="visuel\icons\users icons\Eleana.png" alt=""></a>
                <a href="artist_profile.php">Eleana</a>

            </div>

            <div class="photo_artiste">
                <a href="artist_profile.php"><img src="visuel\icons\users icons\Kévin.png" alt=""></a>
                <a href="artist_profile.php">Kévin</a>
            </div>
            <div class="photo_artiste">
                <a href="artist_profile.php"><img src="visuel\icons\users icons\Orisa.png" alt=""></a>
                <a href="artist_profile.php">Orisa</a>
            </div>
            <img class="arrow" src="visuel\icons\buttons_icons\Arrow_right_circle.png" alt="">
        </div>
    </section>

    <section id="bg_a_propos">
        <div id="a_propos">
            <div>
                <h3>Rejoignez Notre Communauté</h3>
                <p>Ne faites pas que consommer de la musique, partagez-la ! Rejoignez notre communauté de mélomanes, échangez vos coups de cœur, et créez des playlists collaboratives avec vos amis.</p>
            </div>

            <div>
                <h3>Artistes : Partagez Votre Talent</h3>
                <p>Chez MÉLOVOX, nous offrons aux artistes une opportunité unique de faire entendre leur voix. Publiez vos morceaux, albums et playlists pour toucher un public large et diversifié. </p>
            </div>
            <div>
                <h3>Auditeurs : Plongez dans un Océan Musical</h3>
                <p>Nous vous proposons une bibliothèque musicale vaste et variée, couvrant tous les genres et styles. Explorez nos playlists thématiques, découvrez de nouveaux artistes et laissez-vous surprendre par des recommandations personnalisées. <br>Créez et partagez vos propres playlists pour immerger vos amis dans vos coups de cœur musicaux.</p>
            </div>
        </div>
    </section>

    <footer>
        <ul>
            <li><a href="">Lorem Ipsum</a></li>
            <li><a href="">Lorem Ipsum</a></li>
            <li><a href="">Lorem Ipsum</a></li>
            <li><a href="">Lorem Ipsum</a></li>
        </ul>

        <ul>
            <li><a href="">Lorem Ipsum</a></li>
            <li><a href="">Lorem Ipsum</a></li>
            <li><a href="">Lorem Ipsum</a></li>
            <li><a href="">Lorem Ipsum</a></li>
        </ul>

        <ul>
            <li><a href="">Lorem Ipsum</a></li>
            <li><a href="">Lorem Ipsum</a></li>
            <li><a href="">Lorem Ipsum</a></li>
            <li><a href="">Lorem Ipsum</a></li>
        </ul>

        <ul>
            <li><a href="">Lorem Ipsum</a></li>
            <li><a href="">Lorem Ipsum</a></li>
            <li><a href="">Lorem Ipsum</a></li>
            <li><a href="">Lorem Ipsum</a></li>
        </ul>
    </footer>

</body>

</html>