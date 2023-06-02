console.log("hello y");
document.addEventListener('DOMContentLoaded', function() {
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
      <button type="button" class="supprimer-ingredient">Supprimer</button>
    `;
        ingredientsContainer.appendChild(nouvelIngredient);
    });

    // Supprimer un ingrédient
    ingredientsContainer.addEventListener('click', function(e) {
        if (e.target.classList.contains('supprimer-ingredient')) {
            e.target.parentElement.remove();
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
    });

    // Supprimer un ustensil
    ustensilsContainer.addEventListener('click', function(e) {
        if (e.target.classList.contains('supprimer-ustensil')) {
            e.target.parentElement.remove();
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
    });

    // Supprimer un tag
    tagsContainer.addEventListener('click', function(e) {
        if (e.target.classList.contains('supprimer-tag')) {
            e.target.parentElement.remove();
        }
    });
});