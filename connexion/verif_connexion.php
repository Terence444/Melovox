<?php
ini_set('session.cookie_httponly', 1);
ini_set('session.cookie_secure', 1);
session_start();
session_start();

// Informations de connexion à la base de données
$host = 'localhost';
$dbname = 'melovox';
$username = 'root';
$password = '';    


try {
    // Connexion à la base de données avec PDO
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    // Configuration des erreurs PDO
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Vérification que le formulaire a été soumis
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Récupération des données du formulaire
        $email = trim($_POST['email']);
        $password = $_POST['password'];

        // Préparation de la requête pour récupérer l'utilisateur
        $stmt = $pdo->prepare("SELECT * FROM utilisateurs WHERE email = :email");
        $stmt->execute(['email' => $email]);
        $user = $stmt->fetch();

        if ($user && password_verify($password, $user['mot_de_passe'])) {
            // Authentification réussie
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['pseudo'] = $user['pseudo'];
            $_SESSION['est_artiste'] = $user['est_artiste'];

            // Redirection basée sur le statut d'artiste
            if ($user['est_artiste']) {
                header('Location: espace_artiste.php');
            } else {
                header('Location: profile.php');
            }
            exit();
        } else {
            // Authentification échouée
            echo "Adresse email ou mot de passe incorrect.";
        }
    }
} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}
?>