<?php
    include_once("header.php");


    if(isset($_POST['action'])=='inscription' && !empty($_POST['pseudo']) && !empty($_POST['mdp']) && !empty($_POST['email']) && !empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['phone']) && !empty($_POST['question'])) {
        try{
    $sql="INSERT INTO utilisateur (user_pseudo,user_pass,user_mail,user_name,user_forename,user_phone,user_question) VALUES (:pseudo,:mdp,:email,:nom,:prenom,:phone,:question)";
    $requete=$connexion->prepare($sql);
    $requete->execute(array(
        ':pseudo' => $_POST['pseudo'],
        ':mdp' =>password_hash( $_POST['mdp'],PASSWORD_DEFAULT),
        ':email' => $_POST['email'],
        ':nom' => $_POST['nom'],
        ':prenom' => $_POST['prenom'],
        ':phone' => $_POST['phone'],
        ':question' => $_POST['question']

        )
    );
    header('location:finalisation.php');
        }
        catch(PDOException $e){
            die("Erreur : ". $e->getMessage());
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
    crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
</head>
<body>
<body>
    
    
    <div class="container py-5 bg-secondary position-relative opacity-75">
            <h1 class="display-3 text-light text-center">FOMULAIRE D'INSCRIPTION</h1>

    <form method ="POST">
        <div class="row">

        <div class="col-md-6">
            <div class="bg-secondary ps-2 pe-2 pt-1 pb-4">
            <label for="exampleInputNom" class="form-label text-white ">NOM</label>
            <input type="text" class="form-control" name="nom" placeholder="nom" required>
            </div>
        </div>

        <div class="col-md-6">
        <div class="bg-secondary ps-2 pe-2 pt-1 pb-4">
            <label for="exampleInputPrenom" class="form-label text-white">Pr??nom</label>
            <input type="text" class="form-control" name="prenom" placeholder="pr??nom" required>
            </div>
        </div>

        <div class="col-md-6">
        <div class="bg-secondary ps-2 pe-2 pt-1 pb-4">
            <label for="exampleInputPseudo" class="form-label text-white">Pseudo</label>
            <input type="text" class="form-control" name="pseudo" placeholder="pseudo" required>
            </div>
        </div>

        <div class="col-md-6">
        <div class="bg-secondary ps-2 pe-2 pt-1 pb-4">
            <label for="exampleInputTel" class="form-label text-white">T??l??phone</label>
            <input type="text" class="form-control" name="phone" placeholder="t??l??phone" required>
            </div>
        </div>

        <div class="col-md-6">
        <div class="bg-secondary ps-2 pe-2 pt-1 pb-4">
            <label for="exampleInputDOB" class="form-label text-white">Date de Naissance</label>
            <input type="date" class="form-control" name="dob"placeholder="dateDeNaissance" required>
            </div>
        </div>

        <div class="col-md-6">
        <div class="bg-secondary ps-2 pe-2 pt-1 pb-4">
            <label for="exampleInputEmail" class="form-label text-white">Email</label>
            <input type="email" class="form-control" name="email" placeholder="email" required>
            </div>
        </div>

        <div class="col-md-6">
        <div class="bg-secondary ps-2 pe-2 pt-1 pb-4">
            <label for="exampleInputMdP" class="form-label text-white">Mot de passe</label>
            <input type="password" class="form-control" name="mdp" placeholder="MdP" required>
            </div>
        </div>    

        <div class="col-md-6">
        <div class="bg-secondary ps-2 pe-2 pt-1 pb-4">
            <label for="exampleInputGroupe" class="form-label text-white">Groupe</label>
            <input type="text" id="#group" class="form-control" name="groupe" placeholder="groupe" required>
            </div>
        </div>

        <div class="col-md-6">
        <div class="bg-secondary ps-2 pe-2 pt-1 pb-4">
            <label for="exampleInputQuestion" class="form-label text-white">Question secr??te</label>
            <input type="text" class="form-control" name="question" placeholder="question secr??te" required>
            <button type="submit" class="btn btn-lg btn-primary" name="inscription" >valider</button>
            <input type="hidden" name="action" value="inscription">

        </div>

        </div>
        
       
            

    </form>
    </div>
    </div>

</body>
</html>