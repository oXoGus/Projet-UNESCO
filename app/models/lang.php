<?php
    
    // fr par défaut
    $lang = "FR";

    if (isset($_GET['lang']) && !empty($_GET['lang'])){
        
        // lang valide 
        $newLang = $_GET['lang'];
        if ($newLang === "FR" || $newLang === "EN"){
            
            // on met l'info dans le cookie 
            setcookie("lang", $newLang, time() + 30*24*3600); // on le stoque un mois
        }
    } else {
        
        // on récup la lang des cookie
        if (isset($_COOKIE['lang'])){
            $lang = $_COOKIE['lang'];
        }
    }
?>