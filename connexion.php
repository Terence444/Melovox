<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MÉLOVOX</title>
    <link rel="stylesheet" href="connexion_style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rock+Salt&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=search">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <div id="logo_title">
            <a href="index.php"><img id="logo" src="visuel/logo/logo.png" alt=""></a>
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
            <span id="vertical_line"></span>
            <a href="form.php"><button>Inscription</button></a>
        </div>
    </header>
    <section>
        <div id="image_area">
            <img id="image" src="visuel/image/social_music_network_2.jpg" alt="">
        </div>
        <span class="vertical_line"></span>

        <div id="fast_signin">
            <h3>Connexion rapide</h3>
            <p>Lier votre compte avec un réseau social</p>
            <div id="button_icon">
                <button><a href=""><img class="social_network" src="visuel/icons/buttons_icons/Bouton_facebook.png" alt=""></a></button>
                <button><a href=""><img class="social_network" src="visuel/icons/buttons_icons/Bouton_Gmail.png" alt=""></a></button>
                <button><a href=""><img class="social_network" src="visuel/icons/buttons_icons/Bouton_X.png" alt=""></a></button>
            </div>
            <img id="decorative_line" src="visuel/image/Decoration.png" alt="">
            <form action="database\connex_bdd.php" method="post">
                <div id="email_area">
                    <label for="email">Adresse Email</label>
                    <input type="text" id="email" name="email" required>
                </div>
                <div id="password_area">
                    <label for="password">Mot de passe</label>
                    <input type="password" id="password" name="password" minlength="8" required>
                    <a href="">Mot de passe oublié?</a>
                </div>
                <div id="checkbox">
                    <input type="checkbox" name="connect">
                    <label for="connect">Rester connecté</label>
                </div>
                <div id="sign_in">
                    <input id="connect" type="submit" value="Se connecter">
                </div>
                <p>Pas encore inscrit? <a href="form.php">Inscrivez-vous ici</a></p>
            </form>
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