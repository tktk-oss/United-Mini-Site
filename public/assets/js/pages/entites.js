// 1. Sélection des éléments HTML
const liensVideo = document.querySelectorAll('.btn-video');
const modal = document.getElementById('video-modal');
const closeModal = document.getElementById('close-modal');
const video = document.getElementById('my-video');
const videoSource = document.getElementById('video-source');
const iframe = document.getElementById('my-iframe');

// Fonction utilitaire : extrait l'ID YouTube depuis n'importe quel format de lien
function getYoutubeId(url) {
  const match = url.match(/(?:youtu\.be\/|youtube\.com\/(?:embed\/|watch\?v=))([^&?/]+)/);
  return match ? match[1] : null;
}

// 2. Gestion du clic sur les liens
liensVideo.forEach(lien => {
  lien.addEventListener('click', (e) => {
    e.preventDefault();

    const srcVideo = lien.getAttribute('href');
    const youtubeId = getYoutubeId(srcVideo);

    modal.style.display = 'flex';

    if (youtubeId) {
      // Cas vidéo YouTube
      video.style.display = 'none';
      video.pause();
      iframe.style.display = 'block';
      iframe.setAttribute('src', `https://www.youtube.com/embed/${youtubeId}?autoplay=1`);
    } else {
      // Cas vidéo locale (.mp4)
      iframe.style.display = 'none';
      iframe.setAttribute('src', '');
      video.style.display = 'block';
      videoSource.setAttribute('src', srcVideo);
      video.load();
    }
  });
});

// 3. Lance la vidéo locale dès qu'elle est prête (ne concerne pas YouTube, géré par autoplay=1)
video.addEventListener('canplay', () => {
  video.play().catch(error => {
    console.log("La lecture automatique a été interceptée par le navigateur :", error);
  });
});

// 4. Erreur de chargement (vidéo locale uniquement)
video.addEventListener('error', () => {
  if (video.style.display !== 'none') {
    alert("Erreur : Impossible de charger la vidéo. Vérifiez que le fichier existe au bon chemin.");
    fermerModale();
  }
});

// 5. Fermeture propre : stoppe vidéo locale ET iframe YouTube
function fermerModale() {
  modal.style.display = 'none';
  video.pause();
  videoSource.setAttribute('src', '');
  iframe.setAttribute('src', ''); // Stoppe la lecture YouTube
}

// 6. Événements de fermeture
closeModal.addEventListener('click', fermerModale);
window.addEventListener('click', (e) => {
  if (e.target === modal) {
    fermerModale();
  }
});