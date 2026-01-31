<?php
// 1. Détection automatique de la racine du site (URL)
// Utile pour les redirections et les liens HTML (CSS, images)
$protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http";
$host = $_SERVER['HTTP_HOST'];
$project_path = "/gestion_ecole/"; // À modifier selon le nom de ton dossier

define('URL', $protocol . "://" . $host . $project_path);

// 2. Définition des chemins de dossiers (Système de fichiers)
// Utile pour les fonctions include et require
define('ROOT_PATH', __DIR__ . DIRECTORY_SEPARATOR);
define('INC_PATH', ROOT_PATH . 'includes' . DIRECTORY_SEPARATOR);

// Exemple d'utilisation :
// include(INC_PATH . 'db.php');

$connexion = new PDO('mysql:host=localhost;dbname=gestion_ecole', 'root', '');
try {
$connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
echo "Connection failed: " . $e->getMessage();
}
?>