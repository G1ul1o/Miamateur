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