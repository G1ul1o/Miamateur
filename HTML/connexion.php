<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>connexion</title>
    <script src="../JS/index.js" defer></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="../CSS/inscription.css">
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
<div class="container">
    <a class="button " href="inscription.php">inscription</a>
    <a class="button child" href="connexion.php">connexion</a>
    <section>
        <br>
        <div class="container-form">
            <form>
                <fieldset>
                    <legend>CONNEXION</legend>
                    <label for="mail" class="ordre">Adresse mail:</label>
                    <input type="mail" id="mail" name="mail">
                    <br>
                    <label for="mdp" class="ordre">Mot de passe:</label>
                    <input type="text" id="mdp" name="mdp">
                </fieldset>

                <fieldset>
                    <button type="submit">se connecter</button>

                </fieldset>
            </form>
        </div>
    </section>
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