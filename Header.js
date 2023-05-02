

var input = document.querySelector('input');
input.addEventListener('focus', function() {
    input.setAttribute('placeholder', '');
});
input.addEventListener('blur', function() {
    input.setAttribute('placeholder', 'Recherche');
});




const searchForm = document.querySelector('.input');

searchForm.addEventListener('click', () => {
    searchForm.classList.add('clicked');
});

searchForm.addEventListener('transitionend', () => {
    searchForm.classList.remove('clicked');
});