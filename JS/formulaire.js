var nb_ingredients = 0;
var nb_utensils = 0;
var nb_tag = 0;

//fonction qui permet d'ajouter des cases en cliquant sur les boutons "ajouter un ingrédient" ou bien "ajouter un ustensile"
document.addEventListener('DOMContentLoaded', function() {
    const ingredientsContainer = document.getElementById('ingredients-container');
    const boutonAjouterIngredient = document.getElementById('ajouter-ingredient');

    const ustensilsContainer = document.getElementById('ustensils-container');
    const boutonAjouterUstensil = document.getElementById('ajouter-ustensil');

    // Ajouter un ingrédient
    boutonAjouterIngredient.addEventListener('click', function() {
        const nouvelIngredient = document.createElement('div');
        nouvelIngredient.className = 'ingredient';
        nouvelIngredient.innerHTML = `
      
      <label for="quantite">Quantite:</label>
                <input type="number" id="quantite" name="quantite"
                       min="1" max="2000">
      
      <select name="mesures" id="mesure-select">
                    <option value="2">--Choisir une mesure--
                    </option>
                    <option value="gramme">gramme</option>
                    <option value="litre">litre</option>
                    <option value="cuillere_a_cafe">cuillère à café</option>
                    <option value="grande_cuillère">grande_cuillère</option>

      </select>
      
      <input type="text" name="ingredient[]" placeholder="Ingredient ${ingredientsContainer.childElementCount + 1}">
        
      
      <button type="button" class="supprimer-ingredient">Supprimer</button>
    `;

        ingredientsContainer.appendChild(nouvelIngredient);

    });

    // Supprimer un ingrédient
    ingredientsContainer.addEventListener('click', function(e) {
        if (e.target.classList.contains('supprimer-ingredient')) {
            e.target.parentElement.remove();
            nb_ingredients--;
        }
    });

    // Ajouter un ustensil
    boutonAjouterUstensil.addEventListener('click', function() {
        const nouvelUstensil = document.createElement('div');
        nouvelUstensil.className = 'ustensil';
        nouvelUstensil.innerHTML = `
            <input type="text" name="ustensil[]" placeholder="Ustensil ${ustensilsContainer.childElementCount + 1}">
            <button type="button" class="supprimer-ustensil">Supprimer</button>
        `;
        ustensilsContainer.appendChild(nouvelUstensil);
        nb_utensils++;
    });

    // Supprimer un ustensil
    ustensilsContainer.addEventListener('click', function(e) {
        if (e.target.classList.contains('supprimer-ustensil')) {
            e.target.parentElement.remove();
            nb_utensils--;
        }
    });
});

document.addEventListener('DOMContentLoaded', function() {
    const tagsContainer = document.getElementById('tags-container');
    const boutonAjouterTag = document.getElementById('ajouter-tag');

    // Ajouter un tag
    boutonAjouterTag.addEventListener('click', function() {
        const nouveauTag = document.createElement('div');
        nouveauTag.className = 'tag';
        nouveauTag.innerHTML = `
            <input type="text" id="tags[]" name="tags[]" placeholder="tags ${tagsContainer.childElementCount + 1}">
            <button type="button" class="supprimer-tag">Supprimer</button>
        `;
        tagsContainer.appendChild(nouveauTag);
        nb_tag++;
    });

    // Supprimer un tag
    tagsContainer.addEventListener('click', function(e) {
        if (e.target.classList.contains('supprimer-tag')) {
            e.target.parentElement.remove();
            nb_tag--;
        }
    });
});

