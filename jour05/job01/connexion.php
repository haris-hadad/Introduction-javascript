<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Connexion</title>
  <link rel="stylesheet" href="assets/css/style.css">
  <script defer src="assets/js/connexion.js"></script>
</head>
<body>
  <h1>Connexion</h1>

  <form id="formConnexion" method="post">
    <label>Email :</label>
    <input type="email" name="email" required>
    <div class="erreur" id="errEmail"></div>

    <label>Mot de passe :</label>
    <input type="password" name="password" required>
    <div class="erreur" id="errPassword"></div>

    <button type="submit">Se connecter</button>
  </form>

  <p>Pas encore de compte ? <a href="inscription.php">Inscrivez-vous</a></p>
</body>
</html>