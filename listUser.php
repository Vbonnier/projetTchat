
<?php 
    require_once("header.php");


    $tbl="utilisateur";

    $query = "SELECT $tbl.user_pseudo FROM $tbl";

    // prepare, execute, store
    try {
        $statement=$connexion->query($query);

        // fetch the next row
        while (($row = $statement->fetch(PDO::FETCH_ASSOC)) !== false) {
            echo   '<div class="col-md-12 mb-2 border border-light bg-light " >  
            <img src="iconPerson.png" class="img-fluid w-25 p-1">'.$row['user_pseudo'].'
            </div> ';
    
        }
    } catch (PDOException $e) {
        echo "Erreur : ". $e->getMessage();
    }
?> 