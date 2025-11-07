<?php
require 'config.php';

$errors = [];
$data = $_POST;

// Vérifications
if (empty($data['prenom'])) $errors['prenom'] = "Le prénom est obligatoire.";
if (empty($data['nom'])) $errors['nom'] = "Le nom est obligatoire.";

if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL))
    $errors['email'] = "Adresse email invalide.";
else {
    $stmt = $pdo->prepare("SELECT id FROM utilisateurs WHERE email = ?");
    $stmt->execute([$data['email']]);
    if ($stmt->fetch()) $errors['email'] = "Cette adresse est déjà utilisée.";
}

if (strlen($data['password']) < 6)
    $errors['password'] = "Mot de passe trop court (6 caractères minimum).";

if ($data['password'] !== $data['confirm'])
    $errors['confirm'] = "Les mots de passe ne correspondent pas.";

if (empty($errors)) {
    $hashed = password_hash($data['password'], PASSWORD_DEFAULT);
    $stmt = $pdo->prepare("INSERT INTO utilisateurs (nom, prenom, email, password) VALUES (?, ?, ?, ?)");
    $stmt->execute([$data['nom'], $data['prenom'], $data['email'], $hashed]);
    echo json_encode(['success' => true]);
} else {
    echo json_encode(['success' => false, 'errors' => $errors]);
}
?>