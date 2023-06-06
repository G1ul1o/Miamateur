<?php
include '../PHP/connection.php';

// Récupération de la chaîne de recherche entrée par l'utilisateur
$search = $_GET['search'];
$id_recette_query = "SELECT id FROM `recettes` WHERE nom LIKE '$search'";
$id_recette_result = $conn->query($id_recette_query);
$id_recette_row = $id_recette_result->fetch();
$id_recette = $id_recette_row['id'];

// Requête SQL pour récupérer les recettes correspondantes à la recherche

$recette_query = "SELECT * FROM `recettes` WHERE id =" . $id_recette;
$ingredients_query ="SELECT * FROM recettes_ingredients INNER JOIN ingredients on ingredients.id=recettes_ingredients.id_ingredient INNER JOIN mesures on mesures.id=recettes_ingredients.id_mesures WHERE Id_recette =" . $id_recette;
$tags_query = "SELECT * FROM recettes_tags INNER JOIN tags on tags.id=recettes_tags.id_tag WHERE Id_recette =" . $id_recette;
$ustensiles_query = "SELECT * FROM recettes_ustensiles INNER JOIN ustensiles on ustensiles.id=recettes_ustensiles.id_ustensile WHERE Id_recette =" . $id_recette;
$miniature_query = "SELECT * FROM `recettes_images` WHERE id_recette =" . $id_recette;

$recette_result = $conn->query($recette_query);
$ingredients_result = $conn->query($ingredients_query);
$tags_result = $conn->query($tags_query);
$ustensiles_result = $conn->query($ustensiles_query);
$miniature_result = $conn->query($miniature_query);

$recette = $recette_result->fetch();
$ingredients = $ingredients_result->fetchAll();
$tags = $tags_result->fetchAll();
$ustensiles = $ustensiles_result->fetchAll();
$miniature = $miniature_result->fetchAll();


?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Miamateur: Plat</title>
    <script src="../JS/index.js" defer></script>
    <script src="../JS/recette.js" defer></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="../CSS/recette.css">
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
    <div class="introduction">
        <div class="presentation">
            <div class="photo">
                <img class="allimg" src="<?php echo $recette['image_url']; ?>" alt="<?php echo $recette['nom']; ?>">
            </div>
            <div class="miniatures">
                <?php foreach ($miniature as $row): ?>
                    <img src="<?php echo $row['image_url']; ?>" alt="Image miniature" class="img2">
                <?php endforeach; ?>
            </div>
        </div>
        <div class="paragraphe">
            <div class="titre">
                <h1><?php echo $recette['nom']; ?></h1>
            </div>
            <div class="p1">
                <p>Temps de préparation: <span class="para"><?php echo $recette['temps_preparation']; ?> min</span></p>
                <p>Quantité prévue: <span class="para"><?php echo $recette['nb_portions']; ?> personne(s)</span></p>
            </div>
            <div class="p1">
                <p>Temps de cuisson : <span class="para"><?php echo $recette['temps_cuisson']; ?> min</span></p>
                <p>Prix : <span class="para"><?php echo $recette['prix']; ?> €</span></p>
            </div>
            <div class="tag">
                <?php foreach ($tags as $row): ?>
                    <span class="tag">#<?php echo $row['nom']; ?></span>
                <?php endforeach; ?>
            </div>
            <br>
            <div class="parametre">
                <h2>Description</h2>
                <div class="description">
                    <p><?php echo $recette['description']; ?></p>
                </div>
            </div>
        </div>
    </div>

    <div class="élément">
        <div class="menu">
            <button class="menu-btn" onclick="toggleMenu('ingredients')">Ingrédient</button>
            <div class="menu-content ingredients">
                <ul>
                    <?php foreach ($ingredients as $row): ?>
                        <li><?php echo $row['quantite'] . $row['unite'] .' ' . $row['nom']; ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
        <div class="menu">
            <button class="menu-btn" onclick="toggleMenu('ustensiles')">Ustensiles</button>
            <div class="menu-content ustensiles">
                <ul>
                    <?php foreach ($ustensiles as $row): ?>
                        <li><?php echo $row['nom']; ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
    <div class="Recette">
        <dl>
            <dt>Recette</dt>
            <ul>
                <?php
                $instructions = explode(".", $recette["instructions"]);
                $i = 1;
                foreach ($instructions as $instruction) {
                    if (empty($instruction)) {
                        continue;
                    }else{
                        echo "<li>Etape $i : " . trim($instruction) . "</li>";
                        $i++;
                    }
                }
                ?>
            </ul>
        </dl>
    </div>
</main>
<footer class="show-footer">
    <div id="lefooter">
        <ul id="boutons-cliquables">
            <li><a href="../index.php" class="lien_footer">Accueil</a></li>
            <li><a href="apropos.php" class="lien_footer">À propos</a></li>
            <li><a href="contact.php" class="lien_footer">Contact</a></li>
        </ul>
        <br>
        <h2>Nos Réseaux</h2>
        <ul id="social_media">
            <div class="items_social">
                <li><img  src = "../image/Instagram-logo.png" alt="insta" ></li>
                <li><a href="#" class="lien_footer_reseau">miamateur</a> </li>
            </div>
            <div class="items_social">
                <li><img  src = "../image/facebook-logo.png" alt="facebook"> </li>
                <li><a href="#" class="lien_footer_reseau">facemateur</a> </li>
            </div>
            <div class="items_social">
                <li><img src = "../image/pinterest-logo.png" alt="pinterest"> </li>
                <li><a href="#" class="lien_footer_reseau">miamatart</a> </li>
            </div>
            <div class="items_social">
                <li><img  src = "../image/twitter-logo.png" alt="twitter" > </li>
                <li><a href="#" class="lien_footer_reseau">miamaster</a> </li>
            </div>
        </ul>
    </div>
</footer>
</body>
</html>