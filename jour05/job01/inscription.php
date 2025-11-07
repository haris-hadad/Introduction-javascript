<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Inscription</title>
  <link rel="stylesheet" href="assets/css/style.css">
  <script defer src="assets/js/inscription.js"></script>
</head>
<body>
  <h1>Créer un compte</h1>

  <form id="formInscription" method="post">
    <label>Prénom :</label>
    <input type="text" name="prenom" required>
    <div class="erreur" id="errPrenom"></div>

    <label>Nom :</label>
    <input type="text" name="nom" required>
    <div class="erreur" id="errNom"></div>

    <label>Email :</label>
    <input type="email" name="email" required>
    <div class="erreur" id="errEmail"></div>

    <label>Mot de passe :</label>
    <input type="password" name="password" required>
    <div class="erreur" id="errPassword"></div>

    <label>Confirmation :</label>
    <input type="password" name="confirm" required>
    <div class="erreur" id="errConfirm"></div>

    <button type="submit">S’inscrire</button>
  </form>

  <p>Déjà inscrit ? <a href="connexion.php">Connectez-vous</a></p>
</body>
</html>