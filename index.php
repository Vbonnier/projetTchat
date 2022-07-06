
<?php

include_once("header.php");
include("connexion.php");


?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>connexion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
    crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
</head>
<body>
    

    <!-- Formulaire de connexion -->
    <div class="container py-5 bg-light">
        <div class="row">
    <h1 class="display-3 text-dark text-center">FORMULAIRE DE CONNEXION</h1>
    <form method="post">

        <div class="col-md-6">
        <div class="bg-success ps-2 pe-2 pt-1 pb-4 ">
            <label for="exampleInputEmail" class="form-label text-white ">Email</label>
            <input type="email" class="form-control" name="emailCo" placeholder="email">
        </div>
        </div>

        <div class="col-md-6">
        <div class="bg-success ps-2 pe-2 pt-1 pb-4">
        <label for="exampleInputMdP" class="form-label text-white ">MdP</label>
            <input type="password" class="form-control" name="mdpCo" placeholder="MdP" required>
            <button type="submit" class="btn btn-lg btn-primary" name="connexion">Connexion</button>
        </div>
        </div>
            

        </form>
        </div>
        </div>
</body>
</html>

