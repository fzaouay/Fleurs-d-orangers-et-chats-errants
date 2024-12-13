document.addEventListener('DOMContentLoaded', function () {
    var swiper = new Swiper('.swiper-container', {
        // Configuration de base de Swiper
        slidesPerView: 1,  // Afficher une slide à la fois
        loop: true,        // Boucle infinie
        autoplay: {        // Activer l'autoplay
            delay: 3000,   // Temps entre chaque slide (en millisecondes)
        },
        pagination: {      // Pagination en bas du slider
            el: '.swiper-pagination',
            clickable: true, // Rendre la pagination cliquable
        },
        navigation: {      // Contrôles pour passer à la slide suivante/précédente
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
});
