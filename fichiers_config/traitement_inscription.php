<?php
// Informations de connexion à la base de données
$host = 'localhost';
$dbname = 'melovox';
$db_username = 'root'; // Remplacez par votre nom d'utilisateur
$db_password = '';    // Remplacez par votre mot de passe

try {
    // Connexion à la base de données
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $db_username, $db_password);
    // Configuration des erreurs PDO
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Démarrage de la session
    session_start();

    // Vérification que le formulaire a été soumis
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Récupération des données du formulaire
        $nom = trim($_POST['nom']);
        $prenom = trim($_POST['prenom']);
        $date_naissance = $_POST['date_naissance'];
        $email = trim($_POST['email']);
        $sexe = $_POST['sexe'];
        $est_artiste = $_POST['est_artiste'];
        $partage_creations = $_POST['partage_creations'];
        $pays = trim($_POST['pays']);
        $pseudo = trim($_POST['pseudo']);
        $mot_de_passe = $_POST['mot_de_passe'];
        $confirmation_mot_de_passe = $_POST['confirmation_mot_de_passe'];

        // Tableau pour stocker les erreurs
        $erreurs = [];

        // Validation des données
        if (empty($nom)) {
            $erreurs[] = "Veuillez saisir votre nom.";
        }

        if (empty($prenom)) {
            $erreurs[] = "Veuillez saisir votre prénom.";
        }

        if (empty($date_naissance)) {
            $erreurs[] = "Veuillez indiquer votre date de naissance.";
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $erreurs[] = "L'adresse email est invalide.";
        }

        if (empty($pays)) {
            $erreurs[] = "Veuillez indiquer votre pays.";
        }

        if (empty($pseudo)) {
            $erreurs[] = "Veuillez choisir un nom d'utilisateur.";
        }

        if (strlen($mot_de_passe) < 8) {
            $erreurs[] = "Le mot de passe doit contenir au moins 8 caractères.";
        }

        if ($mot_de_passe !== $confirmation_mot_de_passe) {
            $erreurs[] = "Les mots de passe ne correspondent pas.";
        }

        // Vérification de l'unicité du pseudo et de l'email
        $stmt = $pdo->prepare("SELECT COUNT(*) FROM utilisateurs WHERE pseudo = :pseudo OR email = :email");
        $stmt->execute(['pseudo' => $pseudo, 'email' => $email]);
        $existe = $stmt->fetchColumn();

        if ($existe) {
            $erreurs[] = "Le nom d'utilisateur ou l'email est déjà utilisé.";
        }

        // Si aucune erreur, on enregistre l'utilisateur
        if (empty($erreurs)) {
            // Hachage du mot de passe
            $mot_de_passe_hash = password_hash($mot_de_passe, PASSWORD_DEFAULT);

            // Insertion des données
            $sql = "INSERT INTO utilisateurs (nom, prenom, date_naissance, email, sexe, est_artiste, partage_creations, pays, pseudo, mot_de_passe)
                    VALUES (:nom, :prenom, :date_naissance, :email, :sexe, :est_artiste, :partage_creations, :pays, :pseudo, :mot_de_passe)";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([
                'nom' => $nom,
                'prenom' => $prenom,
                'date_naissance' => $date_naissance,
                'email' => $email,
                'sexe' => $sexe,
                'est_artiste' => $est_artiste,
                'partage_creations' => $partage_creations,
                'pays' => $pays,
                'pseudo' => $pseudo,
                'mot_de_passe' => $mot_de_passe_hash
            ]);

            // Création de la session utilisateur
            $_SESSION['id'] = $pdo->lastInsertId();
            $_SESSION['pseudo'] = $pseudo;

            // Redirection vers la page de bienvenue
            header('Location: bienvenue.php');
            exit();
        } else {
            // Affichage des erreurs
            foreach ($erreurs as $erreur) {
                echo "<p style='color:red;'>{$erreur}</p>";
            }
        }
    }
} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}

// Après avoir collecté les erreurs
if (!empty($erreurs)) {
    $_SESSION['erreurs'] = $erreurs;
    header('Location: inscription.php');
    exit();
}

?>