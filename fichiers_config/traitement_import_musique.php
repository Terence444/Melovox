<?php
// Inclure le fichier de connexion à la base de données
include "../database/connex_bdd.php";

// Démarrer la session
session_start();

// Vérifier si le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Récupérer les données du formulaire
    $titre = $_POST['titre'];
    $artiste = $_POST['artiste'];
    $album = $_POST['album'];
    $genre = $_POST['genre'];
    $utilisateur_id = $_SESSION['user_id'];

    // Gérer l'upload du fichier de musique
    if (isset($_FILES['fichier_musique']) && $_FILES['fichier_musique']['error'] === UPLOAD_ERR_OK) {
        // Créer un nom de fichier unique pour éviter les conflits
        $chemin_fichier = 'uploads/musique/' . uniqid() . '_' . basename($_FILES['fichier_musique']['name']);
        move_uploaded_file($_FILES['fichier_musique']['tmp_name'], $chemin_fichier);

        // Préparer et exécuter la requête d'insertion
        $sql = "INSERT INTO musique (utilisateur_id, titre, artiste, album, genre, chemin_fichier)
        VALUES (?, ?, ?, ?, ?, ?)";

        $stmt = $conn->prepare($sql);
        $stmt->bind_param("isssss", $utilisateur_id, $titre, $artiste, $album, $genre, $chemin_fichier);

        if ($stmt->execute()) {
            echo "Musique importée avec succès!";
        } else {
            echo "Erreur lors de l'import : " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "Erreur lors du téléchargement du fichier.";
    }
}

// Fermer la connexion à la base de données
$conn->close();
?>
