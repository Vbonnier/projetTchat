window.onload = () => {
    // On va chercher la zone de texte
    let texte = document.querySelector("#texte")
    texte.addEventListener("keyup", verifEntree)
    
    // On va chercher le bouton "valid"
    let valid = document.querySelector("#valid")
    valid.addEventListener("click", ajoutMessage)
}