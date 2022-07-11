<?php

include_once("header.php");
?>


<!DOCTYPE html>
<html lang="fr">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Discussion</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
    crossorigin="anonymous">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js"></script>
    
    <link rel="stylesheet" href="style.css">
    <script src="tchat.js"></script>

    <?php include("listUser.php")?>

</head>
<body>


<div class="container d-flex flex-md-row flex-column">
    <div class="row">
        <div class="col-md-9" id="wrapper" >
            <div id="menu">
                <p class="welcome">Welcome, <b></b></p>
                <p class="logout alert-warning"><a id="exit" href="#">Exit Chat</a></p>
                <div style="clear:both"></div>
            </div>
     
            <div id="chatbox"></div>
            <div class="col-md-6">
            <div name="message" action="">
                <input name="usermsg" type="text" id="usermsg" size="63" />
                <button class=" btn btn-secondary" id="valid" >SEND</button>
            </div>
            </div>
        </div>
    </div> 
     
     

    <div class= "col-md-4 ms-3 border border-lightpt-1 ">
        <p class="display-5 text-center text-light pb-2">En ligne</p>

        <div class="col-md-12 mb-2 border border-light bg-light " >  
        <img src="iconPerson.png" class="img-fluid w-25 p-1">
        </div>

        <div class="col-md-12 mb-2 border border-light bg-light" >  
        <img src="iconPerson.png" class="rounded-circle w-25 p-1" >
        </div>

        <div class="col-md-12 mb-2 border border-light bg-light" >  
        <img src="iconPerson.png" class="rounded-circle w-25 p-1" >
        </div>

        <div class="col-md-12 mb-2 border border-light bg-light" >  
        <img src="iconPerson.png" class="rounded-circle w-25 p-1" >
        </div>

        <div class="col-md-12 mb-2 border border-light bg-light">  
        <img src="iconPerson.png" class="rounded-circle w-25 p-1" >
        </div>

        <div class="col-md-12 mb-2 border border-light bg-light" >  
        <img src="iconPerson.png" class="rounded-circle w-25 p-1" >
        </div>
        
    </div>

        

</div> 


<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js"></script>
<script type="text/javascript">
// jQuery Document
// $(document).ready(function(){
 
// });
</script>
</body>