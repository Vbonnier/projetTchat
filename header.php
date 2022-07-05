<?php

session_start();
E

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