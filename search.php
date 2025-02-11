<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <title>MÉLOVOX</title>
    <link rel="stylesheet" href="search_style.css">
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
            <span id="vertical_line"></span>
            <a href="form.php"><button>Inscription</button></a>
        </div>
    </header>

    <main>
        <div id="search_area">
            <span class="material-symbols-outlined">search</span>

            <form action="search_results.php" method="GET">
                <input type="text" name="query" placeholder="Tapez votre recherche...">
                <button type="submit">Rechercher</button>
            </form>
        </div>


        <div id="filters">
            <div>
                <input type="checkbox" name="Artiste" id="Artiste">
                <label class="text_filters" for="Artiste"> Artiste</label>
            </div>

            <div>
                <input type="checkbox" name="Titre" id="Titre">
                <label class="text_filters" for="Titre">Titre</label>
            </div>

            <div>
                <input type="checkbox" name="Albums" id="Albums">
                <label class="text_filters" for="Albums">Albums</label>
            </div>

            <div>
                <input type="checkbox" name="Playlist" id="Playlist">
                <label class="text_filters" for="Playlist">Playlist</label>
            </div>
        </div>

        <div id="zone_result">
            <h3>Résultats de votre recherche</h3>
            <div id="result_search"></div>
        </div>
    </main>
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