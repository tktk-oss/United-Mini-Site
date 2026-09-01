<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nos hebergements</title>
    <link rel="stylesheet" href="./assets/css/pages/hebergement.css">
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

    <h2 class="titre-section">Hebergements</h2>

    <div class="logement-grid">
        <section class="carte-package">
            <div class="img-package">
            <img src="./assets/img/logement/room-standard.jpeg" alt="Chambre Standard">
            </div>
            <h2 class="carte-titre">Chambre Standard</h2>
            <button class="btn-reservez">Réservez</button>
        </section>

        <section class="carte-package">
            <div class="img-package">
            <img src="./assets/img/logement/room-confort.jpeg" alt="Chambre confort">
            </div>
            <h2 class="carte-titre">Chambre confort</h2>
            <button class="btn-reservez">Réservez</button>
        </section>

        <section class="carte-package">
            <div class="img-package">
            <img src="./assets/img/logement/room-confort+.jpeg" alt="Chambre confort plus">
            </div>
            <h2 class="carte-titre">Chambre confort plus</h2>
            <button class="btn-reservez">Réservez</button>
        </section>

        <section class="carte-package">
            <div class="img-package">
            <img src="./assets/img/logement/room-suite.jpeg" alt="Suite">
            </div>
            <h2 class="carte-titre">Suite</h2>
            <button class="btn-reservez">Réservez</button>
        </section>
    </div>
    <div class="apparts-grid">
        <section class="apparts-package">
            <div class="img-package">
                <img src="./assets/img/logement/appartsMbk2.jpeg" alt="Appartement United">
            </div>
        </section>

        <section class="apparts-package">
            <div class="img-package">
                <img src="./assets/img/logement/appartsMbk.jpeg" alt="Appartement United">
            </div>
        </section>

        <section class="apparts-package">
            <div class="img-package">
                <img src="./assets/img/logement/blue-appart.jpeg" alt="Appartement United">
            </div>
        </section>

        <section class="apparts-package">
            <div class="img-package">
                <img src="./assets/img/logement/green-appart.jpeg" alt="Appartement United">
            </div>
        </section>
    </div>

    <div class="description"> 
        <div class="desc-text">
            <p>Appartements et studios meubles</p>
            <button>Réservez</button>
        </div>
        <div class="btn-accueil-wrap">
            <button class="btn-accueil" aria-label="Retour à l'accueil">
                <a href="./accueil.php"><i class="fa-regular fa-home"></i></a>
            </button>
        </div>
    </div>

    <script src="./assets/js/navbar.js"></script>
</body>
</html>
