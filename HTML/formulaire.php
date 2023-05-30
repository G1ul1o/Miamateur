<?php

include '../PHP/connection.php';

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire</title>
    <script src="../JS/index.js" defer></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="../CSS/formulaire.css">
    <link rel="stylesheet" href="../CSS/HEADER.css">
    <link rel="stylesheet" href="../CSS/FOOTER.css">
</head>
<body>
<header id="header">
    <div class="Header-Container">
        <!-- marge gauche -->
        <span style="margin-left: 3%;"></span>

        <!-- logo -->
        <a href="../index.php" >
            <img src = "../image/image-removebg-preview.jpg" class    ="logo">
        </a>

        <!-- titre -->
        <a href="../index.php" >
            <h1 class="button-title">Miamateur</h1>
        </a>

        <!-- marge centre gauche -->
        <span style="margin-left: 10%;"></span>

        <!-- barre de recherche -->
        <form class="input-wrapper" action="search.php" method="get">
            <input type="text" class="input" id="searchBar" name="search" placeholder="Rechercher une recette...">
            <button class="search-button" id="searchButton">
                <span class="search-icon"></span>
            </button>
            <div id="suggestions-container"></div>
        </form>
        <!-- bouton compte -->
        <a class="button-profile" href="connexion.php">Mon compte</a>
    </div>

    <div class="alignement_cote">
        <div class="alignement">
            <!-- les boutons du header (Acceuil, notre selection...) -->
            <a class="active header-button" href="../index.php" target="_self">Accueil</a>

            <a class="header-button" href="selection.php" target="_self">Notre selection</a>

            <a class="header-button" href="communaute.php" target="_self">Tendance communautaire</a>

            <a class="header-button" href="apropos.php" target="_self">A propos</a>

            <a class="header-button" href="contact.php" target="_self">Contact</a>
        </div>
    </div>
</header>
    <main>
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
    </main>
    <footer class="show-footer">
        <div id="lefooter">
            <ul id="boutons-cliquables">
                <li><a href="#" class="lien_footer">Accueil</a></li>
                <li><a href="#" class="lien_footer">À propos</a></li>
                <li><a href="#" class="lien_footer">Contact</a></li>
            </ul>
            <br>
            <h2>Nos Réseaux</h2>
            <ul id="social_media">
                <div class="items_social">
                    <li><img  src = "image/Instagram-logo.png" alt="insta" ></li>
                    <li><a href="#" class="lien_footer_reseau">miamateur</a> </li>
                </div>
                <div class="items_social">
                    <li><img  src = "image/facebook-logo.png" alt="facebook"> </li>
                    <li><a href="#" class="lien_footer_reseau">facemateur</a> </li>
                </div>
                <div class="items_social">
                    <li><img src = "image/pinterest-logo.png" alt="pinterest"> </li>
                    <li><a href="#" class="lien_footer_reseau">miamatart</a> </li>
                </div>
                <div class="items_social">
                    <li><img  src = "image/twitter-logo.png" alt="twitter" > </li>
                    <li><a href="#" class="lien_footer_reseau">miamaster</a> </li>
                </div>
            </ul>
        </div>
    </footer>
</body>
</html>