<?php
$host = 'localhost';                // Adresse du serveur MySQL
$dbname = 'gestion_utilisateurs';  // Nom de la base que tu as créée
$user = 'root';                    // Nom d'utilisateur par défaut sur XAMPP
$pass = '';                        // Mot de passe (vide sur XAMPP par défaut)

try {
    // Connexion avec PDO
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $pass);

    // Définir le mode d'erreur de PDO pour qu'il affiche les erreurs
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Tu peux supprimer cette ligne après test
    // echo "Connexion réussie !";
} catch (PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage());
}
