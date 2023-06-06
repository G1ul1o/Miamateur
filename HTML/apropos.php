<!DOCTYPE html>
<html lang="fr">
<head>
    <script src="../JS/index.js" defer></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="../CSS/apropos.css">
    <link rel="stylesheet" href="../CSS/HEADER.css">
    <link rel="stylesheet" href="../CSS/FOOTER.css">
    <meta charset="UTF-8">
    <title>A propos</title>
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

            <a class="header-button" href="communaute.php" target="_self">Tendance communautaire</a>

            <a class="active header-button" href="apropos.php" target="_self">A propos</a>

            <a class="header-button" href="contact.php" target="_self">Contact</a>
        </div>
    </div>
</header>

<main>
<div id="page-a-propos">
    <content id="bloc-a-propos">
        <h1 class="apropos">Miamateur qu'est ce que c'est ?</h1>
        <p class="apropos">Bienvenue sur notre site de recettes simples et délicieuses spécialement conçu pour les étudiants ! Nous comprenons que la vie étudiante peut être trépidante, et trouver des idées de repas rapides, abordables et savoureux peut parfois être un défi. C'est pourquoi nous avons créé cette plateforme pour vous faciliter la vie en cuisine.</p>

        <p>Notre site, dénommé "Miamateur", regorge d'options de recettes spécialement adaptées aux besoins des étudiants. Que vous soyez un novice en cuisine ou que vous souhaitiez simplement préparer des repas rapides, nous avons tout ce qu'il vous faut.</p>

        <p>L'une de nos fonctionnalités phares est la possibilité de sélectionner le nombre de poêles dont vous disposez. Nous savons que les ressources peuvent être limitées dans les cuisines étudiantes, c'est pourquoi nous avons inclus cette option. Vous pouvez spécifier si vous n'avez qu'une seule poêle à disposition ou si vous en avez plusieurs, et notre site vous proposera des recettes qui correspondent à vos équipements.</p>

        <p>De plus, vous trouverez une large gamme de catégories de recettes parmi lesquelles choisir. Des plats végétariens aux recettes économiques de moins de 5 €, en passant par les repas qui se préparent en moins de 5 minutes, notre site vous offre une variété d'options pour répondre à vos besoins et à vos préférences.</p>

        <p>Naviguez à travers notre collection de recettes de la communauté et découvrez les favoris des autres étudiants. Vous pouvez également soumettre vos propres recettes et partager vos astuces culinaires avec la communauté.

        <p>Chez "Miamateur", nous sommes là pour vous faciliter la vie en cuisine, vous permettant ainsi de préparer des repas délicieux et nourrissants, même avec des contraintes de temps et de budget. Profitez de notre site et régalez-vous avec nos recettes simples, savoureuses et adaptées aux étudiants.</p>

        <p>Bon appétit !</p>
    </content>
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