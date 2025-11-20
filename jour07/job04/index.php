<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulaire</title>

  <script src="https://cdn.tailwindcss.com"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>

<body class="bg-gray-100">

  <header class="bg-blue-600 flex h-16 items-center justify-center text-white">
    <nav>
      <ul class="flex gap-4">
        <li><a href="index.php" class="hover:text-indigo-50">Accueil</a></li>
        <li><a href="index.php" class="hover:text-indigo-50">Inscription</a></li>
        <li><a href="index.php" class="hover:text-indigo-50">Connexion</a></li>
        <li><a href="index.php" class="hover:text-indigo-50">Recherche</a></li>
      </ul>
    </nav>
  </header>

  <main class="flex justify-center mt-10">
    <form action="index.php" method="post" class="bg-white p-8 rounded-xl shadow-lg w-full max-w-2xl">

      <fieldset class="mb-6 flex items-center gap-6">
        <legend class="font-semibold">Civilité</legend>
        <label class="flex items-center gap-2">
          <input type="radio" name="civilite" value="Monsieur" required>
          Monsieur
        </label>
        <label class="flex items-center gap-2">
          <input type="radio" name="civilite" value="Madame">
          Madame
        </label>
      </fieldset>

      <div class="mb-4">
        <label for="prenom" class="font-medium">Prénom :</label>
        <div class="relative mt-1">
          <i class="fa-solid fa-user absolute left-3 top-3 text-blue-500"></i>
          <input type="text" id="prenom" name="prenom" class="w-full border p-2 pl-10 rounded-md" required>
        </div>
      </div>

      <div class="mb-4">
        <label for="nom" class="font-medium">Nom :</label>
        <div class="relative mt-1">
          <i class="fa-solid fa-user-tag absolute left-3 top-3 text-blue-500"></i>
          <input type="text" id="nom" name="nom" class="w-full border p-2 pl-10 rounded-md" required>
        </div>
      </div>

      <div class="mb-4">
        <label for="adresse" class="font-medium">Adresse :</label>
        <div class="relative mt-1">
          <i class="fa-solid fa-location-dot absolute left-3 top-3 text-blue-500"></i>
          <input type="text" id="adresse" name="adresse" class="w-full border p-2 pl-10 rounded-md" required>
        </div>
      </div>

      <div class="mb-4">
        <label for="email" class="font-medium">Email :</label>
        <div class="relative mt-1">
          <i class="fa-solid fa-envelope absolute left-3 top-3 text-blue-500"></i>
          <input type="email" id="email" name="email" class="w-full border p-2 pl-10 rounded-md" required>
        </div>
      </div>

      <div class="mb-4">
        <label for="password" class="font-medium">Mot de passe :</label>
        <div class="relative mt-1">
          <i class="fa-solid fa-lock absolute left-3 top-3 text-blue-500"></i>
          <input type="password" id="password" name="password" class="w-full border p-2 pl-10 rounded-md" required>
        </div>
      </div>

      <div class="mb-6">
        <label for="password_confirm" class="font-medium">Confirmer le mot de passe :</label>
        <div class="relative mt-1">
          <i class="fa-solid fa-lock-open absolute left-3 top-3 text-blue-500"></i>
          <input type="password" id="password_confirm" name="password_confirm" class="w-full border p-2 pl-10 rounded-md" required>
        </div>
      </div>

      <fieldset class="mb-6">
  <legend class="font-semibold mb-2">Passions</legend>
  <div class="grid grid-cols-2 gap-4 px-4">
    <label class="flex items-center gap-2">
      <input type="checkbox" name="passions[]" value="Informatique">
      <i class="fa-solid fa-laptop text-blue-500"></i> Informatique
    </label>
    <label class="flex items-center gap-2">
      <input type="checkbox" name="passions[]" value="Voyages">
      <i class="fa-solid fa-plane text-blue-500"></i> Voyages
    </label>
    <label class="flex items-center gap-2">
      <input type="checkbox" name="passions[]" value="Sport">
      <i class="fa-solid fa-person-running text-blue-500"></i> Sport
    </label>
    <label class="flex items-center gap-2">
      <input type="checkbox" name="passions[]" value="Lecture">
      <i class="fa-solid fa-book text-blue-500"></i> Lecture
    </label>
  </div>
</fieldset>

      <button type="submit" class="w-full bg-blue-600 text-white p-3 mt-4 rounded-md hover:bg-blue-700">Valider</button>

    </form>
  </main>

  <footer class="bottom-0 w-full bg-black h-16 flex justify-center">
    <ul class="h-16 flex gap-4 items-center justify-center text-white">
      <li><a href="index.php" class="hover:text-blue-400">Accueil</a></li>
      <li><a href="index.php" class="hover:text-blue-400">Inscription</a></li>
      <li><a href="index.php" class="hover:text-blue-400">Connexion</a></li>
      <li><a href="index.php" class="hover:text-blue-400">Recherche</a></li>
    </ul>
  </footer>

</body>
</html>