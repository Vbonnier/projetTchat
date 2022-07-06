<?php if(isset($_POST["connexion"]))
    {
        
        $mail = $_POST["emailCo"];
        $pass = $_POST["mdpCo"];
        
        $sql = "SELECT * FROM utilisateur WHERE user_mail=? AND user_pass=?";
        $requete = $connexion->prepare($sql);
        $requete->execute(array($mail,$pass));
        
        $moi = $requete->fetchALL();
        // var_dump ($moi);
        
        if(empty($moi)){
            echo "Log error";
            header('location:index.php');
        }else{
            echo 'Tu es connecté';
            session_start();
            $_SESSION["connecte"]=1;
            header('Location:discussion.php');

        }

    }
    ?>