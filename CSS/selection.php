<!DOCTYPE html>

<html lang="en">

<head>

    <link rel="stylesheet" href="style_selection.css">
    <link rel="stylesheet" href="../CSS/HEADER.css">
    <link rel="stylesheet" href="../CSS/FOOTER.css">

    <script type="text/javascript" src="../JS/selection.js"></script>

    <meta charset="UTF-8">

    <title>Miamateur: Recette Sélectionné</title>

</head>


<body>

    <header id="header">
    <div class="Header-Container">
        <!-- marge gauche -->
        <span style="margin-left: 3%;"></span>

        <!-- logo -->
        <a href="../index.php" >
            <img src = "../image/image-removebg-preview.jpg" class="logo">
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
        <a class="button-profile" href="../index.php">Mon compte</a>
    </div>

    <div class="alignement_cote">
        <div class="alignement">
            <!-- les boutons du header (Acceuil, notre selection...) -->
            <a class="active header-button" href="../index.php" target="_blank">Accueil</a>

            <a class="header-button" href="../index.php" target="_blank">Notre selection</a>

            <a class="header-button" href="../index.php" target="_blank">Tendance communautaire</a>

            <a class="header-button" href="../index.php" target="_blank">A propos</a>

            <a class="header-button" href="../index.php" target="_blank">Contact</a>
        </div>
    </div>
</header>

    <main>
        <div class="box">

            <img src="friends-happiness-enjoying-dinning-eating-concept.jpeg">

        </div>

        <div class = "section">

            <h2>Recettes sélectionné</h2>

        </div>

        <div class="conteneur">

            <div class="rectangle">

                <p>Cette page rassemble les recettes que notre équipe a validés.<br>

                    Ces recettes respectent les critéres comme être peu couteuse, ne nécessitant pas beaucoup de matériel et de temps.<br></p>

            </div>

        </div>

        <div>

            <div class = "section">

                <h2>Les Recettes</h2>

            </div>










            <div class="container" id="container">







            </div>




        </div>

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