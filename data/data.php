<?php
include "../config.php";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
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

    if (isset($_POST['deconnexion'])) {
        session_start();
        session_unset();
        session_destroy();
        header("location: ../index.php");
    }

    // ===== VALIDATION AVANT INSERTION =====
    if (isset($_POST['ajout_etudiant'])) {
        $nom = trim(htmlspecialchars(($_POST['nom'])));
        $prenom = trim(htmlspecialchars(($_POST['prenom'])));
        $email = trim(htmlspecialchars(($_POST['email'])));
        $genre = trim(htmlspecialchars(($_POST['genre'])));
        $classe = trim(htmlspecialchars(($_POST['classe'])));
        $type_admin = trim(htmlspecialchars(($_POST['type_admin'])));
        $motdepasse = trim(htmlspecialchars(($_POST['motdepasse'])));

        // Vérifier si tous les champs sont remplis
        if (empty($nom) || empty($prenom) || empty($email) || empty($genre) || empty($classe) || empty($type_admin) || empty($motdepasse)) {
            session_start();
            $_SESSION['erreur'] = "Veuillez remplir tous les champs avant de valider.";
            header("location:" . URL . "view/acceuil_admin.php");
            exit();
        }

        // Si tout est OK, on fait l'insertion
        $motdepasse_hash = password_hash($motdepasse, PASSWORD_DEFAULT);
        addUsers($nom, $prenom, $email, $motdepasse_hash, $type_admin, $connexion);
        $sql = "INSERT INTO etudiant (nom,prenom,email,genre,classe,type_admin,motdepasse) VALUE (?,?,?,?,?,?,?)";
        $stmt = $connexion->prepare($sql);
        $stmt->execute([$nom, $prenom, $email, $genre, $classe, $type_admin, $motdepasse_hash]);
        header("location:" . URL . "view/acceuil_admin.php");
        exit();
    }
    // ===== FIN VALIDATION =====
}

function addUsers($nom, $prenom, $email, $motdepasse, $type_admin, $connexion)
{
    $sql = "INSERT INTO users (nom,prenom,email,motdepasse,type_admin) VALUE (?,?,?,?,?)";
    $stmt = $connexion->prepare($sql);
    $stmt->execute([$nom, $prenom, $email, $motdepasse, $type_admin]);
}

function select_etudiants($connexion)
{
    $sql = "SELECT * FROM etudiant";
    $stmt = $connexion->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

$all_etudiants = select_etudiants($connexion);
?>