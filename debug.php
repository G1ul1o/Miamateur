<?php
    include 'connection.php';
    
    $sql = "SELECT * FROM recettes ORDER BY RAND() LIMIT 3"; // Exemple de requête aléatoire pour 3 recettes
    $result = mysqli_query($dsn, $sql);
    
    if (!$result) {
        die('Erreur MySQL: ' . mysqli_error($dsn));
    }
    
    while ($row = mysqli_fetch_assoc($result)) {
        // Traitement des résultats ici
    }
?>