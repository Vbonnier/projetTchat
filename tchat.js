window.onload = () => {
    // On va chercher la zone de texte
    let texte = document.querySelector("#usermsg")
    texte.addEventListener("keyup", verifEntree,)

    
    
    
    // On va chercher le bouton "valid"
    let valid = document.querySelector("#valid")
    valid.addEventListener("click",function(event){ajoutMessage();event.preventDefault()})
}


function verifEntree(e){
    if(e.key == "Enter"){
        // e.preventDefault();
        ajoutMessage()
    }
}

function ajoutMessage(){
    console.log("salut")
}
