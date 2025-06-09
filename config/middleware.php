<?php
// toujour lancer la session si on veut utiliser la var globale
session_start(); 
    
    // verifiaction des bon pseudo et mdp
    if (isset($_SESSION['login']) && isset($_SESSION['mdp'])){
        
        include($originDir."/config/connexion_db.php");
        
        $login = $_SESSION['login'];
        $mdp = $_SESSION['mdp'];
        
        
        // requete de verification
        // recuperation du hash
        $res = $cnx->query("SELECT * FROM user_db where username = ".$cnx->quote($login)." and password_hash = ".$cnx->quote($mdp));
        
        // si il y'a bien un utilisateur correspondant au login et au mdp
        if ($res->fetch(PDO::FETCH_OBJ)){
            // on laisse l'utilisateur aller sur la page
        }
        else {
            header('location: /Daktari/connexion.php');
        }
    }
    else {
        header('location: /Daktari/connexion.php');
    }
?>