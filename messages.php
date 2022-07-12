<?php

<?php 
    require_once("header.php");


    $tbl="messagerie";

    $query = "SELECT $tbl.message_contenu FROM $tbl";

    try {
        $statement=$connexion->query($query);
    
   
    while (($row = $statement->fetch(PDO::FETCH_ASSOC)) !== false) {
    echo $row;
    }

    

    $userArray=[];

    // //Je les met dans un array en json
    // while($displayStmt->fetch()){
        //create array for json
        // $userArray[] = [
        //   "user_pseudo"=>$userID,
         
        // ]
      
    // echo(json_encode($userArray));
?> 



?>