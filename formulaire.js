function ajouterIngredient() {
    var selectIngredient = document.getElementById("selectIngredient");
    var inputQuantite = document.getElementById("inputQuantite");
    var nomIngredient = selectIngredient.options[selectIngredient.selectedIndex].text;
    var idIngredient = selectIngredient.value;
    var quantite = inputQuantite.value;
    var tr = document.createElement("tr");
    tr.innerHTML = `
    <td>${nomIngredient}</td>
    <td>${quantite}</td>
    <td>
      <button type="button" class="btn btn-danger btn-sm" onclick="supprimerLigne(this)">Supprimer</button>
      <input type="hidden" name="ingredients[]" value="${idIngredient},${quantite}">
    </td>
  `;
    var tbody = document.getElementById("tbodyIngredients");
    tbody.appendChild(tr);
}

function ajouterUstensile() {
    var selectUstensile = document.getElementById("selectUstensile");
    var nomUstensile = selectUstensile.options[selectUstensile.selectedIndex].text;
    var idUstensile = selectUstensile.value;
    var tr = document.createElement("tr");
    tr.innerHTML = `
    <td>${nomUstensile}</td>
    <td>
      <button type="button" class="btn btn-danger btn-sm" onclick="supprimerLigne(this)">Supprimer</button>
      <input type="hidden" name="ustensiles[]" value="${idUstensile}">
    </td>
  `;
    var tbody = document.getElementById("tbodyUstensiles");
    tbody.appendChild(tr);
}

function ajouterTag() {
    var inputTag = document.getElementById("inputTag");
    var nomTag = inputTag.value;
    var tr = document.createElement("tr");
    tr.innerHTML = `
    <td>${nomTag}</td>
    <td>
      <button type="button" class="btn btn-danger btn-sm" onclick="supprimerLigne(this)">Supprimer</button>
      <input type="hidden" name="tags[]" value="${nomTag}">
    </td>
  `;
    var tbody = document.getElementById("tbodyTags");
    tbody.appendChild(tr);
}

function supprimerLigne(btn) {
    var tr = btn.parentNode.parentNode;
    tr.parentNode.removeChild(tr);
}