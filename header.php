<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>header</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
    crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
</head>
<body>
    
</body>
</html>
<?php

session_start();


DEFINE("BDD", "tchat");
DEFINE("USER", "root");
DEFINE("HOST", "localhost");
DEFINE("PASSW", "");
DEFINE("CHARSET", "utf8mb4");

// On teste la connexion à la BDD
try {
    $connexion= new PDO ("mysql:host=".HOST.";dbname=".BDD.";charset=utf8", USER, PASSW, array(PDO::ATTR_ERRMODE => PDO:: ERRMODE_EXCEPTION));
}
catch (PDOException $exception) {
    die('Erreur fonction connexion : ' . $exception->getMessage());
}


?>