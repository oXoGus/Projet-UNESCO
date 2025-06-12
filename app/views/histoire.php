<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Histoire</title>
    <link href="https://fonts.googleapis.com/css2?family=Finger+Paint&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style/histoire.css?v=<?= time(); ?>">

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
              <li><a href="index.php">Accueil</a></li>
              <li><a href="patrimoine.php">Patrimoine de Kyoto</a></li>
              <li><a class="active" href="histoire.php">Histoire de Kyoto </a></li>
              <li><a href="itineraire.php">Itinéraires à thème</a></li>
              <li><a href="faq.php">Questions fréquentes</a></li>
              <li><a href="contacter.php">Nous-contacter</a></li>
            </ul>
          </nav>
          <a href="index.php" class="header__logo"><img src="img/logo.svg" alt=""></a>
          <div class="lang">
            <button class="lang_btn"><p><?php if ($lang ===  "FR") {echo "Fr";} else {echo "En";}?></p></button>
                <div class="lang-content">
                  <a href="histoire.php?lang=FR">Fr</a>
                  <a href="histoire.php?lang=EN">En</a>
              </div>
          </div>
        </div>
        <p class="header__title desktop-title"><?php echo $res->fetch(PDO::FETCH_OBJ)->valeur?></p>
        <div class="header__title mobile-title">
          <span>Son</span>
          <span>histoire</span>
        </div>
      </div>
    </header>
    <main>
        <div class="main__header">
            <div class="main__header_text">
                <?php echo $res->fetch(PDO::FETCH_OBJ)->valeur?></div>
        </div>
        <div class="main__content">
            <div class="content__header">
                <p class="content__header_title ff1">794</p>
                <p><?php echo $res->fetch(PDO::FETCH_OBJ)->valeur?></p>
                <p><?php echo $res->fetch(PDO::FETCH_OBJ)->valeur?></p>
            </div>
            <div class="content__blocks">
                <div class="blocks__left">
                    <div class="block">
                        <div class="block__title ff1"><?php echo $res->fetch(PDO::FETCH_OBJ)->valeur?></div>
                        <div class="block__text"><?php echo $res->fetch(PDO::FETCH_OBJ)->valeur?></div>
                    </div>
                    <img src="img/histoire/Kinkaku-ji 2.jpg" alt="">
                    <div class="block">
                        <div class="block__title ff1">1467-1477</div>
                        <div class="block__text"><?php echo $res->fetch(PDO::FETCH_OBJ)->valeur?></div>
                    </div>
                    <img src="img/histoire/Heian-jingū.jpg" alt="">
                    <div class="block">
                        <div class="block__title ff1">1603</div>
                        <div class="block__text"><?php echo $res->fetch(PDO::FETCH_OBJ)->valeur?></div>
                    </div>
                    <img src="img/histoire/Kiyomizu-dera.jpg" alt="">
                    <div class="block">
                        <div class="block__title ff1"><?php echo $res->fetch(PDO::FETCH_OBJ)->valeur?></div>
                        <div class="block__text"><?php echo $res->fetch(PDO::FETCH_OBJ)->valeur?></div>
                    </div>
                </div>
                <img src="img/histoire/vertical.png" alt="" class="blocks__center">
                <div class="blocks__right">
                    <img src="img/histoire/Royan-ji.jpg" alt="">
                    <div class="block">
                        <div class="block__title ff1 right"><?php echo $res->fetch(PDO::FETCH_OBJ)->valeur?></div>
                        <div class="block__text r"><?php echo $res->fetch(PDO::FETCH_OBJ)->valeur?></div>
                    </div>
                    <div class="block">
                        <div class="block__title ff1 right">1590</div>
                        <div class="block__text r"><?php echo $res->fetch(PDO::FETCH_OBJ)->valeur?></div>
                    </div>
                    <img src="img/histoire/nijo castle.jpg" alt="">
                    <div class="block">
                        <div class="block__title ff1 right">1868</div>
                        <div class="block__text r"><?php echo $res->fetch(PDO::FETCH_OBJ)->valeur?></div>
                    </div>
                    <div class="block">
                        <div class="block__title ff1 right">1994</div>
                        <div class="block__text r"><?php echo $res->fetch(PDO::FETCH_OBJ)->valeur?></div>
                    </div>
                </div>
            </div>
            <div class="anecdote__blocks">
                <div class="anecdote__header">
                    <img src="img/histoire/anecdote_l.svg" alt="" class="anecdote__img">
                    <p class="anecdote__header__title">Anecdotes</p>
                    <img src="img/histoire/anecdote_r.svg" alt="" class="anecdote__img">
                </div>
                <div class="anecdote__block">
                    <h1 class="anecdote__title"><?php echo $res->fetch(PDO::FETCH_OBJ)->valeur?></h1>
                    <p class="anecdote__text"><?php echo $res->fetch(PDO::FETCH_OBJ)->valeur?></p>
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
