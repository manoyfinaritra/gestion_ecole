<?php
include "../config.php";
session_start();
if (!isset($_SESSION['type_admin']) || $_SESSION['type_admin'] != 'assistant') {
    header("location:" . URL . "view/connexion.php");
    exit();
}    ?>
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
            <div class="col text-center bg-primary " id="etudiant">
                <h5 class=" text-white">Etudiant</h5>
            </div>
            <div class="col text-center  bg-secondary" id="enseignant">
                <h5 class=" text-white">Enseignant</h5>
            </div>
        </div>
    </div>



    <div class=" container-fluid pointer-event" id="etudiant_section">
        <div class="row">
            <div class="col">
                <h1>Ajouter etudiant</h1>
                <form class=" mt-3 border p-3" action="<?= URL ?>data/data.php" method="post">
                    <div class="mb-2">
                        <label for="nom" class="form-label">Nom :</label>
                        <input type="nom" class="form-control" id="nom" aria-describedby="nomhelp"
                            placeholder="entrez votre nom" name="nom">

                    </div>
                    <div class="mb-2">
                        <label for="prenom" class="form-label">prenom :</label>
                        <input type="prenom" class="form-control" id="prenom" aria-describedby="prenomhelp"
                            placeholder="entrez votre prenom" name="prenom">

                    </div>
                    <div class="mb-2">
                        <label for="email" class="form-label">email :</label>
                        <input type="email" class="form-control" id="email" aria-describedby="emailhelp"
                            placeholder="entrez votre email" name="email">

                    </div>

                    <div class="mb-2">
                        <label for="sexe" class=" form-label">Genre :</label>
                        <select name="sexe" id="sexe" class=" form-select" id="sexe" name="genre">
                            <option value="" selected disabled>Selectionez votre genre</option>
                            <option value="homme">Homme</option>
                            <option value="femme">Femme</option>
                        </select>

                    </div>
                    <div class="mb-2">
                        <label for="classe" class=" form-label">Classe :</label>
                        <select name="classe" id="classe" class=" form-select" id="classe" name="classe">
                            <option value="" selected disabled>Selectionez votre classe</option>
                            <option value="second">second</option>
                            <option value="premiere">premiere</option>
                            <option value="terminal">terminal</option>
                        </select>

                    </div>
                    <div class="mb-2">
                        <label for="type_admin" class=" form-label">Type admin :</label>
                        <select name="type_admin" id="type_admin" class=" form-select" name="type_admin">
                            <option value="" selected disabled>Selectionez l'adminitration</option>
                            <option value="enseignant">Enseignant</option>
                            <option value="etudiant">Etudiant</option>
                        </select>

                    </div>
                    <div class="mb-2">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1"
                            placeholder="entrez votre mot de passe" name="motdepasse">
                    </div>


                    <button type="submit" class="btn btn-primary" name="ajout_etudiant">Ajouter</button>
                </form>
            </div>
            <div class="col">
                <?php include "../data/data.php"; ?>
                <div class=" table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Nom</th>
                                <th>Prenom</th>
                                <th>email</th>
                                <th>Genre</th>
                                <th>Classe</th>
                                <th>action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($all_etudiants as $element) : ?>
                            <tr>
                                <td><?= $element['nom'] ?></td>
                                <th><?= $element['prenom'] ?></th>
                                <td><?= $element['email'] ?></td>
                                <td><?= $element['genre'] ?></td>
                                <td><?= $element['classe'] ?></td>
                                <td>
                                    <a href="" class=" btn btn-danger">delete</a>
                                    <a href="" class="btn btn-success">edit</a>
                                </td>
                            </tr>
                            <?php endforeach ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class=" container-fluid" style="display: none;" id="enseignant_section">
        <div class="row">
            <div class="col">
                <h1>page enseignant</h1>
            </div>
        </div>
    </div>
    <script src="<?= URL ?>assets/js/jquery.js"></script>
    <script src="<?= URL ?>assets/js/bootstrap.js"></script>
    <script src="<?= URL ?>assets/js/acceuil_admin.js"></script>
</body>

</html>