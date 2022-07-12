<?php 
    require_once("header.php");


    $tbl="messagerie";

    $query = "SELECT $tbl.message_contenu FROM $tbl";

    try {
        $statement=$connexion->query($query);

        // fetch the next row
        while (($row = $statement->fetch(PDO::FETCH_ASSOC)) !== false) {
               echo $row;
    
        }
    } catch (PDOException $e) {
        echo "Erreur : ". $e->getMessage();
    }
?> 