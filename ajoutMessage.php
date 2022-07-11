<?php


if(isset($_POST['action'])=='add_comment'){
    $sql="INSERT INTO messagerie(message_contenu,user_id) VALUES(:usermsg,$id)";
    $requete=$connexion->prepare($sql);
    $requete->execute(array(    
        ':usermsg' => $_POST['message_contenu'],
        $id => $_POST['user_id']
    )
    );


    // $message = "";
    // echo json_encode($message);

    }
?>