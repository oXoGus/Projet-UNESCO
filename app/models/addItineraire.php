<?php
    include($originDir."/config/connexion_db.php");

    try {
        $cnx->beginTransaction();

        $imgData = file_get_contents($_FILES['miniature']['tmp_name']);
        $imgType = $_FILES['miniature']['type'];

        // on met d'abord les info générales de l'itineraire
        $query = $cnx->prepare("INSERT INTO itineraires (miniature, miniature_type_img) VALUES (:img, :img_type) RETURNING id") ;
        $query->bindParam(":img", $imgData, PDO::PARAM_LOB); // param-lob pour que on envoye les données en binaire pas en texte
        $query->bindParam(":img_type", $imgType, PDO::PARAM_STR);
        $query->execute();
        $itineraire_id = $query->fetch(PDO::FETCH_OBJ)->id;

        // on ajoute le titre 
        $query = $cnx->prepare("INSERT INTO etapes (contenu) VALUES (:contenu) RETURNING id");
        $query->execute(["contenu" => $_POST['titreFR']]);
        $titreId = $query->fetch(PDO::FETCH_OBJ);

        

        // on ajoute la 
    } catch (PDOException $e){
        $cnx->rollBack();
        echo $e;
    }
    

?>