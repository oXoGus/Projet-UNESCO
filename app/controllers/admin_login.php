<?php
  session_start();

    // si l'utilisateur vient de remplir tout le form 
    if (!empty($_GET['login']) && !empty($_GET['mdp'])){

        // recup des info 
        $login = $_GET['login'];
        $mdp = $_GET['mdp'];
        
        // on appel le model pour créer un compte
        include($originDir.'/app/models/admin_login.php');
        
        // si il n'y a aucun utilisateur avec ce login et mdp
        if ($res->rowCount() == 0){
            $err = "mauvais mot de passe ou login";
            include($originDir.'/app/views/admin_login.php');
            exit;
        }
        // recupéeration des données de tout la première ligne 
        $val = $res->fetch(PDO::FETCH_OBJ);

        // si les credantials correspondent
        // on connecte l'utilisateur en mettant ces 
        // credantials dans la session 
        $_SESSION['login'] = $login;
        $_SESSION['mdp'] = $val->hash;

        // on redirect l'utilisateur sur la page d'ajout d'itinéraire
        header('location: addItineraire.php');
        exit;
    }
    // si l'utilisateur n'a pas envoyé le form
    else {

        // on déconnecte l'utilisateur 
        // si l'utilisateur est connecté 
        if (isset($_SESSION['login']) && isset($_SESSION['mdp'])){
            unset($_SESSION['login']);
            unset($_SESSION['mdp']);
        }

        // on affiche le form 
        include($originDir."/app/views/admin_login.php");
    }    
?>