
<?php

session_start();

// var_dump($_SESSION);

DEFINE("BDD", "chatzv");
DEFINE("USER", "root");
DEFINE("HOST", "localhost");
DEFINE("PASSW", "");
DEFINE("CHARSET", "utf8mb4");

// DEFINE("BDD", "dbs8004369");
// DEFINE("USER", "dbu1013101");
// DEFINE("HOST", "db5009437223.hosting-data.io");
// DEFINE("PASSW", "f7dM5CE6r");
// DEFINE("CHARSET", "utf8mb4");
// On teste la connexion à la BDD
try {
    $connexion= new PDO ("mysql:host=".HOST.";dbname=".BDD.";charset=utf8", USER, PASSW, array(PDO::ATTR_ERRMODE => PDO:: ERRMODE_EXCEPTION));
}
catch (PDOException $exception) {
    die('Erreur fonction connexion : ' . $exception->getMessage());
}


?>