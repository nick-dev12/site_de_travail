<?php
// Démarre la session
session_start();
// Récupérez l'ID du commerçant à partir de la session
// Récupérez l'ID de l'utilisateur depuis la variable de session



include_once('../controller/controller_users.php')
    ?>






<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bienvenu</title>
    <link rel="stylesheet" href="/css/slick.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="/js/slick.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/voir_profil.css">
    <link rel="stylesheet" href="/css/owl.theme.default.css">
    <link rel="stylesheet" href="/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="/css/owl.carousel.css">
    <link rel="stylesheet" href="/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/css/animate.css">
    <link rel="stylesheet" href="/css/animate.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="../css/navbare.css">
</head>

<body>
    <?php  include('../navbare.php')?>

    <section class="section1">
        <div>
            <span>1</span>
            <p>Trouver rapidement les meilleurs talents qui correspondent à vos besoins</p>
        </div>
        <div>
            <span>2</span>
            <p>Un processus de recrutement freelance facile et sans prise de tête</p>
        </div>
        <div>
            <span>3</span>
            <p>Des profils hautement qualifiés et adaptables à vos projets</p>
        </div>
    </section>


    <section class="section2">
        <div class="slider">
            <div class="box">
                <div class="img owl-carousel boot">
                    <img src="/image/recherche.png" alt="">
                    <img src="/image/profile1.jpg" alt="">
                    <img src="/image/profile2.jpg" alt="">
                </div>
                <div class="text">
                    <h1 data-aos="fade-right" data-aos-delay="0" data-aos-duration="1000" data-aos-easing="ease-in-out"
                        data-aos-mirror="true" data-aos-once="false" data-aos-anchor-placement="top-right">Exploré les
                        profils qui conviennent à vos besoins</h1>
                    <p data-aos="fade-left" data-aos-delay="0" data-aos-duration="1000" data-aos-easing="ease-in-out"
                        data-aos-mirror="true" data-aos-once="false" data-aos-anchor-placement="top-right">
                        Un large éventail de profiles professionnels toute catégorie confondu pour satisfaire le
                        moindres de vos besoins en main d'œuvre et bien plus encore
                    </p>
                    <form data-aos="fade-left" data-aos-delay="500" data-aos-duration="1000"
                        data-aos-easing="ease-in-out" data-aos-mirror="true" data-aos-once="false"
                        data-aos-anchor-placement="top-right" action="" method="post">
                        <input type="search" name="" id="search">
                        <label for="recherche"><i class="fa-solid fa-magnifying-glass fa-xs"></i></label>
                        <input type="submit" value="recherche" id="recherche">
                    </form>
                </div>
            </div>

        </div>

    </section>

    <!-- <div class="affiche">
        <img src="/image/webdesign.jpg" alt="">
    </div> -->
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
            <?php if (empty($Usersingegneur)): ?>

                <h1 class="message">Aucun profil disponible pour cette categorie</h1>

            <?php else: ?>
                <?php foreach ($Usersingegneur as $ingenieurs): ?>
                    <div class="carousel">
                        <img src="../upload/<?php echo $ingenieurs['images'] ?>" alt="">
                        <p>
                            <?php echo $ingenieurs['competences']; ?><span>1</span>
                        </p>



                        <?php
                        // Les compétences sont stockées sous forme de chaîne concaténée, vous pouvez les séparer en un tableau avec explode
                        $competencees = explode(',', $ingenieurs['competencees']);
                        $counter = 0;
                        ?>

                        <?php foreach ($competencees as $competence): ?>

                            <?php
                            $counter++;
                            // Utilisez une autre requête SQL pour récupérer le nom de chaque compétence à partir de la table des compétences, en fonction de l'ID de la compétence
                            $sqlCompetence = "SELECT competence FROM competence_users WHERE id = :competenceId";
                            $stmtCompetence = $db->prepare($sqlCompetence);
                            $stmtCompetence->bindParam(':competenceId', $competence, PDO::PARAM_INT);
                            $stmtCompetence->execute();
                            $resultCompetence = $stmtCompetence->fetch(PDO::FETCH_ASSOC);

                            ?>

                            <div class="box_vendu">
                                <div class="vendu">

                                    <?php if ($counter === 1): ?>
                                        <span>
                                            <?php echo ($resultCompetence['competence']); ?>
                                        </span>
                                    <?php endif; ?>

                                    <?php if ($counter === 2): ?>
                                        <span>
                                            <?php echo ($resultCompetence['competence']); ?>
                                        </span>
                                    <?php endif; ?>

                                </div>

                            </div>
                        <?php endforeach ?>
                        <p id="nom">Nom:
                            <?php echo $ingenieurs['nom']; ?>
                        </p>

                        <a href="/page/user_profil.php?id=<?php echo $ingenieurs['id']; ?>">
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
            <?php if (empty($UsersDesign)): ?>

                <h1 class="message">Aucun profil disponible pour cette categorie</h1>

            <?php else: ?>

                <?php foreach ($UsersDesign as $Designs): ?>

                    <div class="carousel">
                        <img src="../upload/<?php echo $Designs['images'] ?>" alt="">
                        <p>
                            <?php echo $Designs['competences']; ?><span>1</span>
                        </p>



                        <?php
                        // Les compétences sont stockées sous forme de chaîne concaténée, vous pouvez les séparer en un tableau avec explode
                        $competencees = explode(',', $Designs['competencees']);
                        $counter = 0;
                        ?>

                        <?php foreach ($competencees as $competence): ?>

                            <?php if (empty($competence)): ?>

                                <h1 class="message">Aucun profil disponible pour cette categorie</h1>

                            <?php else: ?>
                                <?php
                                $counter++;
                                // Utilisez une autre requête SQL pour récupérer le nom de chaque compétence à partir de la table des compétences, en fonction de l'ID de la compétence
                                $sqlCompetence = "SELECT competence FROM competence_users WHERE id = :competenceId";
                                $stmtCompetence = $db->prepare($sqlCompetence);
                                $stmtCompetence->bindParam(':competenceId', $competence, PDO::PARAM_INT);
                                $stmtCompetence->execute();
                                $resultCompetence = $stmtCompetence->fetch(PDO::FETCH_ASSOC);

                                ?>

                                <div class="box_vendu">
                                    <div class="vendu">

                                        <?php if ($counter === 1): ?>
                                            <span>
                                                <?php echo ($resultCompetence['competence']); ?>
                                            </span>
                                        <?php endif; ?>

                                        <?php if ($counter === 2): ?>
                                            <span>
                                                <?php echo ($resultCompetence['competence']); ?>
                                            </span>
                                        <?php endif; ?>

                                    </div>

                                </div>
                            <?php endif; ?>
                        <?php endforeach ?>
                        <p id="nom">Nom:
                            <?php echo $Designs['nom']; ?>
                        </p>

                        <a href="/page/user_profil.php?id=<?php echo $Designs['id']; ?>">
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
            <?php if (empty($UsersRédaction)): ?>

                <h1 class="message">Aucun profil disponible pour cette categorie</h1>

            <?php else: ?>

                <?php foreach ($UsersRédaction as $Redaction): ?>

                    <div class="carousel">
                        <img src="../upload/<?php echo $Redaction['images'] ?>" alt="">
                        <p>
                            <?php echo $Redaction['competences']; ?><span>1</span>
                        </p>


                        <?php
                        // Les compétences sont stockées sous forme de chaîne concaténée, vous pouvez les séparer en un tableau avec explode
                        $competencees = explode(',', $Redaction['competencees']);
                        $counter = 0;
                        ?>

                        <?php foreach ($competencees as $competence): ?>

                            <?php
                            $counter++;
                            // Utilisez une autre requête SQL pour récupérer le nom de chaque compétence à partir de la table des compétences, en fonction de l'ID de la compétence
                            $sqlCompetence = "SELECT competence FROM competence_users WHERE id = :competenceId";
                            $stmtCompetence = $db->prepare($sqlCompetence);
                            $stmtCompetence->bindParam(':competenceId', $competence, PDO::PARAM_INT);
                            $stmtCompetence->execute();
                            $resultCompetence = $stmtCompetence->fetch(PDO::FETCH_ASSOC);

                            ?>

                            <div class="box_vendu">
                                <div class="vendu">

                                    <?php if ($counter === 1): ?>
                                        <span>
                                            <?php echo ($resultCompetence['competence']); ?>
                                        </span>
                                    <?php endif; ?>

                                    <?php if ($counter === 2): ?>
                                        <span>
                                            <?php echo ($resultCompetence['competence']); ?>
                                        </span>
                                    <?php endif; ?>

                                </div>

                            </div>
                        <?php endforeach ?>
                        <p id="nom">Nom:
                            <?php echo $Redaction['nom']; ?>
                        </p>

                        <a href="/page/user_profil.php?id=<?php echo $Redaction['id']; ?>">
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
            <?php if (empty($Usersmarketing)): ?>

                <h1 class="message">Aucun profil disponible pour cette categorie</h1>

            <?php else: ?>

                <?php foreach ($Usersmarketing as $marketing): ?>

                    <div class="carousel">
                        <img src="../upload/<?php echo $marketing['images'] ?>" alt="">
                        <p>
                            <?php echo $marketing['competences']; ?><span>1</span>
                        </p>


                        <?php
                        // Les compétences sont stockées sous forme de chaîne concaténée, vous pouvez les séparer en un tableau avec explode
                        $competencees = explode(',', $marketing['competencees']);
                        $counter = 0;
                        ?>

                        <?php foreach ($competencees as $competence): ?>

                            <?php
                            $counter++;
                            // Utilisez une autre requête SQL pour récupérer le nom de chaque compétence à partir de la table des compétences, en fonction de l'ID de la compétence
                            $sqlCompetence = "SELECT competence FROM competence_users WHERE id = :competenceId";
                            $stmtCompetence = $db->prepare($sqlCompetence);
                            $stmtCompetence->bindParam(':competenceId', $competence, PDO::PARAM_INT);
                            $stmtCompetence->execute();
                            $resultCompetence = $stmtCompetence->fetch(PDO::FETCH_ASSOC);

                            ?>

                            <div class="box_vendu">
                                <div class="vendu">

                                    <?php if ($counter === 1): ?>
                                        <span>
                                            <?php echo ($resultCompetence['competence']); ?>
                                        </span>
                                    <?php endif; ?>

                                    <?php if ($counter === 2): ?>
                                        <span>
                                            <?php echo ($resultCompetence['competence']); ?>
                                        </span>
                                    <?php endif; ?>

                                </div>

                            </div>
                        <?php endforeach ?>
                        <p id="nom">Nom:
                            <?php echo $marketing['nom']; ?>
                        </p>

                        <a href="/page/user_profil.php?id=<?php echo $marketing['id']; ?>">
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
            <?php if (empty($Usersbusiness)): ?>

                <h1 class="message">Aucun profil disponible pour cette categorie</h1>

            <?php else: ?>

                <?php foreach ($Usersbusiness as $business): ?>

                    <div class="carousel">
                        <img src="../upload/<?php echo $business['images'] ?>" alt="">
                        <p>
                            <?php echo $business['competences']; ?><span>1</span>
                        </p>

                        <?php
                        // Les compétences sont stockées sous forme de chaîne concaténée, vous pouvez les séparer en un tableau avec explode
                        $competencees = explode(',', $business['competencees']);
                        $counter = 0;
                        ?>

                        <?php foreach ($competencees as $competence): ?>

                            <?php
                            $counter++;
                            // Utilisez une autre requête SQL pour récupérer le nom de chaque compétence à partir de la table des compétences, en fonction de l'ID de la compétence
                            $sqlCompetence = "SELECT competence FROM competence_users WHERE id = :competenceId";
                            $stmtCompetence = $db->prepare($sqlCompetence);
                            $stmtCompetence->bindParam(':competenceId', $competence, PDO::PARAM_INT);
                            $stmtCompetence->execute();
                            $resultCompetence = $stmtCompetence->fetch(PDO::FETCH_ASSOC);

                            ?>

                            <div class="box_vendu">
                                <div class="vendu">

                                    <?php if ($counter === 1): ?>
                                        <span>
                                            <?php echo ($resultCompetence['competence']); ?>
                                        </span>
                                    <?php endif; ?>

                                    <?php if ($counter === 2): ?>
                                        <span>
                                            <?php echo ($resultCompetence['competence']); ?>
                                        </span>
                                    <?php endif; ?>

                                </div>

                            </div>
                        <?php endforeach ?>
                        <p id="nom">Nom:
                            <?php echo $business['nom']; ?>
                        </p>

                        <a href="/page/user_profil.php?id=<?php echo $business['id']; ?>">
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
            <?php if (empty($UsersJuridique)): ?>

                <h1 class="message">Aucun profil disponible pour cette categorie</h1>

            <?php else: ?>

                <?php foreach ($UsersJuridique as $Juridique): ?>

                    <div class="carousel">
                        <img src="../upload/<?php echo $Juridique['images'] ?>" alt="">
                        <p>
                            <?php echo $Juridique['competences']; ?><span>1</span>
                        </p>

                        <?php
                        // Les compétences sont stockées sous forme de chaîne concaténée, vous pouvez les séparer en un tableau avec explode
                        $competencees = explode(',', $Juridique['competencees']);
                        $counter = 0;
                        ?>

                        <?php foreach ($competencees as $competence): ?>

                            <?php
                            $counter++;
                            // Utilisez une autre requête SQL pour récupérer le nom de chaque compétence à partir de la table des compétences, en fonction de l'ID de la compétence
                            $sqlCompetence = "SELECT competence FROM competence_users WHERE id = :competenceId";
                            $stmtCompetence = $db->prepare($sqlCompetence);
                            $stmtCompetence->bindParam(':competenceId', $competence, PDO::PARAM_INT);
                            $stmtCompetence->execute();
                            $resultCompetence = $stmtCompetence->fetch(PDO::FETCH_ASSOC);

                            ?>

                            <div class="box_vendu">
                                <div class="vendu">

                                    <?php if ($counter === 1): ?>
                                        <span>
                                            <?php echo ($resultCompetence['competence']); ?>
                                        </span>
                                    <?php endif; ?>

                                    <?php if ($counter === 2): ?>
                                        <span>
                                            <?php echo ($resultCompetence['competence']); ?>
                                        </span>
                                    <?php endif; ?>

                                </div>

                            </div>
                        <?php endforeach ?>
                        <p id="nom">Nom:
                            <?php echo $Juridique['nom']; ?>
                        </p>

                        <a href="/page/user_profil.php?id=<?php echo $Juridique['id']; ?>">
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
            <?php if (empty($UsersInformatique)): ?>

                <h1 class="message">Aucun profil disponible pour cette catégorie</h1>

            <?php else: ?>

                <?php foreach ($UsersInformatique as $Informatique): ?>

                    <div class="carousel">


                        <img src="../upload/<?php echo $Informatique['images'] ?>" alt="">
                        <p>
                            <?php echo $Informatique['competences']; ?><span>1</span>
                        </p>


                        <?php
                        // Les compétences sont stockées sous forme de chaîne concaténée, vous pouvez les séparer en un tableau avec explode
                        $competencees = explode(',', $Informatique['competencees']);
                        $counter = 0;
                        ?>

                        <?php foreach ($competencees as $competence): ?>

                            <?php
                            $counter++;
                            // Utilisez une autre requête SQL pour récupérer le nom de chaque compétence à partir de la table des compétences, en fonction de l'ID de la compétence
                            $sqlCompetence = "SELECT competence FROM competence_users WHERE id = :competenceId";
                            $stmtCompetence = $db->prepare($sqlCompetence);
                            $stmtCompetence->bindParam(':competenceId', $competence, PDO::PARAM_INT);
                            $stmtCompetence->execute();
                            $resultCompetence = $stmtCompetence->fetch(PDO::FETCH_ASSOC);

                            ?>

                            <div class="box_vendu">
                                <div class="vendu">

                                    <?php if ($counter === 1): ?>
                                        <span>
                                            <?php echo ($resultCompetence['competence']); ?>
                                        </span>
                                    <?php endif; ?>

                                    <?php if ($counter === 2): ?>
                                        <span>
                                            <?php echo ($resultCompetence['competence']); ?>
                                        </span>
                                    <?php endif; ?>

                                </div>

                            </div>
                        <?php endforeach ?>
                        <p id="nom">Nom:
                            <?php echo $Informatique['nom']; ?>
                        </p>

                        <a href="/page/user_profil.php?id=<?php echo $Informatique['id']; ?>">
                            <i class="fa-solid fa-eye"></i>Profil
                        </a>
                    </div>

                <?php endforeach ?>

            <?php endif; ?>
        </article>
    </section>










    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
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

$(document).ready(function () {

   
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


    }),

    $(document).ready(function () {
        // Carrousel 3  
        var carousel2 = $('.carousel2');
        var numItems2 = carousel2.find('.carousel').length;
    
        if (numItems2 > 4) {
    
            // Initialiser Owl carousel2 si il y a plus de 4 éléments
            carousel2.owlCarousel({
                items: 5, // Limitez le nombre d'éléments à afficher à 5
                loop: true,
                autoplay: true,
                autoplayTimeout: 4000,
                animateOut: 'slideOutDown',
                animateIn: 'flipInX',
                stagePadding: 30,
                smartSpeed: 450,
                margin: 200,
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
        margin: 200,
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
    </script>

</body>

</html>