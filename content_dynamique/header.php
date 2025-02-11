<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <title>MÉLOVOX</title>
    <!-- meta pour   -->
    <link rel="stylesheet" href="contactform_style.css">

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
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=search" />
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap"
        rel="stylesheet">
</head>

<body>
    <header>
        <div id="logo_title">
            <a href="index.html"><img id="logo" src="visuel\logo\logo.png" alt=""></a>
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

            <a href="search.html"><span class="material-symbols-outlined">search</span></a>
            <a href="connexion.html"><button>Connexion</button></a>
            <span id="vertical_line"></span>
            <a href="form.html"><button>Inscription</button></a>
        </div>
    </header>