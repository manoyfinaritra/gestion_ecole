<?php include "./url.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page || Connexion</title>
    <link rel="stylesheet" href="<?= URL ?>assets/css/bootstrap.css">
    <link rel="stylesheet" href="<?= URL ?>assets/css/bs-icons/icons.css">
    <link rel="stylesheet" href="<?= URL ?>assets/css/connexion.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3 form-container mt-5 p-4 shadow-lg">
                <form action="">
                    <h3 class="text-center">Connexion</h3>
                    <div class="form-group">
                        <label for="email" class=" form-label">Email :</label>
                        <input type="text" class=" form-control" name="email" placeholder="entrer votre email">
                    </div>
                    <div class="form-group">
                        <label for="motdepasse" class=" form-label">Mot de passe :</label>
                        <input type="password" class=" form-control" name="motdepasse"
                            placeholder="entrer votre mot de passe">
                    </div>
                    <div class=" mt-3">
                        <button class=" btn btn-primary">Connexion</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>