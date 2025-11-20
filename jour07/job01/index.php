<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <title>Formulaire</title>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.php">Accueil</a></li>
                <li><a href="index.php">Inscription</a></li>
                <li><a href="index.php">Connexion</a></li>
                <li><a href="index.php">Recherche</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <form action="index.php" method="post">
        <fieldset>
        <legend>Civilité</legend>
        <input type="radio" name="civilite" value="Monsieur" id="monsieur">
        <label for="monsieur">Monsieur</label>
        <input type="radio" name="civilite" value="Madame" id="madame">
        <label for="madame">Madame</label>
        </fieldset>


        <fieldset>
        <label for="prenom">Prénom :</label>
        <input type="text" name="prenom" id="prenom" required>


        <label for="nom">Nom :</label>
        <input type="text" name="nom" id="nom" required>


        <label for="adresse">Adresse :</label>
        <input type="text" name="adresse" id="adresse" required>


        <label for="email">Email :</label>
        <input type="email" name="email" id="email" required>


        <label for="password">Mot de passe :</label>
        <input type="password" name="password" id="password" required>


        <label for="password_confirm">Confirmer le mot de passe :</label>
        <input type="password" name="password_confirm" id="password_confirm" required>
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
    <footer>
        <ul>
            <li><a href="index.php">Accueil</a></li>
            <li><a href="index.php">Inscription</a></li>
            <li><a href="index.php">Connexion</a></li>
            <li><a href="index.php">Recherche</a></li>
        </ul>
    </footer>

</body>
</html>