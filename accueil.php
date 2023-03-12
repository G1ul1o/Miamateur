<?php
    include 'php/connection.php';
    $sql = 'SELECT * FROM recette ';
    $table = $connection->query($sql);
    $ligne = $table->fetch();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
    <meta charset="UTF-8">
    <title>Acceuil</title>
</head>
<body>
    <header id="header">
        <div class="container">
            <button class="navbutton" id="navbutton" onclick="changeDisplay()"></button>
            <h1 class="title">Marmithon</h1>
            <div class="input-wrapper">
                <input type="text" class="input" placeholder="Rechercher">
                <button class="button">Rechercher</button>
    
            </div>
            <div class="buttons-wrapper">
                <button class="button">Connexion</button>
                <button class="button">Inscription</button>
            </div>
        </div>
    </header>
    <nav id="nav">
        <li id="li1">
            <a>Recettes</a>
            <ul id="ul1">
                <li><a>Entrées</a></li>
                <li><a >Plats</a></li>
                <li><a>Desserts</a></li>
            </ul>
        </li>
        <li id="li2">
            <a>Recettes</a>
            <ul id="ul2">
                <li><a>Entrées</a></li>
                <li><a >Plats</a></li>
                <li><a>Desserts</a></li>
            </ul>
        </li>
        <li id="li3">
            <a>Recettes</a>
            <ul id="ul3">
                <li><a>Entrées</a></li>
                <li><a >Plats</a></li>
                <li><a>Desserts</a></li>
            </ul>
        </li>
        <li id="li4">
            <a>Recettes</a>
            <ul id="ul4">
                <li><a>Entrées</a></li>
                <li><a >Plats</a></li>
                <li><a>Desserts</a></li>
            </ul>
        </li>
    </nav>
    <div class="scrolable">
        <div>
            <img src="<?= base64_encode($ligne['image']) ?>"  width = "50px" height = "50px" alt="">
            <h2><?= $ligne['nom'] ?></h2>
            <p><?= $ligne['description'] ?></p>
        </div>
    </div>
</body>
</html>
