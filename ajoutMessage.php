<?php

$moi=1;

// Demander comment 
if(isset($_POST['action'])=='add_comment'){
    $sql="INSERT INTO messagerie(message_contenu,user_id) VALUES(:usermsg,$moi)";
    $requete=$connexion->prepare($sql);
    $requete->execute(array(    
        ':usermsg' => $_POST['message_contenu'],
        $moi['user_id'] => $_POST['user_id']
    )
    );
    }
?>