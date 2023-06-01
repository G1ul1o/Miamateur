window.onload = function() {
    var page = document.getElementById("container");
    // Faire une requête AJAX pour récupérer les données des recettes depuis le serveur
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
        console.log(this.responseText);
        if (this.readyState === 4 && this.status === 200) {
            var recettes = JSON.parse(this.responseText);

            var nbre_recette = recettes.length;

            var indice = 0;

            for (var i = 0; i < nbre_recette; i++) {
                if (indice === 0) {
                    var ul = document.createElement("ul");
                }

                var li = document.createElement("li");

                var a = document.createElement("a");

                var img = document.createElement("img");

                var titre = document.createElement("h2");

                a.href = "recette.php?id=" + recettes[i].id; // Lien vers la page de la recette avec l'ID de la recette

                img.src = recettes[i].photo; // Lien vers la photo de la recette

                titre.textContent = recettes[i].nom; // Nom de la recette

                a.appendChild(img);

                li.appendChild(a);

                li.appendChild(titre);

                ul.appendChild(li);

                indice++;

                if (indice === 4) {
                    page.appendChild(ul);
                    indice = 0;
                }
            }

            if (indice !== 0) {
                for (var j = indice; j < 4; j++) {
                    var li = document.createElement("li");

                    var a = document.createElement("a");

                    var img = document.createElement("img");

                    var titre = document.createElement("h2");

                    a.href = ""; // Lien vers la page de la recette (à compléter)

                    img.src = ""; // Lien vers la photo de la recette (à compléter)

                    titre.textContent = ""; // Titre de la recette (à compléter)

                    a.appendChild(img);

                    li.appendChild(a);

                    li.appendChild(titre);

                    ul.appendChild(li);
                }
                page.appendChild(ul);
            }
        }
    };
    xhr.open('GET', '../PHP/get_all_recipes.php', true); // Chemin vers le fichier PHP qui récupère les recettes
    xhr.send();
};
