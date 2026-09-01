 // Star rating (defaults to 2 stars filled, matching the mock-up)
  const stars = document.querySelectorAll('#starRating svg');
  let currentRating = 2;

  function paintStars(rating){
    stars.forEach(s => {
      s.classList.toggle('filled', parseInt(s.dataset.v) <= rating);
    });
  }
  stars.forEach(s => {
    s.addEventListener('click', () => {
      currentRating = parseInt(s.dataset.v);
      paintStars(currentRating);
    });
  });
  paintStars(currentRating);

  function handleSubmit(e){
    e.preventDefault();
    alert('Avis envoyé — note : ' + currentRating + '/5');
    return false;
  }

  function goHome(){
     window.location.href = './accueil.php';
  }