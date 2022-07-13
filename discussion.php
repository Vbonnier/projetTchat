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
                    
                    // setInterval(function(){
                    //     fetch('messages.php')
                    //     .then(response=>response.json())
                    //     .then(data =>{
                    //         document.querySelector('#chatbox').innerHTML = data;
                    //     })
                    // },5000);

                    // setInterval(() => {
                    //     document.querySelector('#chatbox').innerHTML = new Date().toLocaleTimeString();
                    // }, 1000);

                    setInterval(() => {
                        fetch('messages.php').then(response=>response.text()).then(html=>{
                            document.querySelector('#chatbox').innerHTML=html;
                        })
                    }, 5000);


                    // document.querySelector('#usermsg').addEventListener("keyup",() =>{
                        // const formData= new FormData();
                        // formData.append('usermsg'),document.querySelector('#usermsg').value;

                        // const options ={
                        //     method: 'POST',
                        //     body : formData,
                        // };

                        // fetch('ajoutMessage.php',options)
                        // .then(response=>response.text())
                        // .then(data=>{
                        //     console.log(data);
                        // })
                    // });
                        </script>
                </div>

                <form id="formElem" class="col-md-6">
                    <input name="usertxt" type="text" id="usermsg" size="63" />
                    <input class=" btn btn-secondary" name="send" value="usermsg"type="submit">SEND</input>
                </form> 

<script>
                formElem.onsubmit = async (e) => {
        e.preventDefault();
                }
        </script>

            <div class= "col-md-4 ms-3 border border-lightpt-1" name="connected">
                <?php include("listUser.php")?>        
                <p class="display-5 text-center text-light pb-2">En ligne</p>
            </div>
    </script> -->
            
            
        </div> 
    </body>