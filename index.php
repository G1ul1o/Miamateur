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
<<html lang="en">
>
    <head>
        <link rel="stylesheet" href="index.css">
        <meta charset="utf-8">
        <title>Miamateur</title>

    </head>
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
