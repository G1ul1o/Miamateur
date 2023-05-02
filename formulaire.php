<?php
include 'connection.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire</title>
    <link rel="stylesheet" href="formulaire.css">
    <script src="formulaire.js"></script>
</head>
<body>
<h1>Ajouter une recette</h1>

<form method="POST" action="traitement.php" enctype="multipart/form-data">

    <label for="nom">Nom de la recette :</label>
    <input type="text" name="nom" required><br>

    <label for="image">Image miniature :</label>
    <input type="file" name="image"><br>

    <label for="description">Description :</label><br>
    <textarea name="description"></textarea><br>

    <label for="instructions">Instructions :</label><br>
    <textarea name="instructions"></textarea><br>

    <label for="temps_preparation">Temps de préparation :</label>
    <input type="number" name="temps_preparation" min="0" required><br>

    <label for="temps_cuisson">Temps de cuisson :</label>
    <input type="number" name="temps_cuisson" min="0" required><br>

    <label for="nb_portions">Nombre de portions :</label>
    <input type="number" name="nb_portions" min="1" required><br>

    <label for="prix">Prix :</label>
    <input type="number" name="prix" min="0" step="0.01" required><br>

    <label for="tags">Tags :</label><br>
    <input type="checkbox" name="tags[]" value="vegetarien"> Végétarien<br>
    <input type="checkbox" name="tags[]" value="sans_gluten"> Sans gluten<br>
    <input type="checkbox" name="tags[]" value="sans_lactose"> Sans lactose<br>
    <input type="checkbox" name="tags[]" value="healthy"> Healthy<br>

    <label for="ingredients">Ingrédients :</label><br>
    <div id="ingredients-container">
        <input type="text" name="ingredients_nom[]" placeholder="Nom de l'ingrédient" required>
        <input type="text" name="ingredients_quantite[]" placeholder="Quantité" required>
        <button type="button" onclick="ajouterIngredient()">Ajouter un ingrédient</button>
    </div>

    <label for="ustensiles">Ustensiles :</label><br>
    <div id="ustensiles-container">
        <input type="text" name="ustensiles_nom[]" placeholder="Nom de l'ustensile" required>
        <button type="button" onclick="ajouterUstensile()">Ajouter un ustensile</button>
    </div>

    <input type="submit" value="Ajouter la recette">

</form>
</body>
</html>