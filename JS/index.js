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
