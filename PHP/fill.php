<?php

// Connexion à la base de données
$host = 'localhost';
$dbname = 'id20532041_miamateur';
$username = "id20532041_root";
$password = "geGt8T)]JgI]zzZY";
$pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);

// Récupération de toutes les recettes de l'API Spoonacular
$recettes_json = file_get_contents('https://api.spoonacular.com/recipes/complexSearch?apiKey=ffac19465cb14469baa681e6ea9117f3&number=100&addRecipeInformation=true&fillIngredients=true');
$recettes = json_decode($recettes_json, true)['results'];

// Parcours de toutes les recettes
foreach ($recettes as $recette) {
    // Récupération des données de la recette
    $nom = $recette['title'];
    $image_url = $recette['image'];
    $instructions = '';
    $instructions = $recette['analyzedInstructions'];
    $temps_preparation = $recette['readyInMinutes'];
    $temps_cuisson = $recette['cookingMinutes'];
    $nb_portions = $recette['servings'];
    $prix = rand(1, 5); // Valeur aléatoire entre 1 et 5
    $tags = $recette['cuisines']; // Tableau de tags
    
// Insertion de la recette dans la table "recettes"
$stmt = $pdo->prepare('INSERT INTO recettes (nom, image_url, instructions, temps_preparation, temps_cuisson, nb_portions, prix) VALUES (?, ?, ?, ?, ?, ?, ?)');
$stmt->execute([$nom, $image_url, json_encode($instructions), $temps_preparation, $temps_cuisson, $nb_portions, $prix]);
$id_recette = $pdo->lastInsertId();

// Parcours des ingrédients de la recette
foreach ($recette['extendedIngredients'] as $ingredient) {
    $nom_ingredient = $ingredient['name'];

    // Vérification si l'ingrédient existe déjà dans la base de données
    $stmt = $pdo->prepare('SELECT id FROM ingredients WHERE nom = ?');
    $stmt->execute([$nom_ingredient]);
    $resultat = $stmt->fetch();

    // Si l'ingrédient n'existe pas dans la base de données, on l'insère
    if (!$resultat) {
        $stmt = $pdo->prepare('INSERT INTO ingredients (nom) VALUES (?)');
        $stmt->execute([$nom_ingredient]);
        $id_ingredient = $pdo->lastInsertId();
    } else {
        $id_ingredient = $resultat['id'];
    }

    // Insertion de la relation entre la recette et l'ingrédient dans la table "recettes_ingredients"
    $quantite = $ingredient['amount'];
    $stmt = $pdo->prepare('INSERT INTO recettes_ingredients (id_recette, id_ingredient, quantite) VALUES (?, ?, ?)');
    $stmt->execute([$id_recette, $id_ingredient, $quantite]);
}
    
    // Parcours des tags de la recette
    foreach ($recette['cuisines'] as $tag_name) {
        // Vérification si le tag existe déjà dans la base de données
        $stmt = $pdo->prepare('SELECT id FROM tags WHERE nom = ?');
        $stmt->execute([$tag_name]);
        $resultat = $stmt->fetch();
    
        // Si le tag n'existe pas dans la base de données, on l'insère
        if (!$resultat) {
            $stmt = $pdo->prepare('INSERT INTO tags (nom) VALUES (?)');
            $stmt->execute([$tag_name]);
            $id_tag = $pdo->lastInsertId();
        } else {
            $id_tag = $resultat['id'];
        }
    
        // Insertion de la relation entre la recette et le tag dans la table "recettes_tags"
        $stmt = $pdo->prepare('INSERT INTO recettes_tags (id_recette, id_tag) VALUES (?, ?)');
        $stmt->execute([$id_recette, $id_tag]);
    }
     $errorInfo = $stmt->errorInfo();
    if ($errorInfo[0] !== PDO::ERR_NONE) {
        echo 'Erreur lors de l\'exécution de la requête : ' . $errorInfo[2];
}

}