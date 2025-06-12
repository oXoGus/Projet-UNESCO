<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ</title>
    <link rel="stylesheet" href="style/faq.css?v=<?= time(); ?>">


<script defer>
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
              <a href="index.php" class="header__logo"><img src="img/logo.svg" alt=""></a>
              <div class="lang">
                <button class="lang_btn"><p><?php if ($lang ==  "FR") {echo "Fr";} else {echo "En";}?></p></button>
                <div class="lang-content">
                  <a href="faq.php?lang=FR">Fr</a>
                  <a href="faq.php?lang=EN">En</a>
                </div>
              </div>
            </div>
            <p class="header__title desktop-title"><?php echo "FAQ"?></p>
            <div class="header__title mobile-title">
              <span><?php echo $res->fetch(PDO::FETCH_OBJ)->valeur?></span>
            </div>
          </div>
        </header>
    <main>
    <div class="container">
      <!-- Périodes et climats -->
      <div class="section">
        <div class="section-header" onclick="toggleSection(this)">
            <div class="section-title"><p><?php echo $res->fetch(PDO::FETCH_OBJ)->valeur?></p></div>
        </div>
        <div class="section-content expanded">
            <div class="periods-section">
                <div class="periods-content">
                    <div class="qa">
                        <div class="question" onclick="toggleAnswer(this)"><?php echo $res->fetch(PDO::FETCH_OBJ)->valeur?></div>
                        <div class="answer"><?php echo $res->fetch(PDO::FETCH_OBJ)->valeur?></div>
                    </div>
                    <div class="qa">
                        <div class="question" onclick="toggleAnswer(this)"><?php echo $res->fetch(PDO::FETCH_OBJ)->valeur?></div>
                        <div class="answer"><?php echo $res->fetch(PDO::FETCH_OBJ)->valeur?></div>
                    </div>
                    <div class="qa">
                        <div class="question" onclick="toggleAnswer(this)"><?php echo $res->fetch(PDO::FETCH_OBJ)->valeur?></div>
                        <div class="answer"><?php echo $res->fetch(PDO::FETCH_OBJ)->valeur?></div>
                    </div>
                </div>
            </div>
        </div>
      </div>
        <!-- Transports et déplacements -->
        <div class="section v">
            <div class="section-header collapsed" onclick="toggleSection(this)">
              <div class="section-title"><?php echo $res->fetch(PDO::FETCH_OBJ)->valeur?></div>
            </div>
            <div class="section-content collapsed">
            <div class="periods-section">
                <div class="periods-content">
                    <div class="qa">
                        <div class="question" onclick="toggleAnswer(this)"><?php echo $res->fetch(PDO::FETCH_OBJ)->valeur?></div>
                        <div class="answer"><?php echo $res->fetch(PDO::FETCH_OBJ)->valeur?></div>
                    </div>
                    <div class="qa">
                        <div class="question" onclick="toggleAnswer(this)"><?php echo $res->fetch(PDO::FETCH_OBJ)->valeur?></div>
                        <div class="answer"><?php echo $res->fetch(PDO::FETCH_OBJ)->valeur?></div>
                    </div>
                    <div class="qa">
                        <div class="question" onclick="toggleAnswer(this)"><?php echo $res->fetch(PDO::FETCH_OBJ)->valeur?></div>
                        <div class="answer"><?php echo $res->fetch(PDO::FETCH_OBJ)->valeur?></div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!-- Sites touristiques et activités -->
        <div class="section">
            <div class="section-header collapsed" onclick="toggleSection(this)">
                <div class="section-title"><?php echo $res->fetch(PDO::FETCH_OBJ)->valeur?></div>
            </div>
            <div class="section-content collapsed">
            <div class="periods-section">
                <div class="periods-content">
                    <div class="qa">
                        <div class="question" onclick="toggleAnswer(this)"><?php echo $res->fetch(PDO::FETCH_OBJ)->valeur->valeur?></div>
                        <div class="answer"><?php echo $res->fetch(PDO::FETCH_OBJ)->valeur?></div>
                    </div>
                    <div class="qa">
                        <div class="question" onclick="toggleAnswer(this)"><?php echo $res->fetch(PDO::FETCH_OBJ)->valeur?></div>
                        <div class="answer"><?php echo $res->fetch(PDO::FETCH_OBJ)->valeur?></div>
                    </div>
                    <div class="qa">
                        <div class="question" onclick="toggleAnswer(this)"><?php echo $res->fetch(PDO::FETCH_OBJ)->valeur?></div>
                        <div class="answer"><?php echo $res->fetch(PDO::FETCH_OBJ)->valeur?></div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!-- Hébergement et restauration -->
        <div class="section v">
            <div class="section-header collapsed" onclick="toggleSection(this)">
                <div class="section-title"><?php echo $res->fetch(PDO::FETCH_OBJ)->valeur?></div>
            </div>
            <div class="section-content collapsed">
            <div class="periods-section">
                <div class="periods-content">
                    <div class="qa">
                        <div class="question" onclick="toggleAnswer(this)"><?php echo $res->fetch(PDO::FETCH_OBJ)->valeur?></div>
                        <div class="answer"><?php echo $res->fetch(PDO::FETCH_OBJ)->valeur?></div>
                    </div>
                    <div class="qa">
                        <div class="question" onclick="toggleAnswer(this)"><?php echo $res->fetch(PDO::FETCH_OBJ)->valeur?></div>
                        <div class="answer"><?php echo $res->fetch(PDO::FETCH_OBJ)->valeur?></div>
                    </div>
                    <div class="qa">
                        <div class="question" onclick="toggleAnswer(this)"><?php echo $res->fetch(PDO::FETCH_OBJ)->valeur?></div>
                        <div class="answer"><?php echo $res->fetch(PDO::FETCH_OBJ)->valeur?></div>
                    </div>
                </div>
            </div>
        </div>
        </div>  
        <!-- Sécurité et accessibilité -->
        <div class="section">
            <div class="section-header collapsed" onclick="toggleSection(this)">
                <div class="section-title"><?php echo $res->fetch(PDO::FETCH_OBJ)->valeur?></div>
            </div>
            <div class="section-content collapsed">
            <div class="periods-section">
                <div class="periods-content">
                    <div class="qa">
                        <div class="question" onclick="toggleAnswer(this)"><?php echo $res->fetch(PDO::FETCH_OBJ)->valeur?></div>
                        <div class="answer"><?php echo $res->fetch(PDO::FETCH_OBJ)->valeur?></div>
                    </div>
                    <div class="qa">
                        <div class="question" onclick="toggleAnswer(this)"><?php echo $res->fetch(PDO::FETCH_OBJ)->valeur?></div>
                        <div class="answer"><?php echo $res->fetch(PDO::FETCH_OBJ)?></div>
                    </div>
                    <div class="qa">
                        <div class="question" onclick="toggleAnswer(this)"><?php echo $res->fetch(PDO::FETCH_OBJ)->valeur?></div>
                        <div class="answer"><?php echo $res->fetch(PDO::FETCH_OBJ)->valeur?></div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!-- Technologie et connectivité -->
        <div class="section v">
            <div class="section-header collapsed" onclick="toggleSection(this)">
                <div class="section-title"><?php echo $res->fetch(PDO::FETCH_OBJ)->valeur?></div>
            </div>
            <div class="section-content collapsed">
            <div class="periods-section">
                <div class="periods-content">
                    <div class="qa">
                        <div class="question" onclick="toggleAnswer(this)"><?php echo $res->fetch(PDO::FETCH_OBJ)->valeur?></div>
                        <div class="answer"><?php echo $res->fetch(PDO::FETCH_OBJ)->valeur?></div>
                    </div>
                    <div class="qa">
                        <div class="question" onclick="toggleAnswer(this)"><?php echo $res->fetch(PDO::FETCH_OBJ)->valeur?></div>
                        <div class="answer"><?php echo $res->fetch(PDO::FETCH_OBJ)->valeur?></div>
                    </div>
                    <div class="qa">
                        <div class="question" onclick="toggleAnswer(this)"><?php echo $res->fetch(PDO::FETCH_OBJ)->valeur?></div>
                        <div class="answer"><?php echo $res->fetch(PDO::FETCH_OBJ)->valeur?></div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!-- Argent et paiements -->
        <div class="section">
            <div class="section-header collapsed" onclick="toggleSection(this)">
                <div class="section-title"><?php echo $res->fetch(PDO::FETCH_OBJ)->valeur?></div>
            </div>
            <div class="section-content collapsed">
            <div class="periods-section">
                <div class="periods-content">
                    <div class="qa">
                        <div class="question" onclick="toggleAnswer(this)"><?php echo $res->fetch(PDO::FETCH_OBJ)->valeur?></div>
                        <div class="answer"><?php echo $res->fetch(PDO::FETCH_OBJ)->valeur?></div>
                    </div>
                    <div class="qa">
                        <div class="question" onclick="toggleAnswer(this)"><?php echo $res->fetch(PDO::FETCH_OBJ)->valeur?></div>
                        <div class="answer"><?php echo $res->fetch(PDO::FETCH_OBJ)->valeur?></div>
                    </div>
                    <div class="qa">
                        <div class="question" onclick="toggleAnswer(this)"><?php echo $res->fetch(PDO::FETCH_OBJ)->valeur?></div>
                        <div class="answer"><?php echo $res->fetch(PDO::FETCH_OBJ)->valeur?></div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!-- Expérience locale et shopping -->
        <div class="section v">
            <div class="section-header collapsed" onclick="toggleSection(this)">
                <div class="section-title"><?php echo $res->fetch(PDO::FETCH_OBJ)->valeur?></div>
            </div>
            <div class="section-content collapsed">
            <div class="periods-section">
                <div class="periods-content">
                    <div class="qa">
                        <div class="question" onclick="toggleAnswer(this)"><?php echo $res->fetch(PDO::FETCH_OBJ)->valeur?></div>
                        <div class="answer"><?php echo $res->fetch(PDO::FETCH_OBJ)->valeur ?></div>
                    </div>
                    <div class="qa">
                        <div class="question" onclick="toggleAnswer(this)"><?php echo $res->fetch(PDO::FETCH_OBJ)->valeur?></div>
                        <div class="answer"><?php echo $res->fetch(PDO::FETCH_OBJ)->valeur ?></div>
                    </div>
                    <div class="qa">
                        <div class="question" onclick="toggleAnswer(this)"><?php echo $res->fetch(PDO::FETCH_OBJ)->valeur?></div>
                        <div class="answer"><?php echo $res->fetch(PDO::FETCH_OBJ)->valeur ?></div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!-- Loisirs et divertissements -->
        <div class="section">
            <div class="section-header collapsed" onclick="toggleSection(this)">
                <div class="section-title"><?php echo $res->fetch(PDO::FETCH_OBJ)->valeur?></div>
            </div>
          <div class="section-content collapsed">
            <div class="periods-section">
                <div class="periods-content">
                    <div class="qa">
                        <div class="question" onclick="toggleAnswer(this)"><?php echo $res->fetch(PDO::FETCH_OBJ)->valeur?></div>
                        <div class="answer"><?php echo $res->fetch(PDO::FETCH_OBJ) ->valeur?></div>
                    </div>
                    <div class="qa">
                        <div class="question" onclick="toggleAnswer(this)"><?php echo $res->fetch(PDO::FETCH_OBJ)->valeur?></div>
                        <div class="answer"><?php echo $res->fetch(PDO::FETCH_OBJ) ->valeur?></div>
                    </div>
                    <div class="qa">
                        <div class="question" onclick="toggleAnswer(this)"><?php echo $res->fetch(PDO::FETCH_OBJ) ->valeur?></div>
                        <div class="answer"><?php echo $res->fetch(PDO::FETCH_OBJ) ->valeur?></div>
                    </div>
                </div>
            </div>
          </div>
        </div>
    </div>


    <div class="anecdote__blocks">
        <div class="anecdote__header">
            <img src="img/histoire/anecdote_l.svg" alt="" class="anecdote__img">
            <p class="anecdote__header__title"><?php echo $res->fetch(PDO::FETCH_OBJ)->valeur?></p>
            <img src="img/histoire/anecdote_r.svg" alt="" class="anecdote__img">
        </div>
        <div class="anecdote__block">
            <h1 class="anecdote__title"><?php echo $res->fetch(PDO::FETCH_OBJ)->valeur?></h1>
            <p class="anecdote__text"><?php echo $res->fetch(PDO::FETCH_OBJ)->valeur?></p>
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
    <script>
document.addEventListener('DOMContentLoaded', () => {
    window.toggleSection = function(header) {
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
    };

    window.toggleAnswer = function(questionElement) {
        const qa = questionElement.closest('.qa');
        qa.classList.toggle('open');
    };
});
</script>
</html>