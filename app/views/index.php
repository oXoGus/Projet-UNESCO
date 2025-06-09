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
          <a href="index.php" class="header__logo"><img src="img/logo.png" alt=""></a>
          <div class="lang">
            <button class="lang_btn"><p>Fr</p></button>
            <div class="lang-content">
              <a href="#">Fr</a>
              <a href="#">En</a>
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
                        Notre équipe, constituée de trois étudiants en BUT INFORMATIQUE en première année, a le plaisir de vous présenter KYOTO et son patrimoine dans le cadre d’une médiation culturelle et numérique en partenariat avec L’UNESCO. Bonne visite à tous.
                    </div>
                    <img src="img/Byōdō-in.jpg" alt="">
                </div>
                <div class="block2">
                    <img src="img/Yasaka.jpg" alt="">
                    <div class="block__info">
                        Autrefois capitale, désormais capitale culturelle et plus belle ville du Japon, KYOTO  regorge de patrimoine et d’histoire. Nichée entre les montagnes, avec ses 2000 temples, ses sanctuaires, palais, jardins, son architecture et ses évènements culturels, il y en a pour tous les goûts et tous les âges. 
                    </div>
                </div>
               <div class="main__block">
                    <div class="block__info">
                        <img src="img/red_v.png" alt="">
                        <div class="block__texts">
                            <p class="block__title ff1"><span>L</span>’histoire de Kyoto</p>
                            <p class="block__text">Nichée entre les montagnes au centre de l'ile d’Honshu, Kyoto fut la capitale japonaise de 794 à 1868. Elle est considérée comme la plus belle ville du japon, et ayant échappée aux bombes de la seconde guerre mondiale, elle possède encore de nombreux bâtiments d'avant guerre. </p>
                            <div class="block__btn ff1">
                                <a href="histoire/histoire.php">en savoir +</a>
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
                            <p class="block__title ff1"><span>S</span>on patrimoine</p>
                            <p class="block__text">Kyoto est considérée capitale culturelle du Japon avec près de 2 000 temples, ses sanctuaires et ses palais, ses ponts, ses jardins, son architecture et sa cuisine traditionnelle classée au patrimoine de l’UNESCO.   </p>
                            <div class="block__btn ff1">
                                <a href="patrimoine/patrimoine.php">aller plus loin</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
       </div>
    </main>
    <footer>
        <div class="footer__lists ff1">
            <a href="" class="footer__lst">À propos de nous</a>
            <img src="img/MCN.png" alt="" class="footer__lst">
            <img src="img/UNESCO.png" alt="" class="footer__lst">
            <a href="" class="footer__lst">Contactez nous</a>
        </div>
    </footer>
</body>
</html>
