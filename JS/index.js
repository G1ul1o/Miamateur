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
    xhr.open('GET', 'autocomplete.php?q=' + searchString, true);
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