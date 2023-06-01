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

