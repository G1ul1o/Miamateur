<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire</title>
    <script src="../JS/index.js" defer></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="../JS/formulaire.js" defer></script>
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
            <img src="../image/image-removebg-preview.jpg" class="logo">
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
            <a class="header-button" href="../index.php" target="_self">Accueil</a>

            <a class="header-button" href="selection.php" target="_self">Notre sélection</a>

            <a class="header-button" href="communaute.php" target="_self">Tendance communautaire</a>

            <a class="header-button" href="apropos.php" target="_self">A propos</a>

            <a class="header-button" href="contact.php" target="_self">Contact</a>
        </div>
    </div>
</header>
<main>
    <h1>Ajouter une recette</h1>

    <form id="formulaire" action="../PHP/add_recette.php" method="POST">
        <label for="nom">Nom du plat :</label>
        <input type="text" id="nom" name="nom" placeholder="Poulet rôti au four"><br><br>

        <label for="photo">Photo :</label>
        <!--<input type="file" id="photo" name="photo" accept="image/*"><br><br>-->
        <input type="text" id="photo" name="photo" placeholder="exemple : cuisine.com/poulet.jpeg"><br><br>

        <label for="miniature1">Miniature 1 :</label>
        <input type="text" id="miniature1" name="miniature1" placeholder="exemple : cuisine.com/poulet.jpeg"><br><br>

        <label for="miniature2">Miniature 2 :</label>
        <input type="text" id="miniature2" name="miniature2" placeholder="exemple : cuisine.com/poulet.jpeg"><br><br>

        <label for="miniature3">Miniature 3 :</label>
        <input type="text" id="miniature3" name="miniature3" placeholder="exemple : cuisine.com/poulet.jpeg"><br><br>

        <label for="temps_preparation">temps de préparation :</label>
        <input type="number" id="temps_preparation" name="temps_preparation" min="1" max="180"><p1>min</p1><br><br>

        <label for="temps_cuisson">temps cuisson :</label>
        <input type="number" id="temps_cuisson" name="temps_cuisson" min="1" max="180"><p1>min</p1><br><br>

        <label for="prix">Prix :</label>
        <input type="number" id="prix" name="prix" min="1" max="180"><p1>euros</p1><br><br>

        <label for="portion">Portion :</label>
        <input type="number" id="portion" name="portion" min="1" max="20"><p1>personne</p1><br><br>

        <div class="tags-container" id="tags-container">

        </div>

        <label for="description">Description :</label><br>
        <textarea id="description" name="description" rows="4" cols="50" placeholder="Un délicieux poulet rôti"></textarea><br><br>

        <div id="ingredients-container">

            <div class="ingredient">

                <label for="quantite0">Quantite:</label>
                <input type="number" id="quantite0" name="quantite"
                       min="1" max="2000">

                <select name="mesures" id="mesure-select">
                    <option value="2">--Choisir une mesure--
                    </option>
                    <option value="gramme">gramme</option>
                    <option value="litre">litre</option>
                    <option value="cuillere_a_cafe">cuillère à café</option>
                    <option value="grande_cuillère">grande_cuillère</option>

                </select>

                <input type="text" name="ingredient[]" placeholder="Ingredient 1">

                <button type="button" class="supprimer-ingredient">Supprimer</button>
            </div>
        </div>
        <button type="button" id="ajouter-ingredient">Ajouter un Ingrédient</button>

        <br><br>
        <label for="ustensils-container">Ustensil :</label>
        <div id="ustensils-container">
            <div class="ustensil">
                <input type="text" name="ustensil[]" placeholder="Ustensil 1">
                <button type="button" class="supprimer-ustensil">Supprimer</button>
            </div>
        </div>
        <button type="button" id="ajouter-ustensil">Ajouter un Ustensil</button>
        <br>

        <label for="instructions">instructions :</label>
        <input type="text" id="instructions" name="instructions" placeholder="Modèle : Instruction1.Instruction2.Instruction3"><br><br>

        <div class="affirmation">
            <input class="boutton" type="submit" value="Ajouter la recette" onclick="generer()">
        </div>
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
                <li><img  src="../image/Instagram-logo.png" alt="insta"></li>
                <li><a href="#" class="lien_footer_reseau">miamateur</a> </li>
            </div>
            <div class="items_social">
                <li><img  src="../image/twitter-logo.png" alt="tw"></li>
                <li><a href="#" class="lien_footer_reseau">@miamateur</a></li>
            </div>
            <div class="items_social">
                <li><img  src="../image/facebook-logo.png" alt="fb"></li>
                <li><a href="#" class="lien_footer_reseau">miamateur</a></li>
            </div>
        </ul>
    </div>
</footer>
</body>
</html>
