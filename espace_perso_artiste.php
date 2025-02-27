<?php
require "content_dynamique/header.php";
include "database/connex_bdd.php";

// Démarrer la session pour obtenir les informations de l'utilisateur connecté
session_start();

// Vérifier si l'utilisateur est connecté
if (isset($_SESSION['user_id'])) {
    $utilisateur_id = $_SESSION['user_id'];

    // Récupérer les informations de l'utilisateur
    $sql = "SELECT u.nom, u.prenom, u.email, a.biographie, a.photo_profil
            FROM utilisateurs u
            LEFT JOIN artistes a ON u.id = a.utilisateur_id
            WHERE u.id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $utilisateur_id);
    $stmt->execute();
    $stmt->bind_result($nom, $prenom, $email, $biographie, $photo_profil);
    $stmt->fetch();
    $stmt->close();
    
?>

    <h1>Bienvenue sur votre espace artiste</h1><br>

    <!-- Affichage de la photo de profil -->
    <div id="profil">
        <?php if (!empty($photo_profil) && file_exists($photo_profil)) : ?>
            <img src="<?php echo htmlspecialchars($photo_profil); ?>" alt="Photo de profil" style="max-width: 200px; border-radius: 50%;">
        <?php else : ?>
            <!-- Image par défaut si aucune photo n'est disponible -->
            <img src="../fichiers_config/uploads/photos_profil/default_profile.png" alt="Photo de profil par défaut" style="max-width: 200px; border-radius: 50%;">
        <?php endif; ?>
        <h3><?php echo htmlspecialchars($prenom . ' ' . $nom); ?></h3>

    <!-- Modif photo de profil -->
    <form action="fichiers_config/traitement_photo_profil.php" method="post" enctype="multipart/form-data">
        <label for="nouvelle_photo">Changer ma photo de profil :</label>
        <input type="file" name="nouvelle_photo" id="nouvelle_photo" accept="image/*" required>
        <input type="submit" value="Mettre à jour">
    </form>

    <?php
// Messages pour la photo de profil
if (isset($_SESSION['photo_success'])) {
    echo "<p class='success-message'>" . $_SESSION['photo_success'] . "</p>";
    unset($_SESSION['photo_success']);
}
if (isset($_SESSION['photo_error'])) {
    echo "<p class='error-message'>" . $_SESSION['photo_error'] . "</p>";
    unset($_SESSION['photo_error']);
}
?>



    <section id="bio_artiste">
        <h2>Ma biographie</h2>  

        <div id="bio">
            <?php if ($biographie): ?>
                <p><?php echo nl2br(htmlspecialchars($biographie)); ?></p>
            <?php else: ?>
                <p>Votre biographie est vide. Cliquez sur le bouton ci-dessous pour ajouter votre biographie.</p>
            <?php endif; ?>
        </div>

        <button type="button" id="modifier_bio_btn">Modifier ma bio</button>

        <!-- Formulaire de modification de la biographie -->
        <form id="form_bio" action="fichiers_config/traitement_biographie.php" method="post" style="display: none;">
            <textarea name="biographie" rows="10" cols="50" required><?php echo htmlspecialchars($biographie); ?></textarea>
            <br>
            <input type="submit" value="Enregistrer">
            <button type="button" id="annuler_btn">Annuler</button>
        </form>
    </section>
    </section>

    <section id="import_musique">
        <h2>Déposer de nouveaux titres</h2>
        <form action="fichiers_config/traitement_import_musique.php" method="post" enctype="multipart/form-data">
            <div>
                <label for="titre">Titre</label>
                <input type="text" id="titre" name="titre" required>
            </div>
            <div>
                <label for="artiste">Artiste</label>
                <input type="text" id="artiste" name="artiste" required>
            </div>
            <div>
                <label for="album">Album</label>
                <input type="text" id="album" name="album">
            </div>
            <div>
                <label for="genre">Genre</label>
                <input type="text" id="genre" name="genre">
            </div>
            <div>
                <label for="fichier_musique">Fichier Musique</label>
                <input type="file" id="fichier_musique" name="fichier_musique" accept="audio/*" required>
            </div>
            <div>
                <input type="submit" value="Importer">
            </div>
        </form>
    </section>

    <section>
        <h2>Mes titres en ligne</h2>
        <?php
        // Récupérer la liste des musiques de l'artiste
        $sql = "SELECT titre, album, genre, chemin_fichier, date_import FROM musique WHERE utilisateur_id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $utilisateur_id);
        $stmt->execute();
        $result = $stmt->get_result();

        // Vérifier s'il y a des musiques
        if ($result->num_rows > 0) {
            echo "<ul>";
            while ($musique = $result->fetch_assoc()) {
                echo "<li>";
                echo "<strong>" . htmlspecialchars($musique['titre']) . "</strong> ";
                echo " - Album : " . htmlspecialchars($musique['album']);
                echo " - Genre : " . htmlspecialchars($musique['genre']);
                echo " - Importé le : " . htmlspecialchars($musique['date_import']);
                // Ajouter un lecteur audio pour écouter le titre
                echo "<audio controls>
                        <source src='" . htmlspecialchars($musique['chemin_fichier']) . "' type='audio/mpeg'>
                      Votre navigateur ne supporte pas la balise audio.
                      </audio>";
                echo "</li>";
            }
            echo "</ul>";
        } else {
            echo "<p>Vous n'avez pas encore importé de titres.</p>";
        }
        $stmt->close();
        ?>
    </section>
    <?php
} else {
    // Rediriger l'utilisateur vers la page de connexion s'il n'est pas connecté
    header("Location: ../connexion.php");
    exit();
}

require "content_dynamique/footer.php";
?>

<?php
// Après l'ouverture de la session et avant d'afficher le contenu
if (isset($_SESSION['import_success'])) {
    echo "<p class='success-message'>" . $_SESSION['import_success'] . "</p>";
    unset($_SESSION['import_success']);
}
?>



<!-- Ajouter le script JavaScript pour gérer l'affichage du formulaire -->
<script>
    document.getElementById('modifier_bio_btn').addEventListener('click', function() {
        document.getElementById('form_bio').style.display = 'block';
        this.style.display = 'none';
    });

    document.getElementById('annuler_btn').addEventListener('click', function() {
        document.getElementById('form_bio').style.display = 'none';
        document.getElementById('modifier_bio_btn').style.display = 'inline';
    });
</script>