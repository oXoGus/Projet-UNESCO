<?php
    // page non accessible aux utilisateurs non connecté
    include($originDir."/config/middleware.php");

    // si l'utilisateur vient de rentrer le nombre d'étape de l'itinéraire
    if (isset($_GET['numStep']) && !empty($_GET['numStep']) && $_GET['numStep'] > 0){
        
        $numStep = $_GET['numStep'];
         // on affiche la page avec le form 
        include($originDir."/app/views/addItineraire.php");
    } else if ($_SERVER['REQUEST_METHOD'] === "POST"){
                
        // on ajoute le nouveau itinéraire
        include($originDir."/app/models/addItineraire.php");
    }
   
?>