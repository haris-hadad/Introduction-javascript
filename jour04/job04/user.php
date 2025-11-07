<?php
header('Content-Type: application/json; charset=utf-8');

// Connexion à la base de données
$mysqli = new mysqli("localhost", "root", "", "utilisateurs");

// Vérifie la connexion
if ($mysqli->connect_errno) {
    echo json_encode(["error" => "Échec de la connexion à MySQL : " . $mysqli->connect_error]);
    exit();
}

// Requête
$result = $mysqli->query("SELECT * FROM utilisateurs");


// Récupération des résultats dans un tableau associatif
$utilisateurs = [];
while ($row = $result->fetch_assoc()) {
    $utilisateurs[] = $row;
}

// Envoi au format JSON
echo json_encode($utilisateurs, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);

$mysqli->close();
?>