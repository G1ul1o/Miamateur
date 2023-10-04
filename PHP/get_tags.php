<?php

// Connexion à la base de données
include 'connection.php';

// Requête pour récupérer les tags depuis la base de données
$sql = "SELECT id, nom FROM tags";
$stmt = $conn->prepare($sql);
$stmt->execute();
$tags = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Renvoyer les tags en tant que réponse JSON
header('Content-Type: application/json');
echo json_encode($tags);
