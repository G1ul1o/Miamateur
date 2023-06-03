const searchBar = document.getElementById('searchBar');
const suggestionsContainer = document.getElementById('suggestions-container');
const searchButton = document.getElementById('searchButton');

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
    xhr.open('GET', '../PHP/autocomplete.php?q=' + searchString, true);
    xhr.send();
});

document.addEventListener('click', (event) => {
    if (!event.target.matches('.input') && !event.target.matches('.suggestion')) {
        suggestionsContainer.innerHTML = '';
    }
});


// Attendre que le contenu de la page soit chargé
window.addEventListener("scroll", function() {
    var footer = document.querySelector("footer");
    var scrollPosition = window.scrollY;
    var windowHeight = window.innerHeight;
    var bodyHeight = document.body.offsetHeight;

    if (scrollPosition + windowHeight >= bodyHeight) {
        footer.style.opacity = "1";
        footer.style.visibility = "visible";
    } else {
        footer.style.opacity = "0";
        footer.style.visibility = "hidden";
    }
});


//le code pour le zoom sur les photos
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

        // Ajoute l'image agrandie à la superposition
        overlay.appendChild(enlargedImage);

        // Ajoute la superposition à la page
        document.body.appendChild(overlay);

        // Ajoute un écouteur d'événement de clic à la superposition pour la fermer
        overlay.addEventListener('click', () => {
            document.body.removeChild(overlay);
        });
    });
});




//le code pour les menus déroulants
function toggleMenu(menuName) {
    const menuContent = document.querySelector(`.menu-content.${menuName}`);
    menuContent.classList.toggle('show');
}