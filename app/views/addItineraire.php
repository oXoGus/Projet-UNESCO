<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="favicon.ico" type="image/x-icon"/>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/addItineraire.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>    
    <title>Ajouter un itinéraire</title>
</head>
<body>
    <h1>Ajouter un itinéraire</h1>
    <?php
        if (!isset($numStep)){
            echo "
            <form action=\"addItineraire.php\" method=\"get\">
                <span>
                    Veuillez entrez le nombre d'étape de l'itinéraire
                    <input type=\"number\" name=\"numStep\" min=\"1\" required>
                </span>
                <input type=\"submit\" value=\"créer l'itinéraire\">
            </form>";
        }
        else {
            echo "
            <form enctype=\"multipart/form-data\" action=\"addItineraire.php\" method=\"POST\">
                <p>Titre de l'itinéraire en français</p>
                <input type=\"text\" name=\"titreFR\" maxlength=\"50\">
                <p>Titre de l'itinéraire en anglais</p>
                <input type=\"text\" name=\"titreEN\" maxlength=\"50\">
                <p>description en français</p>
                <textarea type=\"text\" name=\"descriptionFR\"></textarea>
                <p>description en anglais</p>
                <textarea type=\"text\" name=\"descriptionEN\"></textarea>
                <p>ajouter une minature pour l'itinéraire</p>
                <input type=\"file\" name=\"minature\">";
                for ($i = 0; $i < $numStep; $i++){
                    echo "<div class=\"step\">
                        <p>étape n°".($i + 1)."</p>
                        <p>Le titre de l'étape</p>
                        <input type=\"text\" name=\"steps[$i][titre]\" required>
                        <p>Le contenu de l'étape</p>
                        <textarea type=\"text\" name=\"steps[$i][contenu]\" required></textarea>
                        <p>Une image pour cette étape</p>
                        <input type=\"file\" name=\"steps[$i][img]\">
                    </div>";
                }
            echo "</form>";
        }
    ?>
    
</body>
</html>