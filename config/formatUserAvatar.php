<?php   
    // si l'utilisateur a modifié son avatar
    if (isset($user->avatar)){

        // si le binary de l'img est revoyé en tant que resource et nom pas en String 
        // on converti la resources en string pour la fonction d'encodage
        if (is_resource($user->avatar)){
            $binary = stream_get_contents($user->avatar);
        } else {
            $binary = $user->avatar;
        }

        // on utilise on encode les donnée binaire de l'img dans son uri grace a la fonction base64_encode()
        $user->avatar = "data:".$user->avatar_img_type.";base64,".base64_encode($binary);
    } else{
        // avatar par défaut
        $user->avatar = "img/defaultAvatar.svg"; // chemin relatif au public/
    }
?>