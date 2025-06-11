<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Itineraires à theme</title>
    <link href="https://fonts.googleapis.com/css2?family=Finger+Paint&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style/itineraire_a_theme.css?v=<?= time(); ?>">
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
        <p class="header__title desktop-title">Itinéraire <br>à théme</p>
        <div class="header__title mobile-title">
          <span>Itinéraire</span>
          <span>à théme</span>
        </div>
      </div>
    </header>
    <main>
        <div class="main__header">
            <h1 class="main__header_title">Chemin des philosophes</h1>

            <div class="main__header_text">
                Parfait pour une balade tranquille, le Chemin des philosophes suit un petit canal bordé de cerisiers, reliant plusieurs temples zen dans un quartier paisible de Kyoto. Très apprécié au printemps pour ses fleurs de cerisiers, c’est un itinéraire qui mêle nature, méditation et patrimoine culturel. L’itinéraire est plat et agréable, idéal pour se ressourcer à l’écart des foules.</div>
            </div>
            <div class="main__content">
                <div class="timeline-card">
                    <div class="timeline-header">
                        <div class="period-info">
                            <span>Période : Printemps</span>
                            <span>Durée : 3-4 heures</span>
                            <span>Quartier : Nord-Est de Kyoto</span>
                        </div>
                        <h2 class="title">Tags</h2>
                        <div class="tags">
                            <span class="tag">chienFriendly</span>
                            <span class="tag spiritualite">Spiritualité</span>
                            <span class="tag photo">Photo</span>
                            <span class="tag nature">nature</span>
                        </div>
                    </div>
                </div>
            <div class="content__blocks">
                <div class="blocks__left">
                    <img src="img/itineraire_a_theme/Ginkakuji.svg" alt="">
                    <div class="block">
                        <div class="block__title ff1"><a href="">🌸 Le Chemin des philosophes</a></div>
                        <div class="block__text">Un sentier piéton longeant un canal clair, bordé de centaines de cerisiers. Il tient son nom du philosophe Nishida Kitarō, qui l’empruntait chaque jour pour méditer.
                          <br><br>
                          📷 Sublime entre fin mars et mi-avril – prévoir appareil photo !
                        </div>
                    </div>
                    <img src="img/itineraire_a_theme/honen in.svg" alt="">
                    <div class="block">
                        <div class="block__title ff1"><a href="">🏯 Nanzen-ji</a></div>
                        <div class="block__text">Grand complexe zen avec plusieurs sous-temples, des jardins, et un aqueduc de style occidental. L’ambiance y est solennelle, parfaite pour finir la promenade en beauté.
                            <br><br>🧘 Possibilité de méditation ou simplement de flânerie silencieuse dans les jardins.
                        </div>
                    </div>
                </div>
                <img src="img/vertical_rose.svg" alt="" class="blocks__center">
                <div class="blocks__right">
                  <div class="block">
                        <div class="block__title ff1 ">🏯 Ginkaku-ji (Pavillon d’argent)</div>
                        <div class="block__text ">Un temple emblématique au charme sobre, connu pour son jardin sec, sa mousse verdoyante et ses allées méditatives. Même si l’intérieur est payant, la façade extérieure et le quartier valent le détour.
                            <br><br>
                              🐶 Les chiens ne sont pas admis à l’intérieur, mais on peut se promener aux abords.
                          </div>
                    </div>
                    <img src="img/itineraire_a_theme/Path_of_philosophy.svg" alt="">
                    <div class="block">
                        <div class="block__title ff1">🛕 Hōnen-in (optionnel)</div>
                        <div class="block__text ">Petit temple paisible, souvent moins fréquenté, entouré de mousse et de nature. L'entrée est libre et gratuite. On y trouve régulièrement des expositions d’art ou des messages spirituels.
                            <br><br> 🌿 Un lieu discret et inspirant pour faire une pause au calme.
                          </div>
                    </div>
                    <img src="img/itineraire_a_theme/Nanzen-ji.svg" alt="">
                </div>
            </div>
             <div class="container">
        <div class="variantes-section">
            <h2 class="section-title variantes-title">Variantes</h2>
            
            <div class="variante-item">
                <span class="variante-emoji">🐶</span>
                <span class="variante-text"><strong>Avec chien :</strong> pause au parc Nyakuoji / café dog-friendly</span>
            </div>
            
            <div class="variante-item">
                <span class="variante-emoji">🌸</span>
                <span class="variante-text"><strong>Printemps :</strong> pique-nique le long du canal</span>
            </div>
        </div>
        
        <div class="conseils-section">
            <h2 class="section-title conseils-title">Conseils pratiques</h2>
            
            <div class="conseil-item">
                <span class="conseil-emoji">🌸</span>
                <span class="conseil-text"><strong>Saison idéale :</strong> fin mars à mi-avril (cerisiers en fleurs).</span>
            </div>
            
            <div class="conseil-item">
                <span class="conseil-emoji">🐕</span>
                <span class="conseil-text"><strong>Chien autorisé en laisse,</strong> sauf à l'intérieur des temples.</span>
            </div>
            
            <div class="conseil-item">
                <span class="conseil-emoji">🥪</span>
                <span class="conseil-text"><strong>Prévoir une nappe et un pique-nique</strong> - endroits calmes le long du canal.</span>
            </div>
            
            <div class="conseil-item">
                <span class="conseil-emoji">☕</span>
                <span class="conseil-text"><strong>Petits cafés charmants cachés</strong> - pas toujours indiqués sur les cartes.</span>
            </div>
            
            <div class="conseil-item">
                <span class="conseil-emoji">⏰</span>
                <span class="conseil-text"><strong>Y aller tôt le matin ou vers 16h</strong> pour une lumière dorée.</span>
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
