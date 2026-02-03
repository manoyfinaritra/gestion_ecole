<?php
include "../config.php";
session_start();
if (!isset($_SESSION['type_admin']) || $_SESSION['type_admin'] != 'assistant') {
    header("location:" . URL . "view/connexion.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?= URL ?>assets/css/bootstrap.css">
</head>

<body>
    <?php include "../view/navbar.php" ?>

    <div class="container-fluid">
        <div class="row">
            <div class="col text-center bg-primary" id="etudiant">
                <h5 class="text-white">Etudiant</h5>
            </div>
            <div class="col text-center bg-secondary" id="enseignant">
                <h5 class="text-white">Enseignant</h5>
            </div>
        </div>
    </div>

    <div class="container-fluid pointer-event" id="etudiant_section">
        <div class="row">
            <div class="col">
                <h1>Ajouter etudiant</h1>
                <form class="mt-3 border p-3" action="<?= URL ?>data/data.php" method="post">

                    <!-- ===== MESSAGE ERREUR ===== -->
                    <?php if (isset($_SESSION['erreur'])) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?= $_SESSION['erreur'] ?>
                        </div>
                        <?php unset($_SESSION['erreur']); ?>
                    <?php endif; ?>

                    <div class="mb-2">
                        <label for="nom" class="form-label">Nom :</label>
                        <input type="text" class="form-control" id="nom"
                            placeholder="entrez votre nom" name="nom">
                    </div>

                    <div class="mb-2">
                        <label for="prenom" class="form-label">Prenom :</label>
                        <input type="text" class="form-control" id="prenom"
                            placeholder="entrez votre prenom" name="prenom">
                    </div>

                    <div class="mb-2">
                        <label for="email" class="form-label">Email :</label>
                        <input type="email" class="form-control" id="email"
                            placeholder="entrez votre email" name="email">
                    </div>

                    <div class="mb-2">
                        <label for="sexe" class="form-label">Genre :</label>
                        <!-- ===== L'ID SE REPÈTE DEUX FOIS ===== -->
                        <select name="genre" id="sexe" class="form-select">
                            <option value="" selected disabled>Selectionez votre genre</option>
                            <option value="homme">Homme</option>
                            <option value="femme">Femme</option>
                        </select>
                    </div>

                    <div class="mb-2">
                        <label for="classe" class="form-label">Classe :</label>
                        <select name="classe" id="classe" class="form-select">
                            <option value="" selected disabled>Selectionez votre classe</option>
                            <option value="second">Second</option>
                            <option value="premiere">Premiere</option>
                            <option value="terminal">Terminal</option>
                        </select>
                    </div>

                    <div class="mb-2">
                        <label for="type_admin" class="form-label">Type admin :</label>
                        <select name="type_admin" id="type_admin" class="form-select">
                            <option value="" selected disabled>Selectionez l'adminitration</option>
                            <option value="enseignant">Enseignant</option>
                            <option value="etudiant">Etudiant</option>
                        </select>
                    </div>

                    <div class="mb-2">
                        <label for="motdepasse" class="form-label">Password</label>
                        <input type="password" class="form-control" id="motdepasse"
                            placeholder="entrez votre mot de passe" name="motdepasse">
                    </div>

                    <button type="submit" class="btn btn-primary" name="ajout_etudiant">Ajouter</button>
                </form>
            </div>

            <div class="col">
                <?php include "../data/data.php"; ?>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Nom</th>
                                <th>Prenom</th>
                                <th>Email</th>
                                <th>Genre</th>
                                <th>Classe</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($all_etudiants as $element) : ?>
                            <tr>
                                <td><?= $element['nom'] ?></td>
                                <td><?= $element['prenom'] ?></td>
                                <td><?= $element['email'] ?></td>
                                <td><?= $element['genre'] ?></td>
                                <td><?= $element['classe'] ?></td>
                                <td>
                                    <a href="" class="btn btn-danger">Delete</a>
                                    <a href="" class="btn btn-success">Edit</a>
                                </td>
                            </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid" style="display: none;" id="enseignant_section">
        <div class="row">
            <div class="col">
                <h1>Page enseignant</h1>
            </div>
        </div>
    </div>

    <script src="<?= URL ?>assets/js/jquery.js"></script>
    <script src="<?= URL ?>assets/js/bootstrap.js"></script>
    <script src="<?= URL ?>assets/js/acceuil_admin.js"></script>
</body>

</html>