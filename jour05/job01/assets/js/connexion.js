document.getElementById('formConnexion').addEventListener('submit', async function(e) {
  e.preventDefault();

  const form = e.target;
  const data = new FormData(form);

  const response = await fetch('./includes/connexion_action.php', {
    method: 'POST',
    body: data
  });

  const result = await response.json();
  document.querySelectorAll('.erreur').forEach(div => div.textContent = '');

  if (result.success) {
    window.location.href = 'index.php';
  } else {
    for (const champ in result.errors) {
      document.getElementById('err' + champ.charAt(0).toUpperCase() + champ.slice(1)).textContent = result.errors[champ];
    }
  }
});