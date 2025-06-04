<?php
session_start();
require_once 'includes/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    if (empty($username) || empty($password)) {
        echo "Veuillez remplir tous les champs.";
        exit;
    }

    // Requête sécurisée
    $stmt = $pdo->prepare("SELECT * FROM utilisateurs WHERE nom = :username AND actif = 1");
    $stmt->execute(['username' => $username]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && $password === $user['mot_de_passe']) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['nom'];
        $_SESSION['role_id'] = $user['role_id'];

        // Redirection vers home.php
        header("Location: home.php");
        exit;
    } else {
        echo "Nom d'utilisateur ou mot de passe incorrect.";
        exit;
    }
} else {
    echo "Méthode non autorisée.";
    exit;
}
