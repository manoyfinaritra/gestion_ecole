<?php include "../url.php" ?>
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
                        <h3 class="mb-5">SIGN IN</h3>
                        <form>
                            <div class="mb-3">
                                <input type="email" name="email" class="form-control" placeholder="Email" required>
                            </div>
                            <div class="mb-3">
                                <input type="password" name="password" class="form-control" placeholder="Password" required>
                            </div>
                            <div class="row">
                                <div class="col-6 text-start">
                                    <div class="form-check ms-2">
                                        <input type="checkbox" class="form-check-input" id="remember">
                                        <label class="form-check-label ms-2" for="remember">Remember</label>
                                    </div>
                                </div>
                                <div class="col-6 text-end">
                                    <a href="<?= URL ?>view/forgot.php">Forgot your password?</a>
                                </div>
                            </div>
                            <div class="my-4">
                                <a href="../index.html" class="btn btn-linear-primary btn-rounded w-100">Sign in</a>
                            </div>	
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
<script scr="assets/js/script.js"></script>
</body>

</html>