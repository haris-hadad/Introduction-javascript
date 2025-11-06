// Sélection du bouton
const button = document.getElementById('button');

button.addEventListener('click', () => {
  // Utilisation de fetch pour récupérer le contenu du fichier expression.txt
  fetch('expression.txt')
    .then(response => {
      if (!response.ok) {
        throw new Error('Impossible de récupérer le fichier.');
      }
      return response.text(); // On récupère le texte
    })
    .then(text => {
      // Crée un paragraphe et insère le texte
      const p = document.createElement('p');
      p.textContent = text;
      document.body.appendChild(p);
    })
    .catch(error => {
      console.error('Erreur :', error);
    });
});