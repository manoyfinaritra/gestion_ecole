<?php session_start(); 
include "../config.php"    ?>
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
            <div class="col text-center border bg-primary">
                <h4 class=" text-white">Etudiant</h4>
            </div>
            <div class="col text-center border bg-secondary">
                <h4 class=" text-white">Enseignant</h4>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-6">
                <form class=" mt-3 border p-3">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <script src="<?= URL ?>assets/js/bootstrap.js"></script>
</body>

</html>