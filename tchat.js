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
        ajoutMessage();
        reinit()

    }
}

function reinit() 
{
document.getElementById("usermsg").value = "";
}



function ajoutMessage(){
    // On récupère le message

    const message = document.querySelector("#usermsg").value;
    
    //On vérifie si le message n'est pas vide

    if(message != ""){
        //On crée un objet JS

        let donnees={}
        donnees["message"]= message;

        console.log(donnees)};

        const options={
            method: 'POST',
            body: JSON.stringify({
                message: message
            })
        };

        fetch('ajoutMessage.php', options)
    .then(response=>response.json())
    .then(data=>{
        console.log(data);
        document.querySelector('#chatbox').innerHTML = data;
    })
}


// setInterval(function(){
//     fetch('discussion.php')
//     .then(response=>response.text())
//     .then(data=>{
//     document.querySelector("#usermsg").innerHTML=data;
//     })}, 1000);


