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
          <a href="index.php" class="header__logo"><img src="img/logo.png" alt=""></a>
          <div class="lang">
            <button class="lang_btn"><p>Fr</p></button>
            <div class="lang-content">
              <a href="#">Fr</a>
              <a href="#">En</a>
            </div>
          </div>
        </div>
        <p class="header__title desktop-title">Nous contacter</p>
            <div class="header__title mobile-title">
              <span>Nous</span>
              <span>contacter</span>
            </div>
      </div>
    </header>
    <main>
        <div class="main__header">
            <div class="main__header_text">
                Nous sommes un groupe d'étudiants de l'Université Gustave Eiffel avec comme projet de promouvoir la culture et le patrimoine de la ville de Kyoto.        
            </div>
       <div class="main__header">
            <h1 class="main__header_title">Notre Équipe</h1>
            <p class="main__header_text">Découvrez les membres de notre équipe talentueuse</p>
        </div>

        <section class="team-section">
            <div class="team-grid">
                <!-- Maëllys GIGLIONI -->
                <div class="team-member">
                  <h3 class="member-name">Maëllys GIGLIONI</h3>
                  <p class="member-role">Responsable contenu / communication</p>
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
                  <p class="member-role">Chef de projet / designer</p>
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
                  <p class="member-role">Développeur</p>
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
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2631.904358674684!2d2.5846133865431864!3d48.83739475504006!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e60e33dd9a3fdd%3A0x7e5ced48ab7fc8df!2sIUT%20%2F%20University%20of%20Marne-la-Vall%C3%A9e!5e1!3m2!1sru!2sfr!4v1748981966709!5m2!1sru!2sfr" width="100%" height="550" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

            <div class="university-logos">
                <img src="img/contacter/IUT.svg" alt="">
            </div>
        </section>
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