//permet de vérifier que le formulaire est complet
function generer()
{
    var formulaire = document.forms.ajoutRecette;

    var ingredients="";

    var utensiles="";

    var valeurs = "";

    var tags="";


    //on récupère tout les checkbox
    var checkboxes = document.querySelectorAll('input[type="checkbox"]');
    var Rempli = false;
    var limite4= checkboxes[checkboxes.length - 1];

    for (var i = 0; i < checkboxes.length; i++) {
        
        //on vérifie si le checkbox est rempli
        if (checkboxes[i].checked) {

            Rempli = true;

            var label = checkboxes[i].name; //on récupère le label

            tags+=label+".";

        }
    }

    tags = tags.replace(/\.(?=[^.]*$)/, ""); //retirer le dernier caractère qui est "." (?=[^.]*$ s'assure que c'est le dernier point
    
    //on récupère tout les ingrédients et leurs mesures
    var inputs = document.querySelectorAll('input[name="ingredient[]"]');
    var inputs_mesure = document.querySelectorAll('select[name="mesures[]"]');



    if (inputs[0].value!=="" && inputs_mesure[0].value!=="2")
    {
        var limite= inputs[inputs.length - 1]; //on récupère le dernier élément pour la limite

        var indice=0;

        // Parcourez la liste des inputs et récupérez les valeurs
        for (var i=0;i<inputs.length;i++)
        {
            var indice_quantite=i+indice;
            console.log("quantite"+indice_quantite);
            //on recupère la quantite portant l'id "quantite" + indice
            const quantiteInput = document.getElementById("quantite"+indice_quantite);
            console.log(quantiteInput);
            //on vérifie que les valeurs soit bien rempli
            if (inputs[i].value!=="" && inputs_mesure[i].value!=="2" && quantiteInput.value!=="")
            {
                if (inputs[i] === limite)
                {
                    ingredients+=inputs[i].value + inputs_mesure[i].value + quantiteInput.value;
                }

                else
                {
                    ingredients+=inputs[i].value+inputs_mesure[i].value+quantiteInput.value+".";
                }
            }
            else
            {
                Rempli=false;
            }
            indice=1;
            console.log("je passe");
        }
    }

    else
    {
        Rempli=false;
    }

    var inputs2 = document.querySelectorAll('input[name="ustensil[]"]');

    if (inputs2[0].value!=="")
    {
        var limite2=inputs2[inputs2.length - 1];

        inputs2.forEach(function(input2)
        {
            if (input2.value!=="")
            {
                if (input2 === limite2)
                {
                    utensiles+=input2.value;
                }
                else
                {
                    utensiles+=input2.value+".";
                }
            }
            else
            {
                Rempli=false;
            }

        });
    }

    else
    {
        Rempli=false;
    }
    
    //on vérifie si les autres cases sont remplis
    if (Rempli===true && formulaire.elements["nom"].value!=="" && formulaire.elements["photo"].value!==""
        && formulaire.elements["temps"].value!=="" && formulaire.elements["portion"].value!=="" && formulaire.elements["description"].value!==""
        && formulaire.elements["prix"].value!=="" && formulaire.elements["temps_cuisson"].value!=="" && formulaire.elements["etapes"].value!=="")
    {
        var nomRecette= formulaire.elements["nom"].value;

        var lien_photo= formulaire.elements["photo"].value;

        var temps_preparation= formulaire.elements["temps"].value;

        var portion= formulaire.elements["portion"].value;

        var description = formulaire.elements["description"].value;

        var prix = formulaire.elements["prix"].value;

        var temps_cuisson = formulaire.elements["temps_cuisson"].value;

        var etapes = formulaire.elements["etapes"].value;



        alert("\u{2714} Recette  bien prise en compte \u{2714}")

        formulaire.reset();
    }
    else
    {
        alert("\u{2718} Le formulaire n'est pas complet \u{2718}")
    }
}

//on génére les tags
window.onload = function() {
    var page = document.getElementById("tags-container");

    // Requête AJAX pour récupérer les tags depuis la base de données
    var xhr = new XMLHttpRequest();
    xhr.open("GET", "../PHP/get_tags.php", true);
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            var tags = JSON.parse(xhr.responseText);

            var indice = 0;
            var nb_tag = tags.length;

            for (var i = 0; i< nb_tag; i++)
            {
                if (indice === 0)
                {
                    var ul = document.createElement("ul");

                }
                var li = document.createElement("li");

                // Création de la chexbox
                var checkbox = document.createElement('input');
                checkbox.type = "checkbox";
                checkbox.id = "tag_" + tags[i].id;
                checkbox.name = "tags[]";
                checkbox.value = tags[i].nom;

                // Création de l'élément label associé à la checkbox
                var label = document.createElement("label");
                label.htmlFor = "tag_" + tags[i].id;
                label.textContent = tags[i].nom;

                li.appendChild(checkbox);
                li.appendChild(label);

                ul.appendChild(li);

                indice++

                if (indice === 5)
                {
                    page.appendChild(ul);
                    indice=0;
                }

            }
            if (indice > 0) {
                page.appendChild(ul);
            }
        }
    };
    xhr.send();
};
