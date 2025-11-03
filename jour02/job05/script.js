window.addEventListener('scroll', () => {
  const footer = document.getElementById('progressBar');

  // Calcul du pourcentage de scroll
  const scrollTop = window.scrollY || document.documentElement.scrollTop;
  const docHeight = document.documentElement.scrollHeight - window.innerHeight;
  const scrolled = (scrollTop / docHeight) * 100;

  // Changement de la largeur
  footer.style.width = scrolled + '%';

  // Couleur de la barre (rouge -> vert)
  const hue = (scrolled / 100) * 120; // 0° (rouge) à 120° (vert)
  footer.style.backgroundColor = `hsl(${hue}, 80%, 45%)`;
});