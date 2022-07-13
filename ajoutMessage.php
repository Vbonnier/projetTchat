<?php

require_once("header.php");


//     //Envoi du message dans la base de données 
//     // A compléter



$message=$_POST["usertxt"];
echo $message;

    $query = "INSERT INTO messagerie (message_contenu) VALUES (:message_contenu)";
    try {
    $requete=$connexion->prepare($query);
    $requete->execute(array(
        ":message_contenu" => $message,
    )); 
    echo "Message : Envoyé"  ;

}catch(PDOException $e){
    echo ("Erreur :" .$e-> getMessage());
}
//    echo '{"statut_code":"true", "statut_message":"Le message a bien été envoyé","nouvel_id":"1"}';

?>