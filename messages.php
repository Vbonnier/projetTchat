<?php 


require_once("header.php");

// echo 'salut <br>';

    $tbl="messagerie";

    $query = "SELECT $tbl.message_contenu, $tbl.user_id FROM $tbl";


    // $sql="SELECT * FROM article WHERE 1 ORDER BY date DESC";
    $requete=$connexion->prepare($query);
    $requete->execute();    


    while($resultat=$requete->fetch()){

        $messageBDD=$resultat['message_contenu'];   
        $userBDD=$resultat['user_id'];   

        echo  "$userBDD <br> $messageBDD <br>";
    }


    // echo $query;

    // try {
    //     $statement=$connexion->query($query);

    //     // fetch the next row
    //     while (($row = $statement->fetch(PDO::FETCH_ASSOC)) !== false) {
    //                 }
    // } catch (PDOException $e) {
    //     echo "Erreur : ". $e->getMessage();
    // }
?> 