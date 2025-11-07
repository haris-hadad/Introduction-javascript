<?php
session_start();
require 'config.php';

$errors = [];
$data = $_POST;
if (empty($data['email']) || empty($data['password'])) {
    $errors['email'] = "Veuillez remplir tous les champs.";
} else {
    $stmt = $pdo->prepare("SELECT * FROM utilisateurs WHERE email = ?");
    $stmt->execute([$data['email']]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$user || !password_verify($data['password'], $user['password'])) {
        $errors['password'] = "Identifiants incorrects.";
    }
}

if (empty($errors)) {
    $_SESSION['prenom'] = $user['prenom'];
    $_SESSION['id'] = $user['id'];
    echo json_encode(['success' => true]);
} else {
    echo json_encode(['success' => false, 'errors' => $errors]);
}
?>