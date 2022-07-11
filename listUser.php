
<?php 
    require_once("header.php");


    $tbl="utilisateur";

    $query = "SELECT $tbl.user_pseudo FROM $tbl";

    //prepare,execute,store

    $statement=$connexion->query($query);

    // fetch the next row
    while (($row = $statement->fetch(PDO::FETCH_ASSOC)) !== false) {
        echo   '<div class="col-md-12 mb-2 border border-light bg-light " >  
        <img src="iconPerson.png" class="img-fluid w-25 p-1">'.$row['user_pseudo'].'
        </div> ';
   
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