<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Loisirs</title>
  <link rel="stylesheet" href="./assets/css/pages/loisirs.css">
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
  
  <h2 class="titre-section">Bien-etre et Loisirs</h2>

  <!-- Grille d'images en 4 colonnes -->
  <div class="row">  
    <div class="column">
        <div class="image-wrapper">
            <img class="img-tall" src="./assets/img/loisirs/pack.jpg" alt="Package">
            <button class="btn-reserve">Réservez</button>
        </div>
    </div>
      
    <div class="column">
        <div class="image-wrapper">
            <img class="img-short" src="./assets/img/loisirs/salleSport.jpeg" alt="Salle de sport">
            <button class="btn-reserve">Réservez</button>
        </div>
        <div class="image-wrapper">
            <img class="img-short" src="./assets/img/loisirs/piscine2.jpeg" alt="Piscine">
            <button class="btn-reserve">Réservez</button>
        </div>
        <div class="image-wrapper">
            <img class="img-short" src="./assets/img/loisirs/sauna2.jpeg" alt="Sauna">
            <button class="btn-reserve">Réservez</button>
        </div>
    </div>  
    
    <div class="column">
      <div class="image-wrapper">
        <img class="img-medium" src="./assets/img/loisirs/sauna.jpeg" alt="Sauna2">
        <button class="btn-reserve">Réservez</button>
      </div>
      <div class="image-wrapper">
        <img class="img-medium" src="./assets/img/loisirs/cinema.jpeg" alt="Cinema">
        <button class="btn-reserve">Réservez</button>
      </div>
    </div>
    
    <div class="column">
      <div class="image-wrapper">
        <img class="img-short" src="./assets/img/loisirs/formule1-face-view.jpeg" alt="Formule 1">
        <button class="btn-reserve">Réservez</button>
      </div>
      <div class="image-wrapper">
        <img class="img-wide" src="./assets/img/loisirs/formule1-back-view.jpeg" alt="Formule 1">
        <button class="btn-reserve">Réservez</button>
      </div>
  </div>

  <div class="btn-accueil-wrap">
      <button class="btn-accueil" aria-label="Retour à l'accueil">
          <a href="./accueil.php"><i class="fa-regular fa-home"></i></a>
      </button>         
  </div> 

  <script src="./assets/js/navbar.js"></script>
</body>
</html>