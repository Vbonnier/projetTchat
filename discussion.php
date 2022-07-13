<?php

include_once("header.php");
var_dump($_SESSION);
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
                        
                    <div id="chatbox" >
                            

                        <script>    
                    setInterval(() => {
                        fetch('messages.php').then(response=>response.text()).then(html=>{
                            document.querySelector('#chatbox').innerHTML=html;
                        })
                    }, 2000);
                    
                        </script>
                </div>

                <form id="formElem" class="col-md-6">
                    <input name="usertxt" type="text" id="usermsg" size="63" />
                    <button type="submit" name="button" id="btn" class=" bg-secondary border border-secondary w-50"><a href="deco.php?deconnexion=oui" class="attribut text-light">Déconnexion</a></button>
                </form> 

<script>
                formElem.onsubmit = async (e) => {
        e.preventDefault();
                }
        </script>



</div> 
<div class= "col-md-4 ms-3 border border-lightpt-1 w-500 overflow-scroll" style="height:600px;" name="connected">
<p class="display-5 text-center text-light pb-2">En ligne</p>
    <?php include("listUser.php")?> 
            </div>  
    
    </body>