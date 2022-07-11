window.onload = () => {
    // On va chercher la zone de texte
    let texte = document.querySelector("#usermsg");
    texte.addEventListener("keyup", verifEntree,)

    // On va chercher le bouton "valid"
    let valid = document.querySelector("#valid");
    valid.addEventListener("click",ajoutMessage())
}


function verifEntree(e){    
    if(e.key == "Enter"){
        // e.preventDefault();
        ajoutMessage()
    }
}




function ajoutMessage(){
    // On récupère le message

    let message = document.querySelector("#usermsg").value 
    
    //On vérifie si le message n'est pas vide

    if(message != ""){
        //On crée un objet JS

        let donnees={}
        donnees["message"]= message;

        console.log(donnees)};

        fetch('listUser.php')
    .then(
    function(response) {
        if (response.status !== 200) {
        console.log('Looks like there was a problem. Status Code: ' +
            response.status);
        return;
        };

        // Examine the text in the response
        response.json()
        .then(function(data) {
        console.log(data);
        });
    }
    )
    .catch(function(err) {
    console.log('Fetch Error :-S', err);
    });

    }

