const btnFiltrer = document.getElementById('filtrer');
const select = document.getElementById('type');
const resultsDiv = document.getElementById('results');

let pokemonsData = [];

// Chargement du fichier JSON
fetch('pokemon.json')
  .then(response => {
    if (!response.ok) {
      throw new Error('Erreur lors du chargement du fichier JSON');
    }
    return response.json();
  })
  .then(pokemons => {
    pokemonsData = pokemons;

    // Extraction des types uniques
    const types = [...new Set(pokemonsData.flatMap(p => p.type))];
    console.log(types);

    // Ajout d'une option vide par défaut
    const optionDefault = document.createElement('option');
    optionDefault.value = '';
    optionDefault.textContent = '-- Tous les types --';
    select.appendChild(optionDefault);

    // Création des options de type
    types.forEach(type => {
      const option = document.createElement('option');
      option.value = type;
      option.textContent = type;
      select.appendChild(option);
    });
  })
  .catch(error => {
    console.error(error);
    resultsDiv.textContent = 'Erreur : impossible de charger les données.';
  });

// Événement de filtrage
btnFiltrer.addEventListener('click', () => {
  const idFilter = document.getElementById('id').value.trim();
  const nomFilter = document.getElementById('nom').value.trim().toLowerCase();
  const typeFilter = select.value;

  const filtered = pokemonsData.filter(pokemon => {
    const matchId = idFilter === '' || pokemon.id.toString() === idFilter;
    const matchNom = nomFilter === '' || pokemon.name.french.toLowerCase().includes(nomFilter);
    const matchType = typeFilter === '' || pokemon.type.includes(typeFilter);
    return matchId && matchNom && matchType;
  });

  // Affichage des résultats
  resultsDiv.innerHTML = '';

  if (filtered.length === 0) {
    resultsDiv.textContent = 'Aucun Pokémon trouvé.';
  } else {
    filtered.forEach(p => {
      const div = document.createElement('div');
      div.className = 'pokemon';
      div.innerHTML = `
        <strong>${p.name.french}</strong><br>
        ID : ${p.id}<br>
        Type : ${p.type.join(', ')}
      `;
      resultsDiv.appendChild(div);
    });
  }
});
