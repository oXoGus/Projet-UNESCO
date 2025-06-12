<?php
//On va récuperer les infos pour la db
    $env = parse_ini_file('.env');
    $user=$env["USER"];
    $pass=$env["PASS"];
    $db = $env["DB"];
    $host= $env["HOST"];

    try{
        $cnx = new PDO("pgsql:host=$host;dbname=$db;", $user, $pass);
    }
    catch(PDOException $e){
        $err = "La connexion à la base de données a échouée. Si vous êtes sur le réseau éduroam changer de réseau et reéssayer";
        include($originDir."/app/views/err.php");
        exit; 
    }
    ?>