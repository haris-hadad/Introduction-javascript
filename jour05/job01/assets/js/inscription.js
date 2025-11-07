document.getElementById('formInscription').addEventListener('submit', async function(e) {
  e.preventDefault();

  const form = e.target;
  const data = new FormData(form);

  const response = await fetch('includes/inscription_action.php', {
    method: 'POST',
    body: data
  });

  const result = await response.json();

  // Réinitialise les messages d'erreur
  document.querySelectorAll('.erreur').forEach(div => div.textContent = '');

  if (result.success) {
    alert('Inscription réussie ! Vous allez être redirigé vers la connexion.');
    window.location.href = 'connexion.php';
  } else {
    for (const champ in result.errors) {
      document.getElementById('err' + champ.charAt(0).toUpperCase() + champ.slice(1)).textContent = result.errors[champ];
    }
  }
});