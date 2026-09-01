<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./assets/css/pages/avis.css">
  <link rel="stylesheet" href="./assets/css/navbar.css">
  <link rel="stylesheet" href="./assets/fontawesome-free/css/all.css">
<title>Contact</title>
<style>
  
</style>
</head>
<body>

  <header class="head">    
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
                <li><a href="avis.php">Hébergement</a></li>
            </ul>
        </nav>
        <div class="nav-overlay" id="navOverlay"></div> <!--pour mobile-->
  </header>

  <!-- INFO / FORM -->
  <div class="info-section">
    <div class="form-col">
      <h2>Remplissez vos informations</h2>
      <form onsubmit="return handleSubmit(event)">
        <div class="row-2">
          <input type="text" name="noms" placeholder="Noms">
          <input type="text" name="prenoms" placeholder="Prénoms">
        </div>
        <input type="email" name="email" placeholder="Email">
        <textarea name="avis" placeholder="Avis"></textarea>
        <input type="tel" name="tel" placeholder="Tel">

        <h3 class="mention-label">Laissez nous votre mention</h3>
        <div class="star-rating" id="starRating">
          <svg data-v="1" viewBox="0 0 24s 24"><polygon points="12,2 15,9 22,9 16.5,13.5 18.5,21 12,16.5 5.5,21 7.5,13.5 2,9 9,9"/></svg>
          <svg data-v="2" viewBox="0 0 24 24"><polygon points="12,2 15,9 22,9 16.5,13.5 18.5,21 12,16.5 5.5,21 7.5,13.5 2,9 9,9"/></svg>
          <svg data-v="3" viewBox="0 0 24 24"><polygon points="12,2 15,9 22,9 16.5,13.5 18.5,21 12,16.5 5.5,21 7.5,13.5 2,9 9,9"/></svg>
          <svg data-v="4" viewBox="0 0 24 24"><polygon points="12,2 15,9 22,9 16.5,13.5 18.5,21 12,16.5 5.5,21 7.5,13.5 2,9 9,9"/></svg>
          <svg data-v="5" viewBox="0 0 24 24"><polygon points="12,2 15,9 22,9 16.5,13.5 18.5,21 12,16.5 5.5,21 7.5,13.5 2,9 9,9"/></svg>
          <svg data-v="5" viewBox="0 0 24 24"><polygon points="12,2 15,9 22,9 16.5,13.5 18.5,21 12,16.5 5.5,21 7.5,13.5 2,9 9,9"/></svg>
        </div>

        <button type="submit" class="btn-envoyer">Envoyer</button>
      </form>
    </div>

    <div class="photo-col">
      <div class="photo-grid">
        <img src="../public/assets/img/avis/img1.jpeg" alt="Jardin - statue éléphant">
        <img src="../public/assets/img/avis/img2.jpeg" alt="Entrée - statue">
        <img src="../public/assets/img/avis/img3.jpeg" alt="Hall d'accueil">
        <img src="../public/assets/img/avis/img4.jpeg" alt="Jardin - gazebo">
      </div>
    </div>
  </div>

  <!-- CINEMA BANNER -->
  <div class="cinema-section">
    <img src="../public/assets/img/avis/img5.jpeg" alt="Salle de cinéma">
    <button class="home-btn" onclick="goHome()" title="Accueil">
      <svg viewBox="0 0 24 24"><path d="M3 11l9-8 9 8"/><path d="M5 10v10a1 1 0 001 1h4v-6h4v6h4a1 1 0 001-1V10"/></svg>
    </button>
  </div>

  <div class="page-bottom-space"></div>

  <script src="./assets/js/navbar.js"></script>
  <script src="./assets/js/pages/avis.js"></script>

</body>
</html>
