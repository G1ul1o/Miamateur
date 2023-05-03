<?php
    include 'connection.php';

    // Première requête pour la sélection
    $sql_selection = 'SELECT * FROM recettes ORDER BY RAND() LIMIT 3';
    $result_selection = $conn->query($sql_selection);

    // Deuxième requête pour les tendances communautaires
    $sql_tendances = 'SELECT * FROM recettes ORDER BY RAND() LIMIT 3';
    $result_tendances = $conn->query($sql_tendances);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="index.css">
        <script src="index.js" defer></script>
        <meta charset="utf-8">
        <title>Miamateur</title>
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
        <!--Sélection-->
        <div>
            <div class="section">
                <h2>Notre sélection</h2>
            </div>

        <div class="alignement">
            <?php while ($row = $result_selection->fetch()): ?>
                <div class="block">
                    <img class="picture" src="<?php echo $row['image_url']; ?>" alt="<?php echo $row['nom']; ?>" onclick="">
                    <form action="recette.php" method="GET">
                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                        <button class="button" type="submit"><?php echo $row['nom']; ?></button>
                    </form>
                    </div>
                <?php endwhile; ?>
            </div>
               <div class="conteneur">
            <div class="rectangle">

            </div>
        </div>

        <!--Tendances-->
        <div>
            <div class="section">
                <h2>Tendances communautaire</h2>
            </div>

        <div class="alignement">
                <?php while ($row = $result_tendances->fetch()): ?>
                    <div class="block">
                        <img class="picture" src="<?php echo $row['image_url']; ?>" alt="<?php echo $row['nom']; ?>">
                        <form action="recette.php" method="GET">
                            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                            <button class="button" type="submit"><?php echo $row['nom']; ?></button>
                        </form>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>

        <?php
        ?>
    </body>
</html>
