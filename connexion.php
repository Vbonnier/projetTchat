<?php 

if(isset($_POST["connexion"]))
    {
        
        $mail = $_POST["emailCo"];
        $pass = $_POST["mdpCo"];
        
        $sql = "SELECT * FROM utilisateur WHERE user_mail=?";
        $requete = $connexion->prepare($sql);
        $requete->execute(array($mail));
        
        $moi = $requete->fetch();
        
        if(empty($moi)){
            header('Location:index.php');
        }
        else if
            (!password_verify($pass , $moi["user_pass"])){
                header('Location:index.php');
                echo "mdp invalide";
                echo $moi['user_pass'];
            }
        else{
                session_start();
                $_SESSION["connecte"]=1;
                $_SESSION["user"] = $moi;
                header('Location:discussion.php');
            }
        }
    
    
        
    ?>