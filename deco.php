<?php
require_once("header.php");


if(isset($_GET['deconnexion'])=="oui") {
    session_destroy();
    header("location:index.php");
}

?>






