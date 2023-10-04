<!DOCTYPE html>
<html lang="en">
<head>
    <script src="../JS/index.js" defer></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="../CSS/contact.css">
    <link rel="stylesheet" href="../CSS/HEADER.css">
    <link rel="stylesheet" href="../CSS/FOOTER.css">
    <meta charset="UTF-8">
    <title>Contact</title>
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

            <a class="header-button" href="apropos.php" target="_self">A propos</a>

            <a class="active header-button" href="contact.php" target="_self">Contact</a>
        </div>
    </div>
</header>
<main>
<div class="table-container container-gray">
    <table>
        <caption class="nos-contacts">Nos contacts</caption>
        <thead>
        <tr>
            <th>Nom</th>
            <th>Rôle</th>
            <th>Mail</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>GARNIER Giulio</td>
            <td>Chef de projet</td>
            <td>garnier.giulio@efrei.net</td>
        </tr>
        <tr>
            <td>BOULLE Maxime</td>
            <td>Responsable backend</td>
            <td>maxime.boulle@efrei.net</td>
        </tr>
        <tr>
            <td>HUYBRECHTS Théotime</td>
            <td>Responsable navigation</td>
            <td>theotime.huybrechts@efrei.net</td>
        </tr>
        <tr>
            <td>SUN Jean-Jacques</td>
            <td>Responsable recette</td>
            <td>jean-jacques.sun@efrei.net</td>
        </tr>
        <tr>
            <td>PAGNEUX Maxime</td>
            <td>Developpeur backend</td>
            <td>pagneux.maxime@efrei.net</td>
        </tr>
        </tbody>
    </table>
</div>
<br>
<br><br>

<div class="table-container container-gray">
    <table>
        <caption class="nos-contacts">Nos Réseaux</caption>
        <thead>
        <tr>
            <th>Réseau social</th>
            <th>Nom du compte</th>
            <th>Date de création</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td><img class='img-table' alt='insta' src="../image/Instagram-logo.png"></td>
            <td>miamateur</td>
            <td>05 janvier 2023</td>
        </tr>
        <tr>
            <td><img class='img-table' alt='insta' src="../image/facebook-logo.png"></td>
            <td>facemateur</td>
            <td>15 mars 2023</td>
        </tr>
        <tr>
            <td><img class='img-table' alt='insta' src="../image/pinterest-logo.png"></td>
            <td>miamart</td>
            <td>30 novembre 2022</td>
        </tr>
        <tr>
            <td><img class='img-table' alt='insta' src="../image/twitter-logo.png"></td>
            <td>miamasterclass</td>
            <td>23 mars 2023</td>
        </tr>
        </tbody>
    </table>
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