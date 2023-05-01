<?php
    include 'connection.php';

    // Récupération de l'id de la recette depuis l'URL
    $id_recette = $_GET['id'];

    $recette_query = "SELECT * FROM `recettes` WHERE id =" . $id_recette;
    $ingredients_query ="SELECT * FROM recettes_ingredients INNER JOIN ingredients on ingredients.id=recettes_ingredients.id_ingredient WHERE Id_recette =" . $id_recette;
    $tags_query = "SELECT * FROM recettes_tags INNER JOIN tags on tags.id=recettes_tags.id_tag WHERE Id_recette =" . $id_recette;

    $recette_result = $conn->query($recette_query);
    $ingredients_result = $conn->query($ingredients_query);
    $tags_result = $conn->query($tags_query);

    $recette = $recette_result->fetch();
    $ingredients = $ingredients_result->fetchAll();
    $tags = $tags_result->fetchAll();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Miamateur: Plat</title>
    <link rel="stylesheet" href="recette.css">
</head>
<!--Header-->
<header id="header">
    <div class="container">
        <!-- utile pour plus tard quand il faudra faire es fenetre responsive
        <button class="navbutton" id="navbutton" onclick="changeDisplay()">
            <img id="image_menu_deroulant" src="images/menu.png" alt="bouton menu déroulant">
        </button>
        -->
        <!-- logo -->
        <img class="img_h" src="image/image-removebg-preview.jpg" alt="logo" width="80" height="80">

        <!-- titre -->
        <h1 class="title">Miamateur</h1>

        <div class="input-wrapper">
            <input type="text" class="input" placeholder="Recherche">
            <button class="search-button">
                <span class="search-icon"></span>
            </button>
        </div>

        <div>
            <button class="button">Mon compte</button>
        </div>
    </div>

    <div class="alignement_cote">
        <div class="alignement">
            <header-button><a class="active header-button" href="Header.html" target="_blank">Accueil</a></header-button>
            <header-button><a class="header-button" href="https://www.twitch.tv/otplol_" target="_blank">Moins de 5 €</a></header-button>
            <header-button><a class="header-button" href="http://twitch.com" target="_blank">Une seule poêle</a></header-button>
            <header-button><a class="header-button" href="http://twitch.com" target="_blank">Végétarien</a></header-button>
            <header-button><a class="header-button" href="http://twitch.com" target="_blank">Moins de 5 min</a></header-button>
            <header-button><a class="header-button" href="http://twitch.com" target="_blank">Au micro-onde</a></header-button>
            <header-button><a class="header-button" href="http://twitch.com" target="_blank">Espace entreprise</a></header-button>
            <header-button><a class="header-button" href="http://twitch.com" target="_blank">A propos</a></header-button>
            <header-button><a class="header-button" href="http://twitch.com" target="_blank">Contact</a></header-button>
        </div>
    </div>

    <div class="blanc"></div>
</header>
<body>
<div class="introduction">
    <div class="presentation">
        <div class="photo">
            <img class="allimg" src="<?php echo $recette['image_url']; ?>" alt="<?php echo $recette['nom']; ?>">
        </div>
        <div class="miniatures">
            <?php foreach ($recette as $row): ?>
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
            <!--
                <?php //while ($row = $recette->fetch()): ?>
                    <li><?php //echo $row['nom']; ?></li>
                <?php //endwhile; ?>
                -->
        </ul>
    </div>
</div>

<div class="Recette">
    <dl>
        <dt>Recette</dt>
        <ul>
            <?php
            $recipe = json_decode($recette['instructions'], true)[0];

            $steps = $recipe['steps'];

            foreach ($steps as $step) {
                echo "<li> Step " . $step['number'] . ": ". $step['step'] . "</li>";
            }
            ?>
        </ul>
    </dl>
</div>
</body>
</html>