<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Nos entités</title>
  <link rel="stylesheet" href="./assets/css/pages/entites.css">
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
  <h2 class="titre-section">Nos entités</h2>

  <div class="entites-grid">

    <section class="carte-produit">
      <header><h2 class="carte-titre">United hôtel &amp; cinéma MBANKOMO</h2></header> <!------------ici----------->
      <div class="img">
        <img src="../public/assets/img/hotels/UHCC.jpeg" alt="United hôtel et cinéma Mbankomo">
        <span class="badge-visite"><a href="https://youtu.be/VLtmiVOIWCM" class="btn-video">Visiter</a></span>
      </div>
    </section>

    <section class="carte-produit">
      <header><h2 class="carte-titre">United hôtel International Yaoundé</h2></header>
      <div class="img">
        <img src="../public/assets/img/hotels/UHI.jpeg" alt="United hôtel International Yaoundé">
        <span class="badge-visite"><a href="https://youtu.be/44PXYEJUYTk" class="btn-video">Visiter</a></span>
      </div>
    </section>

    <section class="carte-produit">
      <header><h2 class="carte-titre">United hôtel MBALMAYO</h2></header>
      <div class="img">
        <img src="../public/assets/img/hotels/UHMbl.jpeg" alt="United hôtel Mbalmayo">
        <span class="badge-visite"><a href="https://youtu.be/DfnwJsjjXqw" class="btn-video">Visiter</a></a></span>
      </div>
    </section>

    <section class="carte-produit entite-4">
      <header><h2 class="carte-titre">United hôtel BALESSING</h2></header>
      <div class="img">
        <img src="../public/assets/img/hotels/hotelbal-bottom-view.jpeg" alt="United hôtel Balessing">
        <span class="badge-visite"><a href="https://youtu.be/DfnwJsjjXqw" class="btn-video">Visiter</a></span>
      </div>
    </section>

    <p class="description">
      L'aventure <strong>United Hotels Group</strong> débute en <strong>février</strong> 2020 avec une promesse : celle de transformer chaque séjour en une expérience mémorable. 
      Tout commence avec l'ouverture de <strong>United Hôtel &amp; Cinéma de Mbankomo</strong> , un sanctuaire dédié à l'hébergement, à la restauration et aux loisirs où le divertissement rencontre le confort. 
      Pionnier dans l'intégration de technologies immersives comme le cinéma 3D et la réalité virtuelle, cet établissement a posé les jalons d'une vision singulière de l'hôtellerie au Cameroun. 
      Initialement classé 3 étoiles, l'établissement a su évoluer par son excellence opérationnelle pour devenir en mars 2021 un complexe 4 étoiles de référence. 
      En <strong>2022</strong> , le groupe dans sa logique d'expansion franchit une étape historique avec l'inauguration, le <strong>1er septembre, de United Hôtel International</strong>. 
      Situé en plein cœur de la ville de Yaoundé, cet écrin de luxe 4 étoiles s'est imposé comme la référence incontournable de l'hôtellerie d'affaires, alliant prestige, gastronomie et services haut de gamme. 
      Depuis, la chaîne n'a cessé de croître, s'étendant à <strong>Balessing</strong> (en octobre 2024) et <strong>Mbalmayo</strong> en avril 2025, tout en diversifiant son offre avec <strong>United Apparts</strong> (avril 2025). 
      Aujourd'hui, United Hotels Group est bien plus qu'une chaîne d'hôtels : c'est une constellation de destinations adaptées à chaque besoin de la vie moderne.
      <strong>Slogan : Profitez de la différence !!!</strong>
    </p>
      
    <div class="btn-accueil-wrap">
      <button class="btn-accueil" aria-label="Retour à l'accueil">
        <a href="./accueil.php" title="Retour a l acceuil"><i class="fa-regular fa-house"></i></a>
      </button>
    </div>

  </div>

  <!-- Votre modale unique (en bas de page) -->
  <div id="video-modal" class="modal">
    <!-- Le chargement s'affiche ici pendant l'attente -->
    <div id="video-loader" class="loader"></div>
    
    <div class="modal-content">
      <span id="close-modal" class="close-btn">&times;</span>
      <!-- Ajout de "playsinline" et "muted" optionnel pour forcer la lecture sur mobile/Safari -->
      <video id="my-video" controls playsinline>
        <source id="video-source" src="" type="video/mp4">
        Votre navigateur ne supporte pas les vidéos.
      </video>
      <iframe id="my-iframe" style="display:none;" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div>
    </div>
  </div>

  <!-- -------------------------script------------------------- -->
  <script src="./assets/js/navbar.js"></script>
  <script src="../public/assets/js/pages/entites.js"></script>
</body>
</html>