<?php
include '../PHP/connection.php';

// Récupérer les données envoyées via la requête POST
$data = $_POST;

// Récupérer les données spécifiques
$nom = $_POST['nom'];
$photo = $_POST['photo'];
$miniature1 = $_POST['miniature1'];
$miniature2 = $_POST['miniature2'];
$miniature3 = $_POST['miniature3'];
$temps_cuisson = $_POST['temps_cuisson'];
$temps_preparation = $_POST['temps_preparation'];
$nb_portions = $_POST['portion'];
$prix = $_POST['prix'];
$description = $_POST['description'];
$ingredients = $_POST['ingredient'];
$ustensils = $_POST['ustensil'];
//$tags = $_POST['tags'];
$instructions = $_POST['instructions'];
$quantites = $_POST['quantite'];



try {
    // Commencer une transaction
    $conn->beginTransaction();

    // Insérer les données dans la table recettes
    $sql = "INSERT INTO recettes (description, image_url, instructions, nb_portions, nom, prix, temps_cuisson, temps_preparation) VALUES (:description, :image_url, :instructions, :nb_portions, :nom, :prix, :temps_cuisson, :temps_preparation)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':description', $description);
    $stmt->bindParam(':image_url', $photo);
    $stmt->bindParam(':instructions',$instructions); // Vous pouvez ajouter la valeur appropriée ici
    $stmt->bindParam(':nb_portions', $nb_portions);
    $stmt->bindParam(':nom', $nom);
    $stmt->bindParam(':prix', $prix);
    $stmt->bindParam(':temps_cuisson', $temps_cuisson);
    $stmt->bindParam(':temps_preparation', $temps_preparation);
    $stmt->execute();
    $recetteId = $conn->lastInsertId();

    // Insérer les images de la recette dans la table recettes_images
    $sql = "INSERT INTO recettes_images (id_recette, image_url) VALUES (:id_recette, :image_url)";
    $stmt = $conn->prepare($sql);
    $images = [$photo, $miniature1, $miniature2, $miniature3];
    foreach ($images as $image) {
        $stmt->bindParam(':id_recette', $recetteId);
        $stmt->bindParam(':image_url', $image);
        $stmt->execute();
    }

    // Insérer les ingrédients de la recette dans la table ingredients (s'ils n'existent pas déjà)
    $ingredientIds = [];

    var_dump($ingredients);
    foreach ($ingredients as $ingredient) {
        $ingredientName = $ingredient;
        $sql = "SELECT id FROM ingredients WHERE nom = :nom";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':nom', $ingredientName);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($result) {
            $ingredientId = $result['id'];
        } else {
            $sql = "INSERT INTO ingredients (nom) VALUES (:nom)";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':nom', $ingredientName);
            $stmt->execute();
            $ingredientId = $conn->lastInsertId();
        }

        $ingredientIds[] = $ingredientId;

        // Insérer les données dans la table recette_ingredient
        $sql = "INSERT INTO recettes_ingredients (id_recette, id_ingredient, quantite) VALUES (:id_recette, :id_ingredient, :quantite)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id_recette', $recetteId);
        $stmt->bindParam(':id_ingredient', $ingredientId);
        $stmt->bindParam(':quantite', $quantite);
        $stmt->execute();
    }

    // Insérer les tags de la recette dans la table tags (s'ils n'existent pas déjà)
   /* $tagIds = [];
    foreach ($tags as $tagName) {
        $sql = "SELECT id FROM tags WHERE nom = :nom";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':nom', $tagName);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($result) {
            $tagId = $result['id'];
        } else {
            $sql = "INSERT INTO tags (nom) VALUES (:nom)";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':nom', $tagName);
            $stmt->execute();
            $tagId = $conn->lastInsertId();
        }

        $tagIds[] = $tagId;

        // Insérer les données dans la table recette_tag
        $sql = "INSERT INTO recette_tag (id_recette, id_tag) VALUES (:id_recette, :id_tag)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id_recette', $recetteId);
        $stmt->bindParam(':id_tag', $tagId);
        $stmt->execute();
    }
   */

    // Insérer les ustensiles de la recette dans la table ustensile (s'ils n'existent pas déjà)
    $ustensilIds = [];
    foreach ($ustensils as $ustensilName) {
        $sql = "SELECT id FROM ustensiles WHERE nom = :nom";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':nom', $ustensilName);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($result) {
            $ustensilId = $result['id'];
        } else {
            $sql = "INSERT INTO ustensiles (nom) VALUES (:nom)";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':nom', $ustensilName);
            $stmt->execute();
            $ustensilId = $conn->lastInsertId();
        }

        $ustensilIds[] = $ustensilId;

        // Insérer les données dans la table recette_ustensiles
        $sql = "INSERT INTO recettes_ustensiles (id_recette, id_ustensile) VALUES (:id_recette, :id_ustensile)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id_recette', $recetteId);
        $stmt->bindParam(':id_ustensile', $ustensilId);
        $stmt->execute();
    }

    // Valider la transaction
    $conn->commit();

    // Redirection vers la page de succès
    header('Location: ../index.php');
    exit();
} catch (PDOException $e) {
    // Annuler la transaction en cas d'erreur
    $conn->rollBack();

    // Afficher l'erreur
    echo "Erreur : " . $e->getMessage();
}
?>
