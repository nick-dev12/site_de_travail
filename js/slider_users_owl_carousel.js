$(document).ready(function () {

    var carousel = $('.carousel1');

    var numItems = carousel.find('.carousel').length;

    if (numItems > 4) {

        // Initialiser Owl Carousel si il y a plus de 4 éléments
        carousel.owlCarousel({
            items: 5, // Limitez le nombre d'éléments à afficher à 5
            loop: true,
            loop: true,
            autoplay: true,
            autoplayTimeout: 6000,
            animateOut: 'slideOutDown',
            animateIn: 'flipInX',
            stagePadding: 30,
            smartSpeed: 450,
            margin: 20,
            nav: true,
            navText: ['<i class="fa-solid fa-chevron-left"></i>', '<i class="fa-solid fa-chevron-right"></i>']
        });

        var carousel1 = $('.carousel1').owlCarousel();
        $('.owl-next').click(function () {
            carousel1.trigger('next.owl.carousel');
        })
        $('.owl-prev').click(function () {
            carousel1.trigger('prev.owl.carousel');
        })



    } else {

        // Empêcher l'initialisation de Owl Carousel
        carousel.trigger('destroy.owl.carousel');

        // Remettre styles par défaut
        carousel.removeClass('owl-carousel owl-loaded');
        carousel.find('.owl-stage-outer').children().unwrap();

    }





    $('.boot').owlCarousel({
        items: 1,
        loop: true,
        autoplay: true,
        autoplayTimeout: 6000,
        animateOut: 'slideOutDown',
        animateIn: 'flipInX',
        stagePadding: 1,
        smartSpeed: 450,
        margin: 0,
        nav: true,
        navText: ['<i class="fa-solid fa-chevron-left"></i>', '<i class="fa-solid fa-chevron-right"></i>']
    });
    var carousel2 = $('.carousel2').owlCarousel();
    $('.owl-next2').click(function () {
        carousel2.trigger('next.owl.carousel');
    })
    $('.owl-prev2').click(function () {
        carousel2.trigger('prev.owl.carousel');
    })

});



$(document).ready(function () {
    // Carrousel 2  
    var carousel2 = $('.carousel2');
    var numItems2 = carousel2.find('.carousel').length;

    if (numItems2 > 4) {

        // Initialiser Owl carousel2 si il y a plus de 4 éléments
        carousel2.owlCarousel({
            items: 5, // Limitez le nombre d'éléments à afficher à 5
            loop: true,
            autoplay: true,
            autoplayTimeout: 6000,
            animateOut: 'slideOutDown',
            animateIn: 'flipInX',
            stagePadding: 30,
            smartSpeed: 450,
            margin: 20,
            nav: true,
            navText: ['<i class="fa-solid fa-chevron-left"></i>', '<i class="fa-solid fa-chevron-right"></i>']
        });

        var carousel2 = $('.carousel2').owlCarousel();
        $('.owl-next').click(function () {
            carousel2.trigger('next.owl.carousel');
        })
        $('.owl-prev').click(function () {
            carousel2.trigger('prev.owl.carousel');
        })



    } else {

        carousel2.trigger('destroy.owl.carousel');
        carousel2.removeClass('owl-carousel owl-loaded');
        carousel2.find('.owl-stage-outer').children().unwrap();

    }


});



$(document).ready(function () {
    // Carrousel 3  
    var carousel3 = $('.carousel3');
    var numItems2 = carousel3.find('.carousel').length;

    if (numItems2 > 4) {

        // Initialiser Owl carousel3 si il y a plus de 4 éléments
        carousel3.owlCarousel({
            items: 5, // Limitez le nombre d'éléments à afficher à 5
            loop: true,
            autoplay: true,
            autoplayTimeout: 6000,
            animateOut: 'slideOutDown',
            animateIn: 'flipInX',
            stagePadding: 30,
            smartSpeed: 450,
            margin: 20,
            nav: true,
            navText: ['<i class="fa-solid fa-chevron-left"></i>', '<i class="fa-solid fa-chevron-right"></i>']
        });

        var carousel3 = $('.carousel3').owlCarousel();
        $('.owl-next').click(function () {
            carousel3.trigger('next.owl.carousel');
        })
        $('.owl-prev').click(function () {
            carousel3.trigger('prev.owl.carousel');
        })



    } else {

        carousel3.trigger('destroy.owl.carousel');
        carousel3.removeClass('owl-carousel owl-loaded');
        carousel3.find('.owl-stage-outer').children().unwrap();

    }


});




