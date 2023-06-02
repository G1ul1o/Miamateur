var nb_ingredients=0;
var nb_utensils=0;
var nb_tag=0;

/*document.addEventListener('DOMContentLoaded', function() {
    const container = document.getElementById('etapes-container');
    const boutonAjouter = document.getElementById('ajouter-etape');

    // Ajouter une étape
    boutonAjouter.addEventListener('click', function() {
        const nouvelleEtape = document.createElement('div');
        nouvelleEtape.className = 'Etape';
        nouvelleEtape.innerHTML = `<input type="text" name="Etape[]" placeholder="Etape ${container.childElementCount + 1}" required>
                                   <button type="button" class="supprimer-etape">Supprimer</button>`;
        container.appendChild(nouvelleEtape);
    });

    // Supprimer une étape
    container.addEventListener('click', function(e) {
        if (e.target.classList.contains('supprimer-etape')) {
            e.target.parentElement.remove();
        }
    });
});

 */

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
      <input type="text" name="ingredient[]" placeholder="Ingredient ${ingredientsContainer.childElementCount + 1}">
        
       <!--A envoyer -->    
      <select name="mesures" id="mesure-select">
                    <option value="2">--Choisir une mesure--
                    </option>
                    <option value="gramme">gramme</option>
                    <option value="litre">litre</option>
                    <option value="cuillere_a_cafe">cuillère à café</option>
                    <option value="grande_cuillère">grande_cuillère</option>

      </select>
      
      <!--Stop -->
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
      <input type="text" name="tag[]" placeholder="Tag ${tagsContainer.childElementCount + 1}">
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


function recuperer()
{
    var formulaire = document.forms.ajoutRecette;

    var ingredients="";

    var utensiles="";

    var valeurs = "";

    var tags="";



    var checkboxes = document.querySelectorAll('input[type="checkbox"]');
    var Rempli = false;
    var limite4= checkboxes[checkboxes.length - 1];

    for (var i = 0; i < checkboxes.length; i++) {

        if (checkboxes[i].checked) {

            Rempli = true;

            var label = checkboxes[i].name; //on récupère le label

            tags+=label+".";

        }
    }

    tags = tags.replace(/\.(?=[^.]*$)/, ""); //retirer le dernier caractère qui est "." (?=[^.]*$ s'assure que c'est le dernier point

    var inputs = document.querySelectorAll('input[name="ingredient[]"]');
    var inputs_mesure = document.querySelectorAll('select[name="mesures"]');


    if (inputs[0].value!=="" && inputs_mesure[0].value!=="2")
    {
        var limite= inputs[inputs.length - 1]; //on récupère le dernier élément pour la limite

        // Parcourez la liste des inputs et récupérez les valeurs
        for (var i=0;i<inputs.length;i++)
        {
            if (inputs[i].value!=="" && inputs_mesure[i].value!=="2")
            {
                if (inputs[i] === limite)
                {
                    ingredients+=inputs[i].value + inputs_mesure[i].value;
                }

                else
                {
                    ingredients+=inputs[i].value+inputs_mesure[i].value+".";
                }
            }
            else
            {
                Rempli=false;
            }
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


    var inputs3 = document.querySelectorAll('input[name="miniature[]"]');

    if (inputs3[0].value!=="" && inputs3[1].value!=="" && inputs3[2].value!=="")
    {
        var limite3=inputs3[inputs3.length-1];

        var n=1;

        inputs3.forEach(function(input3)
        {
            if (n===1)
            {
                var miniature1=input3.value;
                n++;
            }

            else if (n===2)
            {
                var miniature2=input3.value;
                n++;
            }

            else if (n===3)
            {
                var miniature3=inputs3.value;
                n++;
            }
        });
    }

    else
    {
        Rempli=false;
    }

    if (Rempli===true && formulaire.elements["nom"].value!=="" && formulaire.elements["photo"].value!==""
        && formulaire.elements["temps"].value!=="" && formulaire.elements["quantite"].value!=="" && formulaire.elements["description"].value!=="")
    {
        var nomRecette= formulaire.elements["nom"].value;

        var lien_photo= formulaire.elements["photo"].value;

        var temps_preparation= formulaire.elements["temps"].value;

        var quantite= formulaire.elements["quantite"].value;

        var description = formulaire.elements["description"].value;

        alert("\u{2714} Recette  bien prise en compte \u{2714}")

        formulaire.reset();
    }
    else
    {
        alert("\u{2718} Le formulaire n'est pas complet \u{2718}")
    }
}

window.onload = function ()
{
    var page = document.getElementById("tags-container");

    var indice=0;

    var nb_tag=23;  /*requete serveur*/

    for (var i = 0; i< nb_tag; i++)
    {
        if (indice === 0)
        {
            var ul = document.createElement("ul");

        }
        var li = document.createElement("li");

        // Création de la chexbox
        var checkbox = document.createElement('input');
        checkbox.type = 'checkbox';
        checkbox.id = 'tag';
        checkbox.name = 'tag';  /*nom du tag requête serveur */
        checkbox.value = 'Ta';

        // Création de l'élément label associé à la checkbox
        var label = document.createElement('label');
        label.htmlFor = 'tag'; /* pour lier le label avec le checkbox*/
        label.textContent = 'Végétarien'; /*nom du tag requête serveur */

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
}