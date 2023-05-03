<?php
include 'connection.php';

// Récupération de la chaîne de recherche entrée par l'utilisateur
$search = $_GET['search'];
$id_recette_query = "SELECT id FROM `recettes` WHERE nom LIKE '$search'";
$id_recette_result = $conn->query($id_recette_query);
$id_recette_row = $id_recette_result->fetch();
$id_recette = $id_recette_row['id'];

// Requête SQL pour récupérer les recettes correspondantes à la recherche

$recette_query = "SELECT * FROM `recettes` WHERE id =" . $id_recette;
$ingredients_query ="SELECT * FROM recettes_ingredients INNER JOIN ingredients on ingredients.id=recettes_ingredients.id_ingredient WHERE Id_recette =" . $id_recette;
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
    <script src="index.js" defer></script>
    <link rel="stylesheet" href="recette.css">
</head>
<!--Header-->
<header id="header">
    <div class="container">
        <!-- marge gauche -->
        <span style="margin-left: 3%;"></span>

        <!-- logo -->
        <a href="index.php" >
            <img  src = "image/image-removebg-preview.jpg" alt="logo" width = "80px" height = "80px"></img>
        </a>

        <!-- titre -->
        <a href="index.php" >
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

        <!-- marge centre droite -->
        <span style="margin-left: 10%;"></span>

        <!-- bouton compte -->
        <button class="button-profile" ><a class="button-profile" href="index.php">Mon compte</a></button>

        <!-- marge droite -->
        <span style="margin-left: 3%;"></span>
    </div>

    <div class="alignement_cote">
        <div class="alignement">
            <!-- les boutons du header (Acceuil, notre selection...) -->
            <header-button><a class="active" class="header-button"  href="index.php" target="_blank">Accueil</a></header-button>

            <header-button><a class="header-button" href="http://twitch.com" target="_blank">Notre selection</a></header-button>

            <header-button><a class="header-button" href="http://twitch.com" target="_blank">Tendance communautaire</a></header-button>

            <header-button><a class="header-button" href="https://www.twitch.tv/otplol_" target="_blank">Moins de 5 €</a></header-button>

            <header-button><a class="header-button" href="http://twitch.com" target="_blank">Une seule poêle</a></header-button>

            <header-button><a class="header-button" href="http://twitch.com" target="_blank">Végétarien</a></header-button>

            <header-button><a class="header-button" href="http://twitch.com" target="_blank">Moins de 5 min</a></header-button>

            <header-button><a class="header-button" href="http://twitch.com" target="_blank">A propos</a></header-button>

            <header-button><a class="header-button" href="http://twitch.com" target="_blank">Contact</a></header-button>
        </div>
    </div>
    <div class="blanc"> </div>
</header>
<body>
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
        <div class="tag">
            <?php foreach ($tags as $row): ?>
                <span class="tag">#<?php echo $row['nom']; ?></span>
            <?php endforeach; ?>
        </div>
        <div class="parametre">
            <h2>Description</h2>
            <div class="description">
                <p><?php echo $recette['description']; ?></p>
            </div>
        </div>
    </div>
</div>

<div class="élément">
    <h3>Ingrédients</h3>
    <div class="ingrédients">
        <ul>
            <?php foreach ($ingredients as $row): ?>
                <li><?php echo $row['quantite'] . ' ' . $row['nom']; ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
    <h3>Matériel</h3>
    <div class="Ustensiles">
        <ul>
            <?php foreach ($ustensiles as $row): ?>
                <li><?php echo $row['nom']; ?></li>
            <?php endforeach; ?>
        </ul>
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
</body>
</html>