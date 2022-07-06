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
    


    <!-- Formulaire d'inscription  -->
    <div class="container py-5 bg-light">
            <h1 class="display-3 text-dark text-center">FOMULAIRE D'INSCRIPTION</h1>

    <form method ="POST">
        <div class="row">

        <div class="col-md-6">
            <div class="bg-success ps-2 pe-2 pt-1 pb-4">
            <label for="exampleInputNom" class="form-label text-white ">NOM</label>
            <input type="text" class="form-control" name="nom" placeholder="nom" required>
            </div>
        </div>

        <div class="col-md-6">
        <div class="bg-success ps-2 pe-2 pt-1 pb-4">
            <label for="exampleInputPrenom" class="form-label text-white">Prénom</label>
            <input type="text" class="form-control" name="prenom" placeholder="prénom" required>
            </div>
        </div>

        <div class="col-md-6">
        <div class="bg-success ps-2 pe-2 pt-1 pb-4">
            <label for="exampleInputPseudo" class="form-label text-white">Pseudo</label>
            <input type="text" class="form-control" name="pseudo" placeholder="pseudo" required>
            </div>
        </div>

        <div class="col-md-6">
        <div class="bg-success ps-2 pe-2 pt-1 pb-4">
            <label for="exampleInputTel" class="form-label text-white">Téléphone</label>
            <input type="text" class="form-control" name="phone" placeholder="téléphone" required>
            </div>
        </div>

        <div class="col-md-6">
        <div class="bg-success ps-2 pe-2 pt-1 pb-4">
            <label for="exampleInputDOB" class="form-label text-white">Date de Naissance</label>
            <input type="date" class="form-control" name="dob"placeholder="dateDeNaissance" required>
            </div>
        </div>

        <div class="col-md-6">
        <div class="bg-success ps-2 pe-2 pt-1 pb-4">
            <label for="exampleInputEmail" class="form-label text-white">Email</label>
            <input type="email" class="form-control" name="email" placeholder="email" required>
            </div>
        </div>

        <div class="col-md-6">
        <div class="bg-success ps-2 pe-2 pt-1 pb-4">
            <label for="exampleInputMdP" class="form-label text-white">Mot de passe</label>
            <input type="password" class="form-control" name="mdp" placeholder="MdP" required>
            </div>
        </div>    

        <div class="col-md-6">
        <div class="bg-success ps-2 pe-2 pt-1 pb-4">
            <label for="exampleInputGroupe" class="form-label text-white">Groupe</label>
            <input type="text" id="#group" class="form-control" name="groupe" placeholder="groupe">
            </div>
        </div>

        <div class="col-md-6">
        <div class="bg-success ps-2 pe-2 pt-1 pb-4">
            <label for="exampleInputQuestion" class="form-label text-white">Question secrète</label>
            <input type="text" class="form-control" name="question" placeholder="question secrète" required>
            <button type="submit" class="btn btn-lg btn-primary" name="bouton1" >valider</button>
        </div>

        </div>
        
       
            

    </form>
    </div>
    </div>

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
            <button type="submit" class="btn btn-lg btn-primary" name="bouton2">Connexion</button>
        </div>
        </div>
            

        </form>
        </div>
        </div>
</body>
</html>



<?php

include_once("header.php");






?>