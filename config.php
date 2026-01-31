<?php
const URL = 'http://localhost/gestion_ecole/';
$connexion = new PDO('mysql:host=localhost;dbname=gestion_ecole', 'root', '');
try {
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>