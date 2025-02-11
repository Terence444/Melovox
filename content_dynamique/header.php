<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <title>MÉLOVOX</title>
    <!-- Programme pour charger chaque feuille de style CSS en fonction du nom des pages -->
    <?php
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);

        // Définir le fichier CSS spécifique à la page
        $fichier_css_spe = array(
        'albums_ep_single_style' => 'albums_ep_single_style.css',
        'artist_profile_style' => 'artist_profile_style.css',
        'category_style' => 'category_style.css',
        'connexion_style' => 'connexion_style.css',
        'contactform_style' => 'contactform_style.css',
        'form_style' => 'form_style.css',
        'gallery_style' => 'gallery_style.css',
        'index' => 'index_style.css',
        'playlist_style' => 'playlist_style.css',
        'profile_style' => 'profile_style.css',
        'search_style' => 'search_style.css',
        );

         // Identifier la page actuelle (par exemple, basée sur une variable de page)
        $page = basename($_SERVER['PHP_SELF'], ".php");

        // Inclure le fichier CSS spécifique à la page si disponible
        if (array_key_exists($page, $fichier_css_spe)) {
            echo "<link rel='stylesheet' type='text/css' href='$fichier_css_spe[$page]'>";
        } else {
            echo "<!-- Aucun fichier CSS trouvé pour la page : $page -->";
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