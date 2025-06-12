<?php
  include($originDir."/config/connexion_db.php");
    $res;
    if ($lang === "EN"){
      $res = $cnx->query("SELECT texte.tag, texte.valeur FROM traductions JOIN pages ON traductions.page_id = pages.id  JOIN texte ON traductions.texte_tag = texte.tag WHERE traductions.code = 'EN' AND texte.tag LIKE 'nouscontacter_%' AND texte.tag NOT LIKE 'nouscontacter_FR_%' ORDER BY CAST(SUBSTRING(texte.tag, 15) AS INT)");
  } else {
      $res = $cnx->query("SELECT texte.tag, texte.valeur FROM traductions JOIN pages ON traductions.page_id = pages.id  JOIN texte ON traductions.texte_tag = texte.tag WHERE traductions.code = 'FR' AND texte.tag LIKE 'nouscontacter_FR_%' ORDER BY CAST(SUBSTRING(texte.tag, 18) AS INT)");
    }
?>