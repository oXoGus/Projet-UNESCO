<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ</title>
    <link rel="stylesheet" href="style/faq.css">
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
                  <li><a href="itineraire.php">Itinéraires à thème</a></li>
                  <li><a class="active" href="faq.php">Questions fréquentes</a></li>
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
            <p class="header__title desktop-title">FAQ</p>
            <div class="header__title mobile-title">
              <span>FAQ</span>
            </div>
          </div>
        </header>
    <main>
    <div class="container">
      <!-- Périodes et climats -->
      <div class="section">
        <div class="section-header" onclick="toggleSection(this)">
            <div class="section-title"><p>Périodes et climats</p></div>
        </div>
        <div class="section-content expanded">
            <div class="periods-section">
                <div class="periods-content">
                    <div class="qa">
                        <div class="question" onclick="toggleAnswer(this)">Quelle est la meilleure période pour visiter Kyoto ?</div>
                        <div class="answer">La saison des cerisiers en fleurs prend généralement place entre fin mars et début avril...</div>
                    </div>
                    <div class="qa">
                        <div class="question" onclick="toggleAnswer(this)">Le climat de Kyoto est-il difficile à supporter ?</div>
                        <div class="answer">Kyoto connaît des étés très chauds et humides, et des hivers assez froids...</div>
                    </div>
                    <div class="qa">
                        <div class="question" onclick="toggleAnswer(this)">Quand peut-on voir des cerisiers en fleurs à Kyoto ?</div>
                        <div class="answer">Fin mars à début avril, avec des lieux comme le parc Maruyama, etc.</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Transports et déplacements -->
        <div class="section">
            <div class="section-header collapsed" onclick="toggleSection(this)">
              <div class="section-title">Transports et déplacements</div>
            </div>
            <div class="section-content collapsed">
            <div class="periods-section">
                <div class="periods-content">
                    <div class="qa">
                        <div class="question" onclick="toggleAnswer(this)">Quelle est la meilleure période pour visiter Kyoto ?</div>
                        <div class="answer">La saison des cerisiers en fleurs prend généralement place entre fin mars et début avril...</div>
                    </div>
                    <div class="qa">
                        <div class="question" onclick="toggleAnswer(this)">Le climat de Kyoto est-il difficile à supporter ?</div>
                        <div class="answer">Kyoto connaît des étés très chauds et humides, et des hivers assez froids...</div>
                    </div>
                    <div class="qa">
                        <div class="question" onclick="toggleAnswer(this)">Quand peut-on voir des cerisiers en fleurs à Kyoto ?</div>
                        <div class="answer">Fin mars à début avril, avec des lieux comme le parc Maruyama, etc.</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sites touristiques et activités -->
        <div class="section">
            <div class="section-header collapsed" onclick="toggleSection(this)">
                <div class="section-title">Sites touristiques et activités</div>
            </div>
            <div class="section-content collapsed">
            <div class="periods-section">
                <div class="periods-content">
                    <div class="qa">
                        <div class="question" onclick="toggleAnswer(this)">Quelle est la meilleure période pour visiter Kyoto ?</div>
                        <div class="answer">La saison des cerisiers en fleurs prend généralement place entre fin mars et début avril...</div>
                    </div>
                    <div class="qa">
                        <div class="question" onclick="toggleAnswer(this)">Le climat de Kyoto est-il difficile à supporter ?</div>
                        <div class="answer">Kyoto connaît des étés très chauds et humides, et des hivers assez froids...</div>
                    </div>
                    <div class="qa">
                        <div class="question" onclick="toggleAnswer(this)">Quand peut-on voir des cerisiers en fleurs à Kyoto ?</div>
                        <div class="answer">Fin mars à début avril, avec des lieux comme le parc Maruyama, etc.</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Hébergement et restauration -->
        <div class="section">
            <div class="section-header collapsed" onclick="toggleSection(this)">
                <div class="section-title">Hébergement et restauration</div>
            </div>
            <div class="section-content collapsed">
            <div class="periods-section">
                <div class="periods-content">
                    <div class="qa">
                        <div class="question" onclick="toggleAnswer(this)">Quelle est la meilleure période pour visiter Kyoto ?</div>
                        <div class="answer">La saison des cerisiers en fleurs prend généralement place entre fin mars et début avril...</div>
                    </div>
                    <div class="qa">
                        <div class="question" onclick="toggleAnswer(this)">Le climat de Kyoto est-il difficile à supporter ?</div>
                        <div class="answer">Kyoto connaît des étés très chauds et humides, et des hivers assez froids...</div>
                    </div>
                    <div class="qa">
                        <div class="question" onclick="toggleAnswer(this)">Quand peut-on voir des cerisiers en fleurs à Kyoto ?</div>
                        <div class="answer">Fin mars à début avril, avec des lieux comme le parc Maruyama, etc.</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sécurité et accessibilité -->
        <div class="section">
            <div class="section-header collapsed" onclick="toggleSection(this)">
                <div class="section-title">Sécurité et accessibilité</div>
            </div>
            <div class="section-content collapsed">
            <div class="periods-section">
                <div class="periods-content">
                    <div class="qa">
                        <div class="question" onclick="toggleAnswer(this)">Quelle est la meilleure période pour visiter Kyoto ?</div>
                        <div class="answer">La saison des cerisiers en fleurs prend généralement place entre fin mars et début avril...</div>
                    </div>
                    <div class="qa">
                        <div class="question" onclick="toggleAnswer(this)">Le climat de Kyoto est-il difficile à supporter ?</div>
                        <div class="answer">Kyoto connaît des étés très chauds et humides, et des hivers assez froids...</div>
                    </div>
                    <div class="qa">
                        <div class="question" onclick="toggleAnswer(this)">Quand peut-on voir des cerisiers en fleurs à Kyoto ?</div>
                        <div class="answer">Fin mars à début avril, avec des lieux comme le parc Maruyama, etc.</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Technologie et connectivité -->
        <div class="section">
            <div class="section-header collapsed" onclick="toggleSection(this)">
                <div class="section-title">Technologie et connectivité</div>
            </div>
            <div class="section-content collapsed">
            <div class="periods-section">
                <div class="periods-content">
                    <div class="qa">
                        <div class="question" onclick="toggleAnswer(this)">Quelle est la meilleure période pour visiter Kyoto ?</div>
                        <div class="answer">La saison des cerisiers en fleurs prend généralement place entre fin mars et début avril...</div>
                    </div>
                    <div class="qa">
                        <div class="question" onclick="toggleAnswer(this)">Le climat de Kyoto est-il difficile à supporter ?</div>
                        <div class="answer">Kyoto connaît des étés très chauds et humides, et des hivers assez froids...</div>
                    </div>
                    <div class="qa">
                        <div class="question" onclick="toggleAnswer(this)">Quand peut-on voir des cerisiers en fleurs à Kyoto ?</div>
                        <div class="answer">Fin mars à début avril, avec des lieux comme le parc Maruyama, etc.</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Argent et paiements -->
        <div class="section">
            <div class="section-header collapsed" onclick="toggleSection(this)">
                <div class="section-title">Argent et paiements</div>
            </div>
            <div class="section-content collapsed">
            <div class="periods-section">
                <div class="periods-content">
                    <div class="qa">
                        <div class="question" onclick="toggleAnswer(this)">Quelle est la meilleure période pour visiter Kyoto ?</div>
                        <div class="answer">La saison des cerisiers en fleurs prend généralement place entre fin mars et début avril...</div>
                    </div>
                    <div class="qa">
                        <div class="question" onclick="toggleAnswer(this)">Le climat de Kyoto est-il difficile à supporter ?</div>
                        <div class="answer">Kyoto connaît des étés très chauds et humides, et des hivers assez froids...</div>
                    </div>
                    <div class="qa">
                        <div class="question" onclick="toggleAnswer(this)">Quand peut-on voir des cerisiers en fleurs à Kyoto ?</div>
                        <div class="answer">Fin mars à début avril, avec des lieux comme le parc Maruyama, etc.</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Expérience locale et shopping -->
        <div class="section">
            <div class="section-header collapsed" onclick="toggleSection(this)">
                <div class="section-title">Expérience locale et shopping</div>
            </div>
            <div class="section-content collapsed">
            <div class="periods-section">
                <div class="periods-content">
                    <div class="qa">
                        <div class="question" onclick="toggleAnswer(this)">Quelle est la meilleure période pour visiter Kyoto ?</div>
                        <div class="answer">La saison des cerisiers en fleurs prend généralement place entre fin mars et début avril...</div>
                    </div>
                    <div class="qa">
                        <div class="question" onclick="toggleAnswer(this)">Le climat de Kyoto est-il difficile à supporter ?</div>
                        <div class="answer">Kyoto connaît des étés très chauds et humides, et des hivers assez froids...</div>
                    </div>
                    <div class="qa">
                        <div class="question" onclick="toggleAnswer(this)">Quand peut-on voir des cerisiers en fleurs à Kyoto ?</div>
                        <div class="answer">Fin mars à début avril, avec des lieux comme le parc Maruyama, etc.</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Loisirs et divertissements -->
        <div class="section">
            <div class="section-header collapsed" onclick="toggleSection(this)">
                <div class="section-title">Loisirs et divertissements</div>
            </div>
            <div class="section-content collapsed">
            <div class="periods-section">
                <div class="periods-content">
                    <div class="qa">
                        <div class="question" onclick="toggleAnswer(this)">Quelle est la meilleure période pour visiter Kyoto ?</div>
                        <div class="answer">La saison des cerisiers en fleurs prend généralement place entre fin mars et début avril...</div>
                    </div>
                    <div class="qa">
                        <div class="question" onclick="toggleAnswer(this)">Le climat de Kyoto est-il difficile à supporter ?</div>
                        <div class="answer">Kyoto connaît des étés très chauds et humides, et des hivers assez froids...</div>
                    </div>
                    <div class="qa">
                        <div class="question" onclick="toggleAnswer(this)">Quand peut-on voir des cerisiers en fleurs à Kyoto ?</div>
                        <div class="answer">Fin mars à début avril, avec des lieux comme le parc Maruyama, etc.</div>
                    </div>
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
            <a href="" class="footer__lst">À propos de nous</a>
            <img src="img/MCN.png" alt="" class="footer__lst">
            <img src="img/UNESCO.png" alt="" class="footer__lst">
            <a href="" class="footer__lst">Contactez nous</a>
        </div>
    </footer>
</body>
    <script>
        function toggleSection(header) {
            const content = header.nextElementSibling;
            const isCollapsed = header.classList.contains('collapsed');
            
            if (isCollapsed) {
                header.classList.remove('collapsed');
                content.classList.remove('collapsed');
                content.classList.add('expanded');
            } else {
                header.classList.add('collapsed');
                content.classList.remove('expanded');
                content.classList.add('collapsed');
            }
        }
        function toggleAnswer(questionElement) {
          const qa = questionElement.closest('.qa');
          qa.classList.toggle('open');
        }
    </script>
</html>