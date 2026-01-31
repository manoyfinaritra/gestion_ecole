<?php
include "../config.php";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Simulate user data for demonstration purposes
    if (isset($_POST['email']) && isset($_POST['password'])) {

        $sql = "SELECT * FROM users WHERE email = ? AND motdepasse = ?";
        $stmt = $connexion->prepare($sql);
        $stmt->execute([$_POST['email'], $_POST['password']]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        
        if ($user) {
            session_start();
            $_SESSION["type_admin"] = $user['type_admin'];

            if ($_SESSION['type_admin'] == "assistant") {
                header("location:" . URL . "view/acceuil_admin.php");
                $_SESSION['nom'] = $user['nom'];
                $_SESSION['prenom'] = $user['prenom'];
            }

            if ($_SESSION['type_admin'] == "enseignant") {
                $_SESSION['nom'] = $user['nom'];
                $_SESSION['prenom'] = $user['prenom'];
                header("location:" . URL . "view/acceuil_enseignant.php");
            }
            if ($_SESSION['type_admin'] == "etudiant") {
                $_SESSION['nom'] = $user['nom'];
                $_SESSION['prenom'] = $user['prenom'];
                header("location:" . URL . "view/acceuil_etudiant.php");
            }
        }
    }
}