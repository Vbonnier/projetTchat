
<?php 
    require_once("header.php");


    $tbl="utilisateur";

    $query = "SELECT $tbl.user_pseudo FROM $tbl";

    //prepare,execute,store

    $statement=$connexion->query($query);

    // fetch the next row
    while (($row = $statement->fetch(PDO::FETCH_ASSOC)) !== false) {
    echo $row['user_pseudo'] .'<br>';
    }
    //On créé un tableau

    $userArray=[];

    // //Je les met dans un array en json
    // while($displayStmt->fetch()){
        //create array for json
        // $userArray[] = [
        //   "user_pseudo"=>$userID,
         
        // ]
      
    // echo(json_encode($userArray));
?> 