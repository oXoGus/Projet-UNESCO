<?php
    include($originDir."/config/connexion_db.php");

    $res = $cnx->query("SELECT * FROM admin where login = ".$cnx->quote($login)." and hash = crypt(".$cnx->quote($mdp).", hash)");

?>