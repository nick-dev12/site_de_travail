<?php
session_start();

include_once('../entreprise/app/controller/controllerOffre_emploi.php')
    ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bienvenu</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/offre_d'emploit.css">
    <link rel="stylesheet" href="/css/owl.carousel.css">
    <link rel="stylesheet" href="/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/navbare.css">
</head>

<body>

    <?php include('../navbare.php') ?>

    <section class="section2">
        <div class="slider">
            <div class="box">
                <div class="img owl-carousel boot">
                    <img src="/image/offre1.jpg" alt="">
                    <img src="/image/offre-emploi-quebec.jpg" alt="">
                    <img src="/image/offre3.jpg" alt="">
                    <img src="/image/offre4.jpeg" alt="">
                </div>
                <div class="text">
                    <h1>Exploré les profils qui conviennent à vos besoins</h1>
                    <p>Un large éventail de profiles professionnels toute catégorie confondu pour satisfaire le moindres
                        de vos besoins en main d'œuvre et bien plus encore </p>
                    <form action="" method="post">
                        <input type="search" name="" id="search">
                        <label for="recherche"><i class="fa-solid fa-magnifying-glass fa-xs"></i></label>
                        <input type="submit" value="recherche" id="recherche">
                    </form>
                </div>
            </div>

        </div>

    </section>


    <section class="produit_vedete">
        <div class="box1">
            <span></span>
            <h1>Ingénierie et architecture</h1>
            <span></span>
            <div class="affiche">
                <img src="/image/ingenieur.jpeg" alt="">
            </div>
        </div>

        <div class="box2">
            <span><i class="fa-solid fa-chevron-left"></i></span>
            <span><i class="fa-solid fa-chevron-right"></i></span>
        </div>

        <article data-aos="fade-up" data-aos-delay="0" data-aos-duration="1000" data-aos-easing="ease-in-out"
            data-aos-mirror="true" data-aos-once="false" data-aos-anchor-placement="top-bottom"
            class="articles owl-carousel carousel1">
            <?php if (empty($offreIngenierie)): ?>

                <h1 class="message">Aucun profil disponible pour cette categorie</h1>

            <?php else: ?>
                <?php foreach ($offreIngenierie as $ingenieurs): ?>
                    <div class="carousel">
                        <img src="../upload/<?php echo $ingenieurs['images'] ?>" alt="">
                        <p class="p">
                            <?php echo $ingenieurs['entreprise']; ?>
                            <img src="../image/coeurs.png" alt="">
                        </p>

                            <div class="box_vendu">
                                <div class="vendu">

                                        <p>
                                            <?php echo ($ingenieurse['poste']); ?>
                                        </p>
                                </div>

                            </div>
                        
                        <p id="nom">
                            <?php echo $ingenieurs['date']; ?>
                        </p>

                        <a href="/page/profile_travailleur.php?id=<?php echo $ingenieurs['offre_id']; ?>">
                            <i class="fa-solid fa-eye"></i>Voir l'offre
                        </a>
                    </div>


                <?php endforeach ?>
            <?php endif; ?>
        </article>

    </section>




    <section class="produit_vedete">
        <div class="box1">
            <span></span>
            <h1> Design et création</h1>
            <span></span>
            <div class="affiche">
                <!-- <img src="/image/info.jpg" alt=""> -->
                <img src="/image/webdesign.jpg" alt="">
            </div>
        </div>

        <div class="box2">
            <span><i class="fa-solid fa-chevron-left"></i></span>
            <span><i class="fa-solid fa-chevron-right"></i></span>
        </div>

        <article class="articles owl-carousel carousel2">
            <?php if (empty($offreDesing)): ?>

                <h1 class="message">Aucun profil disponible pour cette categorie</h1>

            <?php else: ?>

                <?php foreach ($offreDesing as $Designs): ?>

                    <div class="carousel">
                        <img src="../upload/<?php echo $Designs['images'] ?>" alt="">
                        <p class="p">
                            <?php echo $Designs['entreprise']; ?>
                            <img src="../image/coeurs.png" alt="">
                        </p>

                        <p>
                            <?php echo ($Designs['poste']); ?>
                        </p>

                    </div>

                    </div>

                    <p id="nom">
                        <?php echo $Designs['date']; ?>
                    </p>

                    <a href="/page/profile_travailleur.php?id=<?php echo $Designs['offre_id']; ?>">
                        <i class="fa-solid fa-eye"></i>Voir l'offre
                    </a>
                    </div>

                <?php endforeach ?>

            <?php endif; ?>
        </article>
    </section>












    <section class="produit_vedete">
        <div class="box1">
            <span></span>
            <h1>Rédaction et traduction</h1>
            <span></span>
            <div class="affiche">
                <img src="/image/Redaction.jpg" alt="">
            </div>
        </div>

        <div class="box2">
            <span><i class="fa-solid fa-chevron-left"></i></span>
            <span><i class="fa-solid fa-chevron-right"></i></span>
        </div>

        <article class="articles owl-carousel carousel3">
            <?php if (empty($offreRedaction)): ?>

                <h1 class="message">Aucun profil disponible pour cette categorie</h1>

            <?php else: ?>

                <?php foreach ($offreRedaction as $Redaction): ?>

                    <div class="carousel">
                        <img src="../upload/<?php echo $Redaction['images'] ?>" alt="">
                        <p class="p">
                            <?php echo $Redaction['entreprise']; ?>
                            <img src="../image/coeurs.png" alt="">
                        </p>

                        <div class="box_vendu">
                            <div class="vendu">

                                <p>
                                    <?php echo ($Redactione['poste']); ?>
                                </p>
                            </div>

                        </div>
                        <p id="nom">
                            <?php echo $Redaction['date']; ?>
                        </p>

                        <a href="/page/profile_travailleur.php?id=<?php echo $Redaction['offre_id']; ?>">
                            <i class="fa-solid fa-eye"></i>Voir l'offre
                        </a>
                    </div>
                <?php endforeach ?>

            <?php endif; ?>
        </article>
    </section>










    <section class="produit_vedete">
        <div class="box1">
            <span></span>
            <h1>Marketing et communication</h1>
            <span></span>
            <div class="affiche">
                <img src="/image/marketing.jpg" alt="">
            </div>
        </div>

        <div class="box2">
            <span><i class="fa-solid fa-chevron-left"></i></span>
            <span><i class="fa-solid fa-chevron-right"></i></span>
        </div>

        <article class="articles owl-carousel carousel4">
            <?php if (empty($offreMarcketing)): ?>

                <h1 class="message">Aucun profil disponible pour cette categorie</h1>

            <?php else: ?>

                <?php foreach ($offreMarcketing as $marketing): ?>

                    <div class="carousel">
                        <img src="../upload/<?php echo $marketing['images'] ?>" alt="">
                        <p class="p">
                            <?php echo $marketing['entreprise']; ?>
                            <img src="../image/coeurs.png" alt="">
                        </p>

                        <div class="box_vendu">
                            <div class="vendu">
                                <p>
                                    Nous recherchons un(une),
                                    <?php echo ($marketing['poste']); ?>
                                </p>
                            </div>

                        </div>

                        <p id="nom">
                            <?php echo $marketing['date']; ?>
                        </p>

                        <a href="../entreprise/voir_offre.php?id=<?= $marketing['offre_id']; ?>">
                            <i class="fa-solid fa-eye"></i>Voir l'offre
                        </a>
                    </div>

                <?php endforeach ?>

            <?php endif; ?>
        </article>
    </section>








    <section class="produit_vedete">
        <div class="box1">
            <span></span>
            <h1>Conseil et gestion d'entreprise</h1>
            <span></span>
            <div class="affiche">
                <img src="/image/gestion.jpg" alt="">
            </div>
        </div>

        <div class="box2">
            <span><i class="fa-solid fa-chevron-left"></i></span>
            <span><i class="fa-solid fa-chevron-right"></i></span>
        </div>

        <article class="articles owl-carousel carousel5">
            <?php if (empty($offreBusiness)): ?>

                <h1 class="message">Aucun profil disponible pour cette categorie</h1>

            <?php else: ?>

                <?php foreach ($offreBusiness as $business): ?>

                    <div class="carousel">
                        <img src="../upload/<?php echo $business['images'] ?>" alt="">
                        <p class="p" >
                            <?php echo $business['entreprise']; ?>
                            <img src="../image/coeurs.png" alt="">
                        </p>

                        <div class="box_vendu">
                            <div class="vendu">
                                <p>
                                    <?php echo ($business['poste']); ?>
                                </p>

                            </div>

                        </div>
                        <p id="nom">
                            <?php echo $business['date']; ?>
                        </p>

                        <a href="/page/profile_travailleur.php?id=<?php echo $business['offre_id']; ?>">
                            <i class="fa-solid fa-eye"></i>Profil
                        </a>
                    </div>

                <?php endforeach ?>

            <?php endif; ?>
        </article>
    </section>










    <section class="produit_vedete">
        <div class="box1">
            <span></span>
            <h1>Juridique</h1>
            <span></span>
            <div class="affiche">
                <img src="/image/juridique.jpg" alt="">
            </div>
        </div>

        <div class="box2">
            <span><i class="fa-solid fa-chevron-left"></i></span>
            <span><i class="fa-solid fa-chevron-right"></i></span>
        </div>

        <article class="articles owl-carousel carousel6">
            <?php if (empty($offreJuridique)): ?>

                <h1 class="message">Aucun profil disponible pour cette categorie</h1>

            <?php else: ?>

                <?php foreach ($offreJuridique as $Juridique): ?>

                    <div class="carousel">
                        <img src="../upload/<?php echo $Juridique['images'] ?>" alt="">
                        <p class="p">
                            <?php echo $Juridique['entreprise']; ?>
                            <img src="../image/coeurs.png" alt="">
                        </p>

                        <div class="box_vendu">
                            <div class="vendu">
                                <p>
                                    <?php echo ($Juridique['poste']); ?>
                                </p>
                            </div>
                        </div>

                        <p id="nom">
                            <?php echo $Juridique['date']; ?>
                        </p>

                        <a href="/page/profile_travailleur.php?id=<?php echo $Juridique['offre_id']; ?>">
                            <i class="fa-solid fa-eye"></i>Voir l'offre
                        </a>
                    </div>

                <?php endforeach ?>

            <?php endif; ?>
        </article>
    </section>









    <section class="produit_vedete">
        <div class="box1">
            <span></span>
            <h1>Informatique et tech </h1>
            <span></span>
            <div class="affiche">
                <!-- <img src="/image/ingenieur.jpeg" alt=""> -->
                <img src="/image/info.jpg" alt="">
            </div>
        </div>

        <div class="box2">
            <span><i class="fa-solid fa-chevron-left"></i></span>
            <span><i class="fa-solid fa-chevron-right"></i></span>
        </div>

        <article class="articles owl-carousel carousel7">
            <?php if (empty($offreInformatique)): ?>

                <h1 class="message">Aucune offre d'emploi n'est disponible pour cette catégorie</h1>

            <?php else: ?>

                <?php foreach ($offreInformatique as $Informatique): ?>

                    <div class="carousel">
                        <img src="../upload/<?php echo $Informatique['images'] ?>" alt="">
                        <p class="p" >
                            <?php echo $Informatique['competences']; ?>
                            <img src="../image/coeurs.png" alt="">
                        </p>
                        <div class="box_vendu">
                            <div class="vendu">
                                <p>
                                    <?php echo ($Informatique['poste']); ?>
                                </p>
                            </div>

                        </div>

                        <p id="nom">Nom:
                            <?php echo $Informatique['date']; ?>
                        </p>

                        <a href="/page/profile_travailleur.php?id=<?php echo $Informatique['id']; ?>">
                            <i class="fa-solid fa-eye"></i>Profil
                        </a>
                    </div>

                <?php endforeach ?>

            <?php endif; ?>
        </article>
    </section>










    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="/js/jquery-2.2.4.min.js"></script>
    <script src="/js/owl.carousel.min.js"></script>
    <script src="/js/owl.carousel.js"></script>
    <script src="/js/owl.animate.js"></script>
    <script src="/js/owl.autoplay.js"></script>
    <script src="/js/slider_users_owl_carousel.js"></script>




    <script>
        // ..
        AOS.init();

        // You can also pass an optional settings object
        // below listed default settings
        AOS.init({
            // Global settings:
            disable: false, // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
            startEvent: 'DOMContentLoaded', // name of the event dispatched on the document, that AOS should initialize on
            initClassName: 'aos-init', // class applied after initialization
            animatedClassName: 'aos-animate', // class applied on animation
            useClassNames: false, // if true, will add content of `data-aos` as classes on scroll
            disableMutationObserver: false, // disables automatic mutations' detections (advanced)
            debounceDelay: 50, // the delay on debounce used while resizing window (advanced)
            throttleDelay: 99, // the delay on throttle used while scrolling the page (advanced)


            // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
            offset: 120, // offset (in px) from the original trigger point
            delay: 0, // values from 0 to 3000, with step 50ms
            duration: 400, // values from 0 to 3000, with step 50ms
            easing: 'ease', // default easing for AOS animations
            once: false, // whether animation should happen only once - while scrolling down
            mirror: false, // whether elements should animate out while scrolling past them
            anchorPlacement: 'top-bottom', // defines which position of the element regarding to window should trigger the animation

        });
    </script>

    <script>
        $(document).ready(function () {

            $('.articles').slick({
                slidesToShow: 3,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 2000
            });

            // Réinitialiser Slick sur nouveaux éléments
            $('.slick').on('init', function (event, slick) {
                $('.slick').slick();
            });

        });
    </script>

</body>

</html>