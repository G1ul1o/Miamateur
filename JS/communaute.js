window.onload = function() {
    var page = document.getElementById("container");

    var nbre_recette = 14; /*requete serveur*/

    var indice = 0;

    for (var i = 0; i < nbre_recette; i++) {
        if (indice === 0) {
            var ul = document.createElement("ul");
        }

        var li = document.createElement("li");

        var a = document.createElement("a");

        var img = document.createElement("img");

        var Titre=document.createElement("h2");

        a.href = "https://fr.wikipedia.org/wiki/Attaque_par_force_brute"; /*lien vers la page recette*/

        img.src = "frites.jpeg";  /* lien vers la photo*/

        Titre.textContent="Frites";  /*titre*/

        a.appendChild(img);

        li.appendChild(a);

        li.appendChild(Titre);

        ul.appendChild(li);

        indice++;

        if (indice === 4)
        {
            page.appendChild(ul);
            indice = 0;
        }
    }

    if (indice!==0) {
        for (var j = indice; j < 4; j++) {
            li = document.createElement("li");

            a = document.createElement("a");

            img = document.createElement("img");

            Titre = document.createElement("h2");

            a.href = ""; /*lien vers la page recette*/

            img.src = "";  /* lien vers la photo*/

            Titre.textContent = "";  /*titre*/

            a.appendChild(img);

            li.appendChild(a);

            li.appendChild(Titre);

            ul.appendChild(li);
        }
        page.appendChild(ul);
    }
};