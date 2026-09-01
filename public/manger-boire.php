<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manger et boire</title>
    <link rel="stylesheet" href="./assets/css/pages/manger-boire.css">
  <link rel="stylesheet" href="./assets/css/navbar.css">
  <link rel="stylesheet" href="./assets/fontawesome-free/css/all.css">
</head>
<body>
  <!--------------MAIN------------------------>
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
                <li><a href="hebergement.php">Hébergement</a></li>
            </ul>
        </nav>
        <div class="nav-overlay" id="navOverlay"></div> <!--pour mobile-->
    </header>
    <h1 class="title-section">Manger<strong>&</strong>Boire</h1>
    <div class="foot">
        <div class="btn-accueil-wrap">
            <button class="btn-accueil" aria-label="Retour à l'accueil">
                <a href="./accueil.php"><i class="fa-regular fa-home"></i></a>
            </button>
        </div>
        <div class="description">
            <strong><p>Regardez la carte</p></strong>
            <button class="btn-carte"><i class="fa fa-chevron-right"></i></button>
        </div>

    </div>
    <script src="./assets/js/navbar.js"></script>
</body>
</html>