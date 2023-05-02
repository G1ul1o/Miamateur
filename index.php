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
            <!-- utile pour plus tard quand il faudra faire es fenetre responsive
            <button class="navbutton" id="navbutton" onclick="changeDisplay()">
                <img id="image_menu_deroulant" src="images/menu.png" alt="bouton menu déroulant">
            </button>
            -->
            <!-- logo -->
            <img class="img" src="image/image-removebg-preview.jpg" alt="logo" width="80" height="80">

            <!-- titre -->
            <h1 class="title">Miamateur</h1>

            <div class="input-wrapper">
                <input type="text" class="input" placeholder="Recherche">
                <button class="search-button">
                    <span class="search-icon"></span>
                </button>
            </div>

            <div class="buttons-wrapper">
                <button class="buttonH">Mon compte</button>
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
        <!--Sélection-->
        <div>
            <div class="section">
                <h2>Notre sélection</h2>
            </div>

        <div class="alignement">
            <?php while ($row = $result_selection->fetch()): ?>
                <div style="text-align: center;">
                    <img class="picture" src="<?php echo $row['image_url']; ?>" alt="<?php echo $row['nom']; ?>">
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
                    <div style="text-align: center;">
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
