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
            suggestions.forEach((suggestion, index) => {
                const suggestionElement = document.createElement('div');
                suggestionElement.classList.add('suggestion');
                suggestionElement.innerText = suggestion;
                suggestionElement.addEventListener('click', () => {
                    searchBar.value = suggestion;
                    suggestionsContainer.innerHTML = '';
                });
                suggestionsContainer.appendChild(suggestionElement);


                /*navigation par boutons*/
                suggestionElement.addEventListener('keydown', (event) => {
                    if (event.key === 'ArrowDown') {
                        event.preventDefault();
                        const nextSuggestion = suggestionsContainer.children[index + 1];
                        if (nextSuggestion) {
                            nextSuggestion.focus();
                        }
                    } else if (event.key === 'ArrowUp') {
                        event.preventDefault();
                        const previousSuggestion = suggestionsContainer.children[index - 1];
                        if (previousSuggestion) {
                            previousSuggestion.focus();
                        } else {
                            searchBar.focus();
                        }
                    } else if (event.key === 'Enter') {
                        event.preventDefault();
                        searchBar.value = suggestion;
                        suggestionsContainer.innerHTML = '';
                        searchBar.form.submit();
                    }
                });
            });
        }
    };
    xhr.open('GET', '../PHP/autocomplete.php?q=' + searchString, true);
    xhr.send();
});

// Ajout de l'evenement des touches pour la barre de recherche
searchBar.addEventListener('keyup', (event) => {
    if (event.key === 'Enter') {
        event.preventDefault();
        searchBar.form.submit();
    }
});


/* code qui génére le footer en fonction de l'appareil */
if (/Mobi/.test(navigator.userAgent))
{
    var footer = document.querySelector("footer");
    var bodyHeight = document.body.offsetHeight;
    var windowHeight = window.innerHeight;


    if (bodyHeight<=windowHeight)
    {
        footer.style.opacity = "1";
        footer.style.visibility = "visible";
    }
    else
    {
        window.addEventListener("touchmove", function() {
            var scrollPosition = window.pageYOffset || document.documentElement.scrollTop || document.body.scrollTop || 0;

            if (scrollPosition + windowHeight >= bodyHeight) {
                footer.style.opacity = "1";
                footer.style.visibility = "visible";
            } else {
                footer.style.opacity = "0";
                footer.style.visibility = "hidden";
            }
        });
    }

}
else
{
    // Code exécuté pour les appareils non mobiles (ordinateurs, tablettes, etc.)
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

}
// Attendre que le contenu de la page soit chargé
