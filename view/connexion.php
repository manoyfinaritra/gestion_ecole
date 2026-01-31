<?php
include "../config.php";
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page || Connexion</title>


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
                        <h3 class="mb-1 text-primary">SIGN IN</h3>
                        <?php if (isset($_SESSION['flash_error'])): ?>
                        <div class="alert alert-danger"><?= $_SESSION['flash_error'] ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" data-bs-target="#my-alert"
                                aria-label="Close"></button>
                        </div>
                        <?php unset($_SESSION['flash_error']);
                        endif; ?>
                        <form action="<?= URL ?>data/data.php" method="POST">
                            <div class="mb-3">
                                <input type="email" name="email" class="form-control" placeholder="Email" required>
                            </div>
                            <div class="mb-3">
                                <input type="password" name="password" class="form-control" placeholder="Password"
                                    required>
                            </div>
                            <div class="row">
                                <div class="col-6 text-start">
                                    <div class="form-check ms-2">
                                        <input type="checkbox" class="form-check-input" id="remember">
                                        <label class="form-check-label ms-2" for="remember">Remember</label>
                                    </div>
                                </div>
                                <div class="col-6 text-end">
                                    <a href="forgot.html">Forgot your password?</a>
                                </div>
                            </div>
                            <div class="my-4">
                                <button type="submit" class="btn btn-linear-primary btn-rounded w-100">Sign
                                    in</button>
                            </div>

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