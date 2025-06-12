<?php
  include($originDir."/config/connexion_db.php");

  $res;
  if ($lang === "EN"){
      $res = $cnx->prepare("SELECT texte.tag, texte.valeur FROM traductions JOIN pages ON traductions.page_id = pages.id  JOIN texte ON traductions.textetag = texte.tag WHERE traductions.code = 'EN' AND texte.tag LIKE 'patrimoine_%' ORDER BY CAST(SUBSTRING(texte.tag,11) AS INT)");
  } else {
      $res = $cnx->prepare("SELECT texte.tag, texte.valeur FROM traductions JOIN pages ON traductions.page_id = pages.id  JOIN texte ON traductions.texte_tag = texte.tag WHERE traductions.code = 'FR' AND texte.tag LIKE 'patrimoine_FR_%' ORDER BY CAST(SUBSTRING(texte.tag, 14) AS INT)");
  }
?>