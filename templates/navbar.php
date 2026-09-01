<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>
    <link rel="stylesheet" href="../public/assets/css/navbar.css">
</head>
<body>
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

    <script src="../public/assets/js/navbar.js"></script>

</body>
</html>