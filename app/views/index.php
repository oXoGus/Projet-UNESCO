<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kyoto</title>
    <link rel="stylesheet" href="style/main.css">
</head>
<body>
   <header>
      <div class="header__main ff1">
        <div class="header__menu">
          <input type="checkbox" id="burger-toggle">
          <label for="burger-toggle" class="burger-container">
            <div class="burger-line"></div>
            <div class="burger-line"></div>
            <div class="burger-line"></div>
          </label>
          <span class="menu-label">Menu</span>
          <nav class="nav-menu">
            <ul>
              <li><a class="active" href="index.php">Accueil</a></li>
              <li><a href="patrimoine.php">Patrimoine de Kyoto</a></li>
              <li><a href="histoire.php">Histoire de Kyoto </a></li>
              <li><a href="itineraire.php">Itinéraires à thème</a></li>
              <li><a href="faq.php">Questions fréquentes</a></li>
              <li><a href="contacter.php">Nous-contacter</a></li>
            </ul>
          </nav>
          <a href="index.php" class="header__logo"><img src="img/logo.svg" alt=""></a>
          <div class="lang">
            <button class="lang_btn"><p><?php if ($lang ===  "FR") {echo "Fr";} else {echo "En";}?></p></button>
                <div class="lang-content">
                  <a href="index.php?lang=FR">Fr</a>
                  <a href="index.php?lang=EN">En</a>
              </div>
          </div>
        </div>
        <p class="header__title desktop-title">Kyoto</p>
        <div class="header__title mobile-title">
          <span>K</span>
          <span>y</span>
          <span>o</span>
          <span>t</span>
          <span>o</span>
        </div>
      </div>
    </header>
    <main>
       <div class="main__content">
            <div class="main__blocks">
                <div class="block1">
                    <div class="block__info">
                        <?php echo $res->fetch(PDO::FETCH_OBJ)->valeur?>
                    </div>
                    <img src="img/Byōdō-in.jpg" alt="">
                </div>
                <div class="block2">
                    <img src="img/Yasaka.jpg" alt="">
                    <div class="block__info"><?php echo $res->fetch(PDO::FETCH_OBJ)->valeur?></div>
                </div>
               <div class="main__block">
                    <div class="block__info">
                        <img src="img/red_v.png" alt="">
                        <div class="block__texts">
                            <p class="block__title ff1"><?php echo $res->fetch(PDO::FETCH_OBJ)->valeur?></p>
                            <p class="block__text"><?php echo $res->fetch(PDO::FETCH_OBJ)->valeur?></p>
                            <div class="block__btn ff1">
                                <a href="histoire/histoire.php"><?php echo $res->fetch(PDO::FETCH_OBJ)->valeur?></a>
                            </div>
                        </div>
                    </div>
                    <img src="img/Sagano Bamboo Forest.jpg" alt="">
                </div>
                <div class="main__block">
                    <img src="img/Kinkaku-ji.jpg" alt="">
                    <div class="block__info right">
                        <img src="img/red_v.png" alt="">
                        <div class="block__texts">
                            <p class="block__title ff1"><?php echo $res->fetch(PDO::FETCH_OBJ)->valeur?></p>
                            <p class="block__text"><?php echo $res->fetch(PDO::FETCH_OBJ)->valeur?></p>
                            <div class="block__btn ff1">
                                <a href="patrimoine/patrimoine.php"><?php echo $res->fetch(PDO::FETCH_OBJ)->valeur?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
       </div>
    </main>
    <footer>
        <div class="footer__lists ff1">
            <img src="img/MCN.svg" alt="" class="footer__lst">
            <img src="img/UNESCO.svg" alt="" class="footer__lst">
            <a href="contacter.php" class="footer__lst">Contactez nous</a>
        </div>
    </footer>
</body>
</html>
