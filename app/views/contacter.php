<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Nous-contacter</title>
    <link rel="stylesheet" href="style/contacter.css">
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
              <li><a href="faq.php">Questions fréquentes</a></li>
              <li><a class="active" href="contacter.php">Nous-contacter</a></li>
            </ul>
          </nav>
          <a href="index.php" class="header__logo"><img src="img/logo.svg" alt=""></a>
          <div class="lang">
            <button class="lang_btn"><p><?php if ($lang ===  "FR") {echo "Fr";} else {echo "En";}?></p></button>
                <div class="lang-content">
                  <a href="contacter.php?lang=FR">Fr</a>
                  <a href="contacter.php?lang=EN">En</a>
              </div>
          </div>
        </div>
        <p class="header__title desktop-title"<?php echo $res->fetch(PDO::FETCH_OBJ)->valeur?></p>
            <div class="header__title mobile-title">
              <span>Nous</span>
              <span>contacter</span>
            </div>
      </div>
    </header>
    <main>
        <div class="main__header">
            <div class="main__header_text">
                <?php echo $res->fetch(PDO::FETCH_OBJ)->valeur?>
            </div>
       <div class="main__header">
            <h1 class="main__header_title"><?php echo $res->fetch(PDO::FETCH_OBJ)->valeur?></h1>
            <p class="main__header_text"><?php echo $res->fetch(PDO::FETCH_OBJ)->valeur?></p>
        </div>

        <section class="team-section">
            <div class="team-grid">
                <!-- Maëllys GIGLIONI -->
                <div class="team-member">
                  <h3 class="member-name">Maëllys GIGLIONI</h3>
                  <p class="member-role"><?php echo $res->fetch(PDO::FETCH_OBJ)->valeur?></p>
                    <img src="img/contacter/Maellys.png" alt="Maëllys GIGLIONI" class="member-avatar">
                    <div class="social-links">
                        <a href="#" class="social-link linkedin" title="LinkedIn"><img src="img/contacter/🦆 icon _linkedin_.svg" alt=""></a>
                        <a href="#" class="social-link github" title="GitHub"><img src="img/contacter/🦆 icon _github_.svg" alt=""></a>
                        <a href="#" class="social-link email" title="Email"><img src="img/contacter/🦆 icon _email_.svg" alt=""></a>
                    </div>
                </div>

                <!-- Mathis DINTRAT -->
                <div class="team-member">
                  <h3 class="member-name">Mathis DINTRAT</h3>
                  <p class="member-role"><?php echo $res->fetch(PDO::FETCH_OBJ)->valeur?></p>
                    <img src="img/contacter/Mathis.png" alt="Mathis DINTRAT" class="member-avatar">
                   <div class="social-links">
                        <a href="#" class="social-link linkedin" title="LinkedIn"><img src="img/contacter/🦆 icon _linkedin_.svg" alt=""></a>
                        <a href="#" class="social-link github" title="GitHub"><img src="img/contacter/🦆 icon _github_.svg" alt=""></a>
                        <a href="#" class="social-link email" title="Email"><img src="img/contacter/🦆 icon _email_.svg" alt=""></a>
                    </div>
                </div>

                <!-- Yevhen KEFA -->
                <div class="team-member">
                  <h3 class="member-name">Yevhen KEFA</h3>
                  <p class="member-role"><?php echo $res->fetch(PDO::FETCH_OBJ)->valeur?></p>
                    <img src="img/contacter/Yevhen.png" alt="Yevhen KEFA" class="member-avatar">
                    <div class="social-links">
                        <a href="#" class="social-link linkedin" title="LinkedIn"><img src="img/contacter/🦆 icon _linkedin_.svg" alt=""></a>
                        <a href="#" class="social-link github" title="GitHub"><img src="img/contacter/🦆 icon _github_.svg" alt=""></a>
                        <a href="#" class="social-link email" title="Email"><img src="img/contacter/🦆 icon _email_.svg" alt=""></a>
                    </div>
                </div>
            </div>
        </section>

        <section class="university-section">
            <h2 class="university-title">IUT Marne-la-Vallée</h2>
            
            <div class="map-container">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3074.042163196201!2d2.582689712287678!3d48.837221002076134!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e60e33dd9a3fdd%3A0x7e5ced48ab7fc8df!2sIUT%20de%20Marne-la-Vall%C3%A9e%20-%20Universit%C3%A9%20Gustave%20Eiffel!5e1!3m2!1sfr!2sfr!4v1749649180588!5m2!1sfr!2sfr" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>            
            </div>
            <div class="university-logos">
                <img src="img/contacter/IUT.svg" alt="">
            </div>
        </section>
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
