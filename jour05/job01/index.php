<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Accueil</title>
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

  <main>
    <?php if (isset($_SESSION['prenom'])): ?>
        <p>Bonjour <?= htmlspecialchars($_SESSION['prenom']); ?></p>
        <a href="logout.php">Se déconnecter</a>
    <?php else: ?>
        <a href="inscription.php">Inscription</a> | 
        <a href="connexion.php">Connexion</a>
    <?php endif; ?>
  </main>

</body>
</html>