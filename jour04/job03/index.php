<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Filtrer Pokémon</title>
  <style>
    body { font-family: Arial, sans-serif; margin: 20px; }
    input, select { margin: 5px; }
    .pokemon { border: 1px solid #ccc; padding: 5px; margin: 5px; display: inline-block; width: 200px; }
  </style>
</head>
<body>

  <h1>Filtrer Pokémon</h1>

    <form id="filterForm">
      <label>ID: <input type="text" id="id"></label>
      <label>Nom: <input type="text" id="nom"></label>
      <label>Type:
        <select id="type">
          
          
        </select>
      </label>
      <input type="button" id="filtrer" value="Filtrer">
    </form>

    <h2>Résultats :</h2>
    <div id="results"></div>

  <script src="script.js"></script>
</body>
</html>