<?php require "content_dynamique/header.php"; ?>

<div id="liste_musiques" class="category_button">
    <h2>Les musiques</h2>

    <?php
        include "database/connex_bdd.php";

        // Récupérer toutes les musiques importées par les utilisateurs
        $sql = "SELECT titre, artiste, album, genre, chemin_fichier FROM musique";
        $result = $conn->query($sql);

    ?>
            <ul>
                <?php
                // Vérifier s'il y a des musiques à afficher
                if ($result->num_rows > 0) {
                    while ($musique = $result->fetch_assoc()) {
                        // Définir le chemin URL du fichier audio
                        $chemin_audio = '/uploads/musique/' . basename($musique['chemin_fichier']);
                        ?>
                        <li>
                            <strong><?php echo htmlspecialchars($musique['titre']); ?></strong>
                            <br>Artiste : <?php echo htmlspecialchars($musique['artiste']); ?>
                            <br>Album : <?php echo htmlspecialchars($musique['album']); ?>
                            <br>Genre : <?php echo htmlspecialchars($musique['genre']); ?>
                            <br>
                            <audio controls>
                                <source src="<?php echo htmlspecialchars($chemin_audio); ?>" type="audio/mpeg">
                                Votre navigateur ne supporte pas la balise audio.
                            </audio>
                        </li>
                        <?php
                    }
                } else {
                    echo "<p>Aucune musique importée pour le moment.</p>";
                }
                ?>
            </ul>
        </div>

        <?php
        $conn->close();
    ?>


</div>


<!-- /* --------- Section 1-------- */ -->
<div class="category_button">
    <h2>Catégorie</h2>
    <div id="buttons">
        <a href="category.php"><button class="Categorie" type="button">Pop</button></a>
        <a href="category.php"><button class="Categorie" type="button">Rock</button></a>
        <a href="category.php"><button class="Categorie" type="button">Hip-hop</button></a>
        <a href="category.php"><button class="Categorie" type="button">Jazz</button></a>
        <a href="category.php"><button class="Categorie" type="button">Classique</button></a>
        <a href="category.php"><button class="Categorie" type="button">Blues</button></a>
        <a href="category.php"><button class="Categorie" type="button">Reggae</button></a>
        <a href="category.php"><button class="Categorie" type="button">Country</button></a>
        <a href="category.php"><button class="Categorie" type="button">Electro</button></a>
        <a href="category.php"><button class="Categorie" type="button">R&B</button></a>
        <a href="category.php"><button class="Categorie" type="button">Funk</button></a>
        <a href="category.php"><button class="Categorie" type="button">Soul</button></a>
        <a href="category.php"><button class="Categorie" type="button">Metal</button></a>
        <a href="category.php"><button class="Categorie" type="button">Punk</button></a>
        <a href="category.php"><button class="Categorie" type="button">Folk</button></a>
        <a href="category.php"><button class="Categorie" type="button">Disco</button></a>
        <a href="category.php"><button class="Categorie" type="button">Ska</button></a>
        <a href="category.php"><button class="Categorie" type="button">House</button></a>
        <a href="category.php"><button class="Categorie" type="button">Lo-fi</button></a>
        <a href="category.php"><button class="Categorie" type="button">Ambient</button></a>
    </div>
</div>
<!-- /* --------- Section 2-------- */ -->
<div id="all_artist">
    <h2>Artistes</h2>
    <div id="artist_area">
        <div id="artist_icon">
            <img src="visuel\icons\users icons\alexia.png" alt=""><a href="artist_profile.php"> Alexia </a>
        </div>

        <div id="artist_icon">
            <img src="visuel\icons\users icons\DJ_alfonso.png" alt=""><a href="artist_profile.php">DJ Alfonso</a>
        </div>

        <div id="artist_icon">
            <img src="visuel\icons\users icons\Catalia.png" alt=""><a href="artist_profile.php">Catalia</a>
        </div>

        <div id="artist_icon">
            <img src="visuel\icons\users icons\charles.png" alt=""><a href="artist_profile.php">Charles</a>
        </div>

        <div id="artist_icon">
            <img src="visuel\icons\users icons\drew.png" alt=""><a href="artist_profile.php">Drew</a>
        </div>

        <div id="artist_icon">
            <img src="visuel\icons\users icons\Eleana.png" alt=""><a href="artist_profile.php">Eleana</a>
        </div>

        <div id="artist_icon">
            <img src="visuel\icons\users icons\gabriel.png" alt=""><a href="artist_profile.php">Gabriel</a>
        </div>

        <div id="artist_icon">
            <img src="visuel\icons\users icons\Kévin.png" alt=""><a href="artist_profile.php">Kévin</a>
        </div>

        <div id="artist_icon">
            <img src="visuel\icons\users icons\lil_jordan.png" alt=""><a href="artist_profile.php">LiL Jordan</a>
        </div>

        <div id="artist_icon">
            <img src="visuel\icons\users icons\lisa.png" alt=""><a href="artist_profile.php">Lisa</a>
        </div>

        <div id="artist_icon">
            <img src="visuel\icons\users icons\Lorde.png" alt=""><a href="artist_profile.php">Lorde</a>
        </div>

        <div id="artist_icon">
            <img src="visuel\icons\users icons\lucie.png" alt=""><a href="artist_profile.php">Lucie</a>
        </div>

        <div id="artist_icon">
            <img src="visuel\icons\users icons\Marc.png" alt=""><a href="artist_profile.php">Marc</a>
        </div>

        <div id="artist_icon">
            <img src="visuel\icons\users icons\Orisa.png" alt=""><a href="artist_profile.php">Orisa</a>
        </div>

        <div id="artist_icon">
            <img src="visuel\icons\users icons\Sade.png" alt=""><a href="artist_profile.php">Sade</a>
        </div>

        <div id="artist_icon">
            <img src="visuel\icons\users icons\sandy.png" alt=""><a href="artist_profile.php">Sandy</a>
        </div>
    </div>
</div>

<?php require "content_dynamique/footer.php"; ?>