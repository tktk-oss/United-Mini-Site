// ============================================
// 1. MENU HAMBURGER
// ============================================
const hamburger = document.getElementById('hamburger');
const navLinks = document.getElementById('navLinks');
const overlay = document.getElementById('navOverlay');

function toggleMenu() {
    hamburger.classList.toggle('active');
    navLinks.classList.toggle('open');
    overlay.classList.toggle('active');

    // Empêcher le scroll du body quand le menu est ouvert
    document.body.style.overflow = navLinks.classList.contains('open') ? 'hidden' : '';
}

hamburger.addEventListener('click', toggleMenu);

// Fermer le menu en cliquant sur l'overlay
overlay.addEventListener('click', toggleMenu);

// Fermer le menu en cliquant sur un lien
navLinks.querySelectorAll('a').forEach(link => {
    link.addEventListener('click', () => {
        if (navLinks.classList.contains('open')) {
            toggleMenu();
        }
    });
});

// ============================================
// 2. EFFET DE SCROLL (navbar devient opaque)
// ============================================
const navbar = document.getElementById('navbar');

window.addEventListener('scroll', () => {
    if (window.scrollY > 50) {
        navbar.classList.add('scrolled');
    } else {
        navbar.classList.remove('scrolled');
    }
});

// ============================================
// 3. FERMER LE MENU AVEC LA TOUCHE ECHAP
// ============================================
document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape' && navLinks.classList.contains('open')) {
        toggleMenu();
    }
});

// ============================================
// 4. ADAPTATION AU REDIMENSIONNEMENT
// ============================================
window.addEventListener('resize', () => {
    if (window.innerWidth > 768 && navLinks.classList.contains('open')) {
        toggleMenu();
    }
});

console.log('✅ Navbar chargée avec :root !');