<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Itineraires</title>
    <link rel="stylesheet" href="style/itineraire.css?v=<?= time(); ?>">
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
                  <li><a href="histoire.php">Histoire de Kyoto </a></li>
                  <li><a class="active" href="itineraire.php">Itinéraires à thème</a></li>
                  <li><a href="faq.php">Questions fréquentes</a></li>
                  <li><a href="contacter.php">Nous-contacter</a></li>
                </ul>
              </nav>
              <a href="index.php" class="header__logo"><img src="img/logo.svg" alt=""></a>
              <div class="lang">
                <button class="lang_btn"><p>Fr</p></button>
                <div class="lang-content">
                  <a href="#">Fr</a>
                  <a href="#">En</a>
                </div>
              </div>
            </div>
            <p class="header__title desktop-title">Visiter Kyoto</p>
            <div class="header__title mobile-title">
              <span>Visiter</span>
              <span>Kyoto</span>
            </div>
          </div>
        </header>
    <main>
        <div class="main__header">
            <h1 class="main__header_title">Tags</h1>
            
            <div class="tags__container">
                <a href="#" class="tag">Famille</a>
                <a href="#" class="tag">Accessible</a>
                <a href="#" class="tag">Culture</a>
                <a href="#" class="tag">Gastronomie</a>
                <a href="#" class="tag">Spiritualité</a>
                <a href="#" class="tag">Nature</a>
                <a href="#" class="tag">Shopping</a>
                <a href="#" class="tag">Photo</a>
                <a href="#" class="tag">SeniorFriendly</a>
                <a href="#" class="tag">ChienFriendly</a>
                <a href="#" class="tag">Tradition</a>
            </div>
        </div>
        <div class="main__content">
          <h1 class="main__header_title">Itinéraires</h1>
            <!-- ////////////////////////////////////////////////////////////////////////////////// -->
            <!-- Blocks de contenu -->
            <!-- ////////////////////////////////////////////////////////////////////////////////// -->
            <div class="content__blocks">
                <div class="content__block">
                  <div class="block__img">
                    <img src="img/itineraire/Kiyomizu-dera.jpg" alt="Kiyomizu-dera">
                  </div>
                  <div class="block__info">
                      <h2 class="block__title ff1">Higashiyama</h2>
                      <div class="title__underline"></div>

                      <p class="block__text"><strong>Durée :</strong> 4 - 5 heures</p>
                      <p class="block__text"><strong>Quartier :</strong> Est de Kyoto</p>
                      <p class="block__text"><strong>Tags</strong></p>

                      <div class="block__tags">
                          <span class="tag">SeniorFriendly</span>
                          <span class="tag">Photo</span>
                      </div>
                      <div class="block__buttons">
                          <a href="itineraire_a_theme.php" class="block__button">Voir le itinéraire</a>
                      </div>
                  </div>
                </div>
                <img src="img/itineraire/black_figure.png" alt="">
                <div class="content__block">
                    <div class="block__img ff1">
                        <img src="img/itineraire/Tenryu-ji.jpg" alt="">
                    </div>
                    <div class="block__info">
                      <h2 class="block__title ff1">Higashiyama</h2>
                      <div class="title__underline"></div>
                          
                      <p class="block__text"><strong>Durée :</strong> 4 - 5 heures</p>
                      <p class="block__text"><strong>Quartier :</strong> Est de Kyoto</p>
                      <p class="block__text"><strong>Tags</strong></p>
                      
                      <div class="block__tags">
                          <span class="tag">SeniorFriendly</span>
                          <span class="tag">Photo</span>
                      </div>
                      <div class="block__buttons">
                          <a href="itineraire_a_theme.php" class="block__button">Voir le itinéraire</a>
                      </div>
                  </div>
                </div>
                <img src="img/itineraire/black_figure.png" alt="">
                <div class="content__block">
                    <div class="block__img ff1">
                        <img src="img/itineraire/Fushimi Inari-taisha 1.png" alt="">
                    </div>
                    <div class="block__info">
                      <h2 class="block__title ff1">Higashiyama</h2>
                      <div class="title__underline"></div>
                          
                      <p class="block__text"><strong>Durée :</strong> 4 - 5 heures</p>
                      <p class="block__text"><strong>Quartier :</strong> Est de Kyoto</p>
                      <p class="block__text"><strong>Tags</strong></p>
                      
                      <div class="block__tags">
                          <span class="tag">SeniorFriendly</span>
                          <span class="tag">Photo</span>
                      </div>
                      <div class="block__buttons">
                          <a href="itineraire_a_theme.php" class="block__button">Voir le itinéraire</a>
                      </div>
                  </div>
                </div>
                <img src="img/itineraire/black_figure.png" alt="">
                <div class="content__block">
                    <div class="block__img ff1">
                        <img src="img/itineraire/image 8.png" alt="">
                    </div>
                    <div class="block__info">
                      <h2 class="block__title ff1">Higashiyama</h2>
                      <div class="title__underline"></div>
                          
                      <p class="block__text"><strong>Durée :</strong> 4 - 5 heures</p>
                      <p class="block__text"><strong>Quartier :</strong> Est de Kyoto</p>
                      <p class="block__text"><strong>Tags</strong></p>
                      
                      <div class="block__tags">
                          <span class="tag">SeniorFriendly</span>
                          <span class="tag">Photo</span>
                      </div>
                      <div class="block__buttons">
                          <a href="itineraire_a_theme.php" class="block__button">Voir le itinéraire</a>
                      </div>
                  </div>
                </div>
                <img src="img/itineraire/black_figure.png" alt="">
                <div class="content__block">
                    <div class="block__img ff1">
                        <img src="img/itineraire/Ryoan-ji_2 1.png" alt="">
                    </div>
                    <div class="block__info">
                      <h2 class="block__title ff1">Higashiyama</h2>
                      <div class="title__underline"></div>
                          
                      <p class="block__text"><strong>Durée :</strong> 4 - 5 heures</p>
                      <p class="block__text"><strong>Quartier :</strong> Est de Kyoto</p>
                      <p class="block__text"><strong>Tags</strong></p>
                      
                      <div class="block__tags">
                          <span class="tag">SeniorFriendly</span>
                          <span class="tag">Photo</span>
                      </div>
                      <div class="block__buttons">
                          <a href="itineraire_a_theme.php" class="block__button">Voir le itinéraire</a>
                      </div>
                  </div>
                </div>
                <img src="img/itineraire/black_figure.png" alt="">
                <div class="content__block">
                    <div class="block__img ff1">
                        <img src="img/itineraire/Nishiki 1.png" alt="">
                    </div>
                    <div class="block__info">
                      <h2 class="block__title ff1">Higashiyama</h2>
                      <div class="title__underline"></div>
                          
                      <p class="block__text"><strong>Durée :</strong> 4 - 5 heures</p>
                      <p class="block__text"><strong>Quartier :</strong> Est de Kyoto</p>
                      <p class="block__text"><strong>Tags</strong></p>
                      
                      <div class="block__tags">
                          <span class="tag">SeniorFriendly</span>
                          <span class="tag">Photo</span>
                      </div>
                      <div class="block__buttons">
                          <a href="itineraire_a_theme.php" class="block__button">Voir le itinéraire</a>
                      </div>
                  </div>
                </div>
                <img src="img/itineraire/black_figure.png" alt="">
                <div class="content__block">
                    <div class="block__img ff1">
                        <img src="img/itineraire/Heian-jingū 3.png" alt="">
                    </div>
                    <div class="block__info">
                      <h2 class="block__title ff1">Higashiyama</h2>
                      <div class="title__underline"></div>
                          
                      <p class="block__text"><strong>Durée :</strong> 4 - 5 heures</p>
                      <p class="block__text"><strong>Quartier :</strong> Est de Kyoto</p>
                      <p class="block__text"><strong>Tags</strong></p>
                      
                      <div class="block__tags">
                          <span class="tag">SeniorFriendly</span>
                          <span class="tag">Photo</span>
                      </div>
                      <div class="block__buttons">
                          <a href="itineraire_a_theme.php" class="block__button">Voir le itinéraire</a>
                      </div>
                  </div>
                </div>
            </div>
        </div>
    </main>
    
            <!-- ////////////////////////////////////////////////////////////////////////////////// -->
            <!-- Footer -->
            <!-- ////////////////////////////////////////////////////////////////////////////////// -->
    <footer>
        <div class="footer__lists ff1">
            <img src="img/MCN.svg" alt="" class="footer__lst">
            <img src="img/UNESCO.svg" alt="" class="footer__lst">
            <a href="contacter.php" class="footer__lst">Contactez nous</a>
        </div>
    </footer>
</body>
</html>