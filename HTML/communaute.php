<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Miamateur: Recette Communauté</title>
    <script src="../JS/index.js" defer></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="../JS/communaute.js" defer></script>
    <link rel="stylesheet" href="../CSS/communaute.css">
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
            <a class="header-button" href="../index.php" target="_self">Accueil</a>

            <a class="header-button" href="selection.php" target="_self">Notre selection</a>

            <a class="active header-button" href="communaute.php" target="_self">Tendance communautaire</a>

            <a class="header-button" href="apropos.php" target="_self">A propos</a>

            <a class="header-button" href="contact.php" target="_self">Contact</a>
        </div>
    </div>
</header>
<main>
    <!-- On implémente l'image -->
        <div class="box">
            <img src="../image/comu-img.jpeg">
        </div>
    <!-- Titre + paragraphe -->
        <div class = "section">
            <h2>Recettes de la communauté</h2>
        </div>
        <div class="conteneur">
            <div class="rectangle">
                <p>Cette page rassemble les meilleures recettes de la communauté.<br>
                    Ici, vous pourrez parcourir les recettes de la communauté à vos risques et périls.<br>
                    Attention, aucune règle n'est imposée ici.</p>
            </div>
        </div>
        <div>
            <div class = "section">
                <h2>Les Recettes</h2>
            </div>
            <!-- on ajoute les images avec un script JavaScript se trouvant dans index.js -->
            <div class="container" id="container"">
        </div>
    <!-- on alloue l'espace pour le footer -->
    <div class="rectangle-footer"></div>
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
