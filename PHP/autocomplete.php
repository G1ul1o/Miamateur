<?php
include 'connection.php';

// Récupération de la chaîne de recherche entrée par l'utilisateur
$searchString = $_GET['q'];

// Requête SQL pour récupérer les suggestions de recettes correspondantes à la recherche
$searchQuery = "SELECT nom FROM recettes WHERE nom LIKE '%" . $searchString . "%'";
$searchResult = $conn->query($searchQuery);

// Stocke les suggestions dans un tableau
$suggestions = array();
while ($row = $searchResult->fetch()) {
    array_push($suggestions, $row['nom']);
}

// Convertit le tableau en JSON et renvoie les suggestions
echo json_encode($suggestions);

?>