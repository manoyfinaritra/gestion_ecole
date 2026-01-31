<?php
include "../config.php";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Simulate user data for demonstration purposes
    if (isset($_POST['email']) && isset($_POST['password'])) {
        $email = trim(htmlspecialchars($_POST['email']));
        $password = trim(htmlspecialchars($_POST['password']));

        $sql = "SELECT * FROM users WHERE email = ?";
        $stmt = $connexion->prepare($sql);
        $stmt->execute([$email]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($user) {
            if (password_verify($password, $user['motdepasse'])) {
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
            } else {
                session_start();
                $_SESSION['flash_error'] = "Mot de passe incorrect.";
                header("location:" . URL . "view/connexion.php");
                exit();
            }
        }
    }
}
