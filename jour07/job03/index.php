<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <title>Formulaire</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <header class="bg-blue-500 h-16 flex items-center justify-center">
        <nav>
            <ul class="flex gap-4 place-content-center">
                <li><a href="index.php">Accueil</a></li>
                <li><a href="index.php">Inscription</a></li>
                <li><a href="index.php">Connexion</a></li>
                <li><a href="index.php">Recherche</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <form action="index.php" method="post" class="border-solid">
        <fieldset>
        <legend>Civilité</legend>
        <input type="radio" name="civilite" value="Monsieur" id="monsieur">
        <label for="monsieur">Monsieur</label>
        <input type="radio" name="civilite" value="Madame" id="madame">
        <label for="madame">Madame</label>
        </fieldset>


        <fieldset>
        <label for="prenom">Prénom :</label>
        <input type="text" name="prenom" id="prenom" required
        class="border border-gray-400 p-2 rounded w-15 mb-5 h-6">


        <label for="nom">Nom :</label>
        <input type="text" name="nom" id="nom" required
        class="border border-gray-400 p-2 rounded w-15 mb-5 h-6">


        <label for="adresse">Adresse :</label>
        <input type="text" name="adresse" id="adresse" required
        class="border border-gray-400 p-2 rounded w-15 mb-5 h-6">


        <label for="email">Email :</label>
        <input type="email" name="email" id="email" required
        class="border border-gray-400 p-2 rounded w-15 mb-5 h-6">


        <label for="password">Mot de passe :</label>
        <input type="password" name="password" id="password" required
        class="border border-gray-400 p-2 rounded w-15 mb-5 h-6">


        <label for="password_confirm">Confirmer le mot de passe :</label>
        <input type="password" name="password_confirm" id="password_confirm" required
        class="border border-gray-400 p-2 rounded w-15 mb-5 h-6">
        </fieldset>


        <fieldset>
        <legend>Passions</legend>
        <input type="checkbox" name="passions[]" value="Informatique" id="informatique">
        <label for="informatique">Informatique</label>


        <input type="checkbox" name="passions[]" value="Voyages" id="voyages">
        <label for="voyages">Voyages</label>


        <input type="checkbox" name="passions[]" value="Sport" id="sport">
        <label for="sport">Sport</label>


        <input type="checkbox" name="passions[]" value="Lecture" id="lecture">
        <label for="lecture">Lecture</label>
        </fieldset>


        <button type="submit">Valider</button>
        </form>
    </main>
    <footer class="fixed bottom-0 w-full bg-black h-16 flex items-center justify-center">
        <ul class="h-16 flex gap-4 items-center justify-center">
            <li><a href="index.php" class="text-indigo-50 hover:text-indigo-700">Accueil</a></li>
            <li><a href="index.php" class="text-indigo-50 hover:text-indigo-700">Inscription</a></li>
            <li><a href="index.php" class="text-indigo-50 hover:text-indigo-700">Connexion</a></li>
            <li><a href="index.php" class="text-indigo-50 hover:text-indigo-700">Recherche</a></li>
        </ul>
    </footer>