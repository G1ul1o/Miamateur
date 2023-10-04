/*cette fonction permet de générer la page dès que la page est lancé. Nous voulons 4 recettes par ligne donc nous allons insérer dans un élément ul 4 li */
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
            /* on refait la même chose autant de fois qu'il y a de recettes */
            for (var i = 0; i < nbre_recette; i++) {
                /* indice nous permettra de savoir si les 4 recettes on été ajouté */
                if (indice === 0) {
                    
                    var ul = document.createElement("ul");
                }
                 /*création des éléments composant notre ul */
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
                
                /* On ajoute uniquement s'il y a 4 recettes qui ont été rajouté */
                if (indice === 4) 
                {
                    page.appendChild(ul);
                    indice = 0;
                }
            }
            
            /*s'il y a plus de recettes mais qu'il y a pas 4 recettes ajouté on ajoute des éléments vide pour combler */
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
