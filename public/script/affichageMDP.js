function changerVisibiliteMDP(inputId, btnEyeId){
    var btn = document.getElementById(btnEyeId);
    var input = document.getElementById(inputId);

    // on met le type du input en text pour affcicher le mdp 
    // selon si l'input était déja en texte ou password
    if (input.type === "text"){
        input.type = "password";
        
        // on met l'oeil fermé
        btn.style.backgroundImage = "url(img/eyeClosed.svg)"
    } else {
        // on affiche le mdp
        input.type = "text";
        
        // on met l'oeil ouvert
        btn.style.backgroundImage = "url(img/eyeOpen.svg)"
    }
    
}