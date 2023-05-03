// Récupère la barre de recherche et le conteneur de suggestions
const searchBar = document.getElementById('input');
const suggestionsContainer = document.getElementById('suggestions-container');

// Écoute les événements de saisie dans la barre de recherche
searchBar.addEventListener('input', () => {
    // Récupère la valeur actuelle de la barre de recherche
    const searchString = searchBar.value;

    // Envoie une requête AJAX pour récupérer les suggestions de recettes
    const xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
        if (this.readyState === 4 && this.status === 200) {
            // Parse la réponse JSON
            const suggestions = JSON.parse(this.responseText);

            // Affiche les suggestions dans le conteneur de suggestions
            suggestionsContainer.innerHTML = '';
            suggestions.forEach((suggestion) => {
                const suggestionElement = document.createElement('div');
                suggestionElement.classList.add('suggestion');
                suggestionElement.innerText = suggestion.nom;
                suggestionElement.addEventListener('click', () => {
                    searchBar.value = suggestion.nom;
                    suggestionsContainer.innerHTML = '';
                });
                suggestionsContainer.appendChild(suggestionElement);
            });
        }
    };
    xhr.open('GET', 'autocomplete.php?q=' + searchString, true);
    xhr.send();
});

// Ferme le conteneur de suggestions lorsque l'utilisateur clique en dehors de celui-ci
document.addEventListener('click', (event) => {
    if (!event.target.matches('.input') && !event.target.matches('.suggestion')) {
        suggestionsContainer.innerHTML = '';
    }
});