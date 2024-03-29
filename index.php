<?php
    include 'PHP/connection.php';

    // Première requête pour la sélection
    $sql_selection = 'SELECT * FROM recettes WHERE certification = 1 ORDER BY RAND() LIMIT 3';
    $result_selection = $conn->query($sql_selection);

    // Deuxième requête pour les tendances communautaires
    $sql_tendances = 'SELECT * FROM recettes WHERE certification IS NULL ORDER BY RAND() LIMIT 3';
    $result_tendances = $conn->query($sql_tendances);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="CSS/index.css">
        <link rel="stylesheet" href="CSS/HEADER.css">
        <link rel="stylesheet" href="CSS/FOOTER.css">
        <script src="JS/index.js" defer></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <meta charset="utf-8">
        <title>Miamateur</title>
    </head>
    <body>
    <!--Header-->
    <header id="header">
        <div class="Header-Container">
            <!-- marge gauche -->
            <span style="margin-left: 3%;"></span>

            <!-- logo -->
            <a href="index.php" >
                <img src = "image/image-removebg-preview.jpg" class    ="logo">
            </a>

            <!-- titre -->
            <a href="index.php" >
                <h1 class="button-title">Miamateur</h1>
            </a>

            <!-- marge centre gauche -->
            <span style="margin-left: 10%;"></span>

            <!-- barre de recherche -->
            <form class="input-wrapper" action="HTML/search.php" method="get" id="search-form">
                <input type="text" class="input" id="searchBar" name="search" placeholder="Rechercher une recette...">
                <button class="search-button" id="searchButton">
                    <span class="search-icon"></span>
                </button>
                <div id="suggestions-container"></div>
            </form>
            <!-- bouton compte -->
            <a class="button-profile" href="HTML/connexion.php">Mon compte</a>
        </div>

        <div class="alignement_cote">
            <div class="alignement">
                <!-- les boutons du header (Acceuil, notre selection...) avec la classe header-bouton pour y faire des modification-->
                <a class="active header-button" href="index.php" target="_self">Accueil</a>

                <a class="header-button" href="/HTML/selection.php" target="_self">Notre selection</a>

                <a class="header-button" href="/HTML/communaute.php" target="_self">Tendance communautaire</a>

                <a class="header-button" href="/HTML/apropos.php" target="_self">A propos</a>

                <a class="header-button" href="/HTML/contact.php" target="_self">Contact</a>
            </div>
        </div>
    </header>
    <main>
        <!--Sélection-->
        <div>
            <div class="section">
                <h2>Notre sélection</h2>
            </div>

            <div class="alignement">
                <?php while ($row = $result_selection->fetch()): ?>
                    <div class="block">
                        <img class="picture" src="<?php echo $row['image_url']; ?>" alt="<?php echo $row['nom']; ?>" onclick="window.location.href='HTML/recette.php?id=<?php echo $row['id']; ?>'">
                        <form action="HTML/recette.php" method="GET">
                            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                            <button class="button" type="submit"><?php echo $row['nom']; ?></button>
                        </form>
                    </div>
                <?php endwhile; ?>
            </div>
            <div class="conteneur">
                <div class="rectangle">
                                        <h1>A propos de nous:</h1>
                    <p>Nous sommes une équipe d'étudiants réalisant un projet en deuxième année.<br> Nous sommes animés par la volonté d'aider les étudiants dans leur vie quotidienne. Cela passe par de l'aide à trouver des recettes peu chères et simples à réaliser</p>
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
                            <img class="picture" src="<?php echo $row['image_url']; ?>" alt="<?php echo $row['nom']; ?>" onclick="window.location.href='HTML/recette.php?id=<?php echo $row['id']; ?>'">
                            <form action="HTML/recette.php" method="GET">
                                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                <button class="button" type="submit"><?php echo $row['nom']; ?></button>
                            </form>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>
            <?php
            ?>
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
