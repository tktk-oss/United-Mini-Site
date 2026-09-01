<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <link rel="stylesheet" href="./assets/css/pages/accueil.css">
    <link rel="stylesheet" href="./assets/fontawesome-free/css/all.css">
    <link rel="stylesheet" href="./assets/css/navbar.css">
    <link rel="stylesheet" href="./assets/css/footer.css">
</head>
<body>
    <!-- --------------------NAVBAR-------------------- -->
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

    <!-- Overlay pour mobile -->
    <div class="nav-overlay" id="navOverlay"></div>

    <!-- //------------MAIN----------------------// -->
    <div class="main">
        <div class="container">
            <h1>BIENVENUE CHEZ VOUS!</h1>

            <div class="mascotte"><img src="./assets/img/logo/mascotte.png" alt="Mascotte UnitedHotelGroups"></div>

            <div class="menu-btn">
                <a href="./entites.php"><button>Nos entites</button></a>
                <a href="./hebergement.php"><button>Hebergements</button></a>
                <a href="./offres.php"><button>Offres</button></a>
                <a href="./loisirs.php"><button>Bien-etre et loisir</button></a>
                <a href="./conference.php"><button>Salle de conference</button></a>
                <a href="./avis.php"><button>Avis google</button></a>
            </div>
        </div>
    </div>

    <footer>    
        <div class="social-zone">
            <div class="follow-btn footer-btn">Suivez-nous sur</div>
            <div class="social-link">
                <button id="facebook"><a href="http://facebook.com"><i class="fa-brands fa-facebook"></i></a></button>
                <button id="TikTok"><a href="http://tiktok.com"><i class="fa-brands fa-tiktok"></i></a></button>
                <button id="Instagram"><a href="http://instagram.com"><i class="fa-brands fa-instagram"></i></a></button>
                <button id="youtube"><a href="http://youtube.com"><i class="fa-brands fa-youtube"></i></a></button>
            </div>
        </div>
        <a href="https://wa.me/237689657753?text=Bonjour%je%20voudrais%20prendre%20des%20renseignements" class="link"><div class="contact-link footer-btn">Contactez-nous sur</div></a>
        <!-- <p>&copy; 2023 Mon Site. Tous droits réservés.</p> -->
    </footer>

    <script src="./assets/js/navbar.js"></script>
</body>
</html>