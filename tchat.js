window.onload = () => {
    // On va chercher la zone de texte
    let texte = document.querySelector("#usermsg");
    texte.addEventListener("keyup", verifEntree,)

    // // On va chercher le bouton "valid"
    // let valid = document.querySelector("#valid");
    // valid.addEventListener("click",ajoutMessage())
}


function verifEntree(e){    
    if(e.key == "Enter"){
        ajoutMessage();

    }
}

function reinit() 
{
document.getElementById("usermsg").value = "";
}

function ajoutMessage(){

    // On créé un "faux-formulaire avec FormData() (pour pouvoir envoyer sans raffraichir la page)"
    const formData= new FormData();
    //On recupère la valeur de usermsg (le champ texte)
    formData.append('usertxt', document.querySelector('#usermsg').value);

    //On determine le JSON
    const options ={
        method: 'POST',
        body : formData,
        };

        //On exécute le fetch (qui déclenche le php), on récupère et on console.log 
    fetch('ajoutMessage.php',options)
    .then(response=>response.text())
    .then(data=>{
        console.log(data);
    })

    reinit();

}


// setInterval(function(){
//     fetch('discussion.php')
//     .then(response=>response.text())
//     .then(data=>{
//     document.querySelector("#usermsg").innerHTML=data;
//     })}, 1000);


