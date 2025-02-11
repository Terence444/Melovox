<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <title>MÉLOVOX</title>
    <link rel="stylesheet" href="profile_style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rock+Salt&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=search" />
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

    <section id="profile_info">
        <div id="user_info">
            <img src="visuel\icons\user_icon.png" alt="">
            <h2>Nom de l’utilisateur</h2>
        </div>
        <div id="user_stats">
            <h3>Nombre <br>d’abonnés</h3>
            <h3>Nombre <br>d’abonnements</h3>
            <h3>Nombre <br>de playlists</h3>
        </div>
    </section>

    <section id="collection">
        <h4>Vos playlist</h4>
        <div id="playlist_area">
            <div class="playlist">
                <a href="playlist.php"><img class="playlist_icon" src="visuel\icons\icone_playlist.png" alt=""></a>

                <a href="playlist.php">Playlist N°1</a>
            </div>

            <div class="playlist">
                <a href="playlist.php"><img class="playlist_icon" src="visuel\icons\icone_playlist.png" alt=""></a>
                <a href="playlist.php">Playlist N°2</a>
            </div>

            <div class="playlist">
                <a href="playlist.php"><img class="playlist_icon" src="visuel\icons\icone_playlist.png" alt=""></a>
                <a href="playlist.php">Playlist N°3</a>
            </div>
        </div>

        <h4>Vos albums/EP/Single</h4>
        <div id="album_area">
            <div class="album">
                <a href="albums_ep_single.php"><img class="playlist_icon" src="visuel\icons\icone_playlist.png" alt=""></a>
                <a href="albums_ep_single.php">Album</a>
            </div>

            <div class="album">
                <a href="albums_ep_single.php"><img class="playlist_icon" src="visuel\icons\icone_playlist.png" alt=""></a>
                <a href="albums_ep_single.php">EP</a>
            </div>

            <div class="album">
                <a href="albums_ep_single.php"><img class="playlist_icon" src="visuel\icons\icone_playlist.png" alt=""></a>
                <a href="albums_ep_single.php">Single</a>
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