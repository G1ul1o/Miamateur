const searchBar = document.getElementById('searchBar');
const suggestionsContainer = document.getElementById('suggestions-container');

searchBar.addEventListener('input', () => {
    const searchString = searchBar.value;

    const xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
        if (this.readyState === 4 && this.status === 200) {
            const suggestions = JSON.parse(this.responseText);

            suggestionsContainer.innerHTML = '';
            suggestions.forEach((suggestion) => {
                const suggestionElement = document.createElement('div');
                suggestionElement.classList.add('suggestion');
                suggestionElement.innerText = suggestion;
                suggestionElement.addEventListener('click', () => {
                    searchBar.value = suggestion;
                    suggestionsContainer.innerHTML = '';
                });
                suggestionsContainer.appendChild(suggestionElement);
            });
        }
    };
    xhr.open('GET', 'PHP/autocomplete.php?q=' + searchString, true);
    xhr.send();
});

document.addEventListener('click', (event) => {
    if (!event.target.matches('.input') && !event.target.matches('.suggestion')) {
        suggestionsContainer.innerHTML = '';
    }
});

const searchButton = document.getElementById('searchButton');
searchButton.addEventListener('click', () => {
    const searchString = searchBar.value;
});



// code page recette !!!!
//le code pour le zoom sur les photos de la page recette
const images = document.querySelectorAll('img');

images.forEach(image => {
    // Ajoute un écouteur d'événement de clic
    image.addEventListener('click', () => {
        // Crée un élément de superposition pour afficher l'image en premier plan
        const overlay = document.createElement('div');
        overlay.classList.add('overlay');

        // Crée un élément d'image agrandie
        const enlargedImage = document.createElement('img');
        enlargedImage.src = image.src;
        enlargedImage.classList.add('enlarged-image');

        // Aaoute l'image agrandie à la superposition
        overlay.appendChild(enlargedImage);

        // ajoute la superposition à la page
        document.body.appendChild(overlay);

        // regarde si l'utilisateur clic qq part pour fermer l'overlay
        overlay.addEventListener('click', () => {
            document.body.removeChild(overlay);
        });
    });
});




//le code pour les menus déroulants de la page recette
function toggleMenu(menuName) {
    const menuContent = document.querySelector(`.menu-content.${menuName}`);
    menuContent.classList.toggle('show');
}