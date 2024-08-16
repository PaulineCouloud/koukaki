document.addEventListener('DOMContentLoaded', function() {
    const titles = document.querySelectorAll('section > h2');

    function handleScroll() {
        titles.forEach(title => {
            const titlePosition = title.getBoundingClientRect().top;
            const screenPosition = window.innerHeight;

            if (titlePosition < screenPosition) {
                title.classList.add('scroll-animate');
            }
        });
    }

    window.addEventListener('scroll', handleScroll);
});

// JavaScript pour l'effet de parallaxe
window.addEventListener('scroll', function () {
    const scrollPosition = window.scrollY;
    
    const videoContainer = document.querySelector('.video-container');

    // Ajuster la position de la vidéo et du titre en fonction du défilement
    if (videoContainer) {
        videoContainer.style.transform = `translateY(${scrollPosition * 0.5}px)`;
    }
});

const carousel = document.querySelector('.characters_slide');
if(carousel){
    var swiper = new Swiper(".characters_slide", {
        effect: "coverflow",
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: "auto",
        coverflowEffect: {
            rotate: 50,
            stretch: 0,
            depth: 100,
            modifier: 1,
            slideShadows: true,
        }
    });
}


window.addEventListener('scroll', function() {
    const placeSection = document.getElementById('place');
    const bigCloud = document.getElementById('big-cloud');
    const littleCloud = document.getElementById('little-cloud');

    if (placeSection && bigCloud && littleCloud) {
        // Obtenir la position de la section place par rapport au haut du document
        const placeSectionTop = placeSection.getBoundingClientRect().top + window.scrollY;
        const windowHeight = window.innerHeight; // Hauteur du viewport
        const maxTranslateX = 300; // Déplacement maximum en pixels

        // Calculer la distance du haut du viewport à la section
        const distanceToSection = placeSectionTop - window.scrollY;
        
        // Ajuster le décalage pour que les nuages se déplacent en fonction du défilement
        // On inverse la distance pour que les nuages se déplacent à l'inverse du défilement
        const translateXValue = Math.max(0, Math.min((windowHeight - distanceToSection) / windowHeight * maxTranslateX, maxTranslateX));

        // Appliquer le décalage aux nuages
        bigCloud.style.transform = `translateX(-${translateXValue}px)`;
        littleCloud.style.transform = `translateX(-${translateXValue / 2}px)`; // Moins rapide pour créer un effet de profondeur
    }
});

/* MENU */

document.addEventListener('DOMContentLoaded', function() {
     // Sélectionner le bouton burger et le menu
     const burger = document.querySelector('.menu_burger');
     const menu = document.getElementById('menu');
     const menuLinks = document.querySelectorAll('.menu_ul li a');
     
     // Ajouter un événement de clic sur le bouton burger
     burger.addEventListener('click', function() {
         // Ajouter ou retirer la classe 'active' au menu
         menu.classList.toggle('active');
         burger.classList.toggle('close');
     });

      // Ajouter un événement de clic sur chaque lien du menu
    menuLinks.forEach(function(link) {
        link.addEventListener('click', function() {
            // Fermer le menu après avoir cliqué sur un lien
            menu.classList.remove('active');
            burger.classList.remove('close');
        });
    });
});