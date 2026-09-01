<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Offres</title>
  <link rel="stylesheet" href="./assets/css/pages/offres.css">
  <link rel="stylesheet" href="./assets/css/features.css">
  <link rel="stylesheet" href="./assets/css/navbar.css">
  <link rel="stylesheet" href="./assets/fontawesome-free/css/all.css">
</head>
<body>

  <!-----------------------NAVBAR----------------------->
  <nav class="navbar" id="navbar">
      <!-- Logo -->
      <div class="logo">
          <a href="accueil.php"><img src="../public/assets/img/logo/logo.png" alt="Logo"></a> 
      </div>

      <!-- Menu Hamburger -->
      <button class="hamburger" id="hamburger" aria-label="Menu">
          <span></span>
          <span></span>
          <span></span>
      </button>

      <!-- Liens de navigation -->
      <ul class="nav-links" id="navLinks">
          <li><a href="offres.php">Offres</a></li>
          <li><a href="manger-boire.php">Manger & Boire</a></li>
          <li><a href="loisirs.php">Loisirs</a></li>
          <li><a href="conference.php">Conférences</a></li>
          <li><a href="hebergement.php">Hébergement</a></li>
      </ul>
  </nav>
  <div class="nav-overlay" id="navOverlay"></div> <!--pour mobile-->

  <!--------------MAIN------------------------>
  <h2 class="titre-section">Nos Offres</h2>

  <div class="packages-grid">

    <section class="carte-package">
      <div class="img-package">
        <img src="./assets/img/packages/flyer-weekend-détente.jpeg" alt="Package Week-end Détente">
      </div>
      <h2 class="carte-titre">Week-end Détente</h2>
      <button class="btn-reservez">Réservez</button>
    </section>

    <section class="carte-package">
      <div class="img-package">
        <img src="./assets/img/packages/offre-evasion.jpeg" alt="Package Évasion">
      </div>
      <h2 class="carte-titre">package Évasion</h2>
      <button class="btn-reservez">Réservez</button>
    </section>

    <section class="carte-package">
      <div class="img-package">
        <img src="./assets/img/packages/flyer-UHCC.jpeg" alt="Package Loisir">
      </div>
      <h2 class="carte-titre">package loisir</h2>
      <button class="btn-reservez">Réservez</button>
    </section>
  </div>

  <div class="btn-accueil-wrap">
      <button class="btn-accueil" aria-label="Retour à l'accueil">
        <a href="./accueil.php"><i class="fa-regular fa-home"></i></a>
      </button>
  </div>

  <script src="./assets/js/navbar.js"></script>
</body>
</html>