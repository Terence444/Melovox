<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <title>MÉLOVOX</title>

    <!-- Css du header et footer -->
    <link rel="stylesheet" href="content_dynamique/header.css">
    <link rel="stylesheet" href="content_dynamique/footer.css">

    <!-- Programme pour charger chaque feuille de style CSS en fonction du nom des pages -->
    <?php
        // Définir le chemin des fichiers CSS en utilisant une constante
        define('CSS_PATH', '/styles/');

        // Identifier la page actuelle (basée sur une variable de page)
        $page = basename($_SERVER['PHP_SELF']);

        // Vérifier si le nom de la page est "nom_du_fichier.php"
        if ($page === 'albums_ep_single.php'){
            echo "<link rel='stylesheet' type='text/css' href='" . CSS_PATH . "albums_ep_single_style.css'>"; 
        } elseif ($page === 'artist_profile.php'){
            echo "<link rel='stylesheet' type='text/css' href='" . CSS_PATH . "artist_profile_style.css'>";
        }elseif ($page === 'category.php'){
            echo "<link rel='stylesheet' type='text/css' href='" . CSS_PATH . "category_style.css'>";
        }elseif ($page === 'connexion.php'){
            echo "<link rel='stylesheet' type='text/css' href='" . CSS_PATH . "connexion_style.css'>";
        }elseif ($page === 'contactform.php'){
            echo "<link rel='stylesheet' type='text/css' href='" . CSS_PATH . "contactform_style.css'>";
        }elseif ($page === 'form.php'){
            echo "<link rel='stylesheet' type='text/css' href='" . CSS_PATH . "form_style.css'>";
        }elseif ($page === 'gallery.php'){
            echo "<link rel='stylesheet' type='text/css' href='" . CSS_PATH . "gallery_style.css'>";
        }elseif ($page === 'index.php'){
            echo "<link rel='stylesheet' type='text/css' href='" . CSS_PATH . "index_style.css'>";
        }elseif ($page === 'playlist.php'){
            echo "<link rel='stylesheet' type='text/css' href='" . CSS_PATH . "playlist_style.css'>";
        }elseif ($page === 'profile.php'){
            echo "<link rel='stylesheet' type='text/css' href='" . CSS_PATH . "profile_style.css'>";
        }elseif ($page === 'search.php'){
            echo "<link rel='stylesheet' type='text/css' href='" . CSS_PATH . "search_style.css'>";
        }
    ?>

    <!-- meta pour menu hamburger -->
    <link rel="stylesheet" href="content_dynamique\menu-deroulant.css">
    <script src="content_dynamique\menu-deroulant.js" defer></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans&display=swap" rel="stylesheet">

    <!--meta typos  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rock+Salt&display=swap" rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=search">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap"
        rel="stylesheet">
</head>

<body>
    <header>
        <div id="logo_title">
            <a href="index.php"><img id="logo" src="visuel\logo\logo.png" alt=""></a>
            <h1>Mélovox</h1>
        </div>
        <div id="search_connex">
            <div class="wrapMenu">
                <div class="menu menu--top-right" id="menu_top_right">
                    <a class="menu__btn" dd-nav-expand="menu_top_right"><img src="visuel\icons\menu_hamburger.png"
                            alt=""></a>
                    <ul class="menu__list">
                        <li><a href="#">Accueil</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">Galerie</a></li>
                    </ul>
                </div>
            </div>

            <a href="search.php"><span class="material-symbols-outlined">search</span></a>
            <a href="connexion.php"><button>Connexion</button></a>
            <span id="vertical_line"></span>
            <a href="form.php"><button>Inscription</button></a>
        </div>
    </header>