$(document).ready(function () {
    // Carrousel 3  
    var carousel4 = $('.carousel4');
    var numItems2 = carousel4.find('.carousel').length;

    if (numItems2 > 4) {

        // Initialiser Owl carousel4 si il y a plus de 4 éléments
        carousel4.owlCarousel({
            items: 4, // Limitez le nombre d'éléments à afficher à 5
            loop: true,
            autoplay: true,
            autoplayTimeout: 6000,
            animateOut: 'slideOutDown',
            animateIn: 'flipInX',
            stagePadding: 30,
            smartSpeed: 450,
            margin: 20,
            nav: true,
            navText: ['<i class="fa-solid fa-chevron-left"></i>', '<i class="fa-solid fa-chevron-right"></i>']
        });

        var carousel4 = $('.carousel4').owlCarousel();
        $('.owl-next').click(function () {
            carousel4.trigger('next.owl.carousel');
        })
        $('.owl-prev').click(function () {
            carousel4.trigger('prev.owl.carousel');
        })



    } else {

        carousel4.trigger('destroy.owl.carousel');
        carousel4.removeClass('owl-carousel owl-loaded');
        carousel4.find('.owl-stage-outer').children().unwrap();

    }


});


$(document).ready(function () {
    // Carrousel 3  
    var carousel5 = $('.carousel5');
    var numItems2 = carousel5.find('.carousel').length;

    if (numItems2 > 4) {

        // Initialiser Owl carousel5 si il y a plus de 4 éléments
        carousel5.owlCarousel({
            items: 5, // Limitez le nombre d'éléments à afficher à 5
            loop: true,
            autoplay: true,
            autoplayTimeout: 6000,
            animateOut: 'slideOutDown',
            animateIn: 'flipInX',
            stagePadding: 30,
            smartSpeed: 450,
            margin: 20,
            nav: true,
            navText: ['<i class="fa-solid fa-chevron-left"></i>', '<i class="fa-solid fa-chevron-right"></i>']
        });

        var carousel5 = $('.carousel5').owlCarousel();
        $('.owl-next').click(function () {
            carousel5.trigger('next.owl.carousel');
        })
        $('.owl-prev').click(function () {
            carousel5.trigger('prev.owl.carousel');
        })



    } else {

        carousel5.trigger('destroy.owl.carousel');
        carousel5.removeClass('owl-carousel owl-loaded');
        carousel5.find('.owl-stage-outer').children().unwrap();

    }


});



$(document).ready(function () {
    // Carrousel 3  
    var carousel6 = $('.carousel6');
    var numItems2 = carousel6.find('.carousel').length;

    if (numItems2 > 4) {

        // Initialiser Owl carousel6 si il y a plus de 4 éléments
        carousel6.owlCarousel({
            items: 5, // Limitez le nombre d'éléments à afficher à 5
            loop: true,
            autoplay: true,
            autoplayTimeout: 6000,
            animateOut: 'slideOutDown',
            animateIn: 'flipInX',
            stagePadding: 30,
            smartSpeed: 450,
            margin: 20,
            nav: true,
            navText: ['<i class="fa-solid fa-chevron-left"></i>', '<i class="fa-solid fa-chevron-right"></i>']
        });

        var carousel6 = $('.carousel6').owlCarousel();
        $('.owl-next').click(function () {
            carousel6.trigger('next.owl.carousel');
        })
        $('.owl-prev').click(function () {
            carousel6.trigger('prev.owl.carousel');
        })



    } else {

        carousel6.trigger('destroy.owl.carousel');
        carousel6.removeClass('owl-carousel owl-loaded');
        carousel6.find('.owl-stage-outer').children().unwrap();

    }


});



$(document).ready(function () {
    // Carrousel 3  
    var carousel7 = $('.carousel7');
    var numItems2 = carousel7.find('.carousel').length;

    if (numItems2 > 4) {

        // Initialiser Owl carousel7 si il y a plus de 4 éléments
        carousel7.owlCarousel({
            items: 5, // Limitez le nombre d'éléments à afficher à 5
            loop: true,
            autoplay: true,
            autoplayTimeout: 6000,
            animateOut: 'slideOutDown',
            animateIn: 'flipInX',
            stagePadding: 30,
            smartSpeed: 450,
            margin: 20,
            nav: true,
            navText: ['<i class="fa-solid fa-chevron-left"></i>', '<i class="fa-solid fa-chevron-right"></i>']
        });

        var carousel7 = $('.carousel7').owlCarousel();
        $('.owl-next').click(function () {
            carousel7.trigger('next.owl.carousel');
        })
        $('.owl-prev').click(function () {
            carousel7.trigger('prev.owl.carousel');
        })



    } else {

        carousel7.trigger('destroy.owl.carousel');
        carousel7.removeClass('owl-carousel owl-loaded');
        carousel7.find('.owl-stage-outer').children().unwrap();

    }


   

        $('.container_slider').owlCarousel({
            items: 1,
            loop: true,
            autoplay: true,
            autoplayTimeout: 5000,
            animateOut: 'slideOutDown',
            animateIn: 'flipInX',
            stagePadding: 1,
            smartSpeed: 1000,
            margin: 0,
            nav: true,
            navText: ['<i class="fa-solid fa-chevron-left"></i>', '<i class="fa-solid fa-chevron-right"></i>']
        });
       
        
        });
        



