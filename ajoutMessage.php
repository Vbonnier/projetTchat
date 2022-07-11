<?php


if(isset($_POST['action'])=='add_comment'){
    $sql="INSERT INTO messagerie(msg_dh_utc,message_contenu,Id_Utilisateur) VALUES(date,:usermsg,$id)";
    $requete=$connexion->prepare($sql);
    $requete->execute(array(
        ':titre' => $_POST['titre'],
        ':body' => $_POST['body']
    )
    );


    $message = "";
    echo json_encode($message);

    }
?>