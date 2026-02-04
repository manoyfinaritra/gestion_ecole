<?php
include "../config.php";
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Récupération de compte</title>
    <link rel="stylesheet" href="<?= URL ?>assets/Bootstrap/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= URL ?>assets/Bootstrap/fontawesome/css/all.css">
    <link rel="stylesheet" href="<?= URL ?>assets/Bootstrap/lineawesome/css/line-awesome.min.css">
    <link rel="stylesheet" href="<?= URL ?>assets/Bootstrap/css/Dark.css">
    <link rel="stylesheet" href="<?= URL ?>assets/Bootstrap/css/White.css">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-7 col-lg-5">
                <div class="card">
                    <div class="card-body">
                        <h3 class="mb-4 text-primary">ACCOUNT RECOVERY</h3>
                        <p class="mb-4">Enter your e-mail address below to reset your password</p>
                        
                        <?php if (isset($_SESSION['flash_success'])): ?>
                        <div class="alert alert-success">
                            <?= $_SESSION['flash_success'] ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        <?php unset($_SESSION['flash_success']); endif; ?>

                        <?php if (isset($_SESSION['flash_error'])): ?>
                        <div class="alert alert-danger">
                            <?= $_SESSION['flash_error'] ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        <?php unset($_SESSION['flash_error']); endif; ?>

                        <form action="<?= URL ?>data/forgot_password.php" method="POST">
                            <div class="mb-3">
                                <input type="email" name="email" class="form-control" placeholder="Email" required>
                            </div>
                            <div class="my-4">
                                <button type="submit" class="btn btn-linear-primary btn-rounded w-100">Submit</button>
                            </div>
                            <p><a href="<?= URL ?>view/connexion.php" id="create_account">Already have an account? Login!</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="<?= URL ?>assets/js/bootstrap.js"></script>
    <script src="<?= URL ?>assets/js/script.js"></script>
</body>
</html>