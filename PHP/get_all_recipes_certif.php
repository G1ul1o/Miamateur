<?php

include 'connection.php';

// Requête SQL pour récupérer toutes les recettes
$sql = "SELECT * FROM recettes WHERE certification = 1";
$result = $conn->query($sql);

// Tableau pour stocker les recettes
$recettes = array();

// Parcourir les résultats de la requête et stocker les recettes dans le tableau
while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
    $recette = array(
        'id' => $row['id'],
        'nom' => $row['nom'],
        'photo' => $row['image_url'],
        // Ajoutez ici d'autres attributs de recette que vous souhaitez récupérer
    );

    array_push($recettes, $recette);
}

$recettes_json = json_encode($recettes);

echo $recettes_json;

?>
