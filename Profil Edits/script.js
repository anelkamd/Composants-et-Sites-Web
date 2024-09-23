// Sélectionne le bouton dropdown et le contenu
const dropdownBtn = document.querySelector('.dropdown-btn');
const dropdownContent = document.querySelector('.dropdown-content');

// Ajoute un événement au clic pour afficher ou cacher le menu
dropdownBtn.addEventListener('click', () => {
    dropdownContent.classList.toggle('show');
});

// Ferme le menu si on clique en dehors du menu
document.addEventListener('click', function(event) {
    if (!dropdownBtn.contains(event.target) && !dropdownContent.contains(event.target)) {
        dropdownContent.classList.remove('show');
    }
});
