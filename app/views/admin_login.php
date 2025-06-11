<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="favicon.ico" type="image/x-icon"/>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/cnx.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>    
    <title>Se connecter</title>
</head>
<body>
    <div class="loginContainer">
        <form action="admin_login.php" method="get">
        <h2 style="margin: 10px;">Connexion</h2>
            <div style="margin: 10px;">
                <p>Nom d'utilisateur</p>
                <input type="text" name="login" autocomplete="off" required>
                <p>Mot de passe</p>
                <div class="inputContainer">
                    <input id="mdp" type="password" name="mdp" required>
                    <button type="button" id="btnEye" class="btnEye" onclick="changerVisibiliteMDP('mdp', 'btnEye')" ></button>
                </div>
                <input id="submitBtn" type="submit" value="se connecter">
            </div>
            
        </form>
        <?php
            // gestion des erreurs 
            if (isset($err)){
                echo "<p class=\"err\">$err</p>";
                unset($err);
            }
        ?>
    </div>
    <script src="script/affichageMDP.js"> </script>
</body>
</html>