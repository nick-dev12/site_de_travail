<?php
// Démarre la session
session_start();
// Récupérez l'ID du commerçant à partir de la session
// Récupérez l'ID de l'utilisateur depuis la variable de session


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenu</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="../css/navbare.css">
    <link rel="stylesheet" href="/css/owl.carousel.css">
    <link rel="stylesheet" href="/css/animate.css">
    <link rel="stylesheet" href="/css/animate.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>

<body>

    <?php include('navbare.php') ?>


    <!-- menu carousel slider -->
    <div class="slider-area owl-carousel" data-aos="zoom-in">
        <div class="slider-item">
            <img src="/image/HR-technology-fotolia.jpg" alt="">
            <div class="box">
                <h1 data-aos="fade-up"> <span>Work</span><span>-Flexer</span> une platform de mise en relation </h1>
                <p data-aos="fade-up">La plateforme de professionnalisation qui relie entreprise , entrepreneur ,
                    travailleur et
                    étudiant
                    dans tous les Domaines confondu.
                </p>

                <a data-aos="fade-up" href="/inscription.php">Commencer</a>
            </div>
        </div>
        <div class="slider-item">
            <img src="/image/project-manager-vs-resource-manager-1-1200x385.jpg" alt="">
            <div class="box">
                <h1>Types de missions/projets </h1>
                <p>
                    création site internet, audit marketing, traduction, conseil
                    juridique...
                </p>
                <a href="/inscription.html">Commencer</a>
            </div>
        </div>
        <div class="slider-item">
            <img src="/image/Backgroudn-domaines-epita.jpg" alt="">
            <div class="box">
                <h1>Domaines d'expertise </h1>
                <p>
                    Informatique, Marketing, Finance, Ressources humaines, Droit, Ingénierie,...
                </p>
                <a href="/inscription.php">Commencer</a>
            </div>
        </div>
        <div class="slider-item">
            <img src="/image/duré.jpg" alt="">
            <div class="box">
                <h1>Durée des missions </h1>
                <p>
                    freelance court terme, long terme, temps plein...
                </p>
                <a href="/inscription.php">Commencer</a>
            </div>
        </div>
        <div class="slider-item">
            <img src="/image/Quand-la-participation.jpg" alt="">
            <div class="box">
                <h1>Gagnez plus en flexibilité</h1>
                <p>
                    devenez une source de productivité et augmenter vos benefices grace a notre référencement
                </p>
                <a href="/inscription.php">Commencer</a>
            </div>
        </div>
    </div>



    <section class="partie-box">
        <div class="box1">
            <h1>
                Trouvez le candidat idéal pour votre offre d'emploi
            </h1>
            <p>
                Work-Flexer est une plateforme qui permet aux recruteurs de
                trouver et de se connecter facilement avec des candidats qualifiés pour leurs offres d'emploi.
            </p>
            <a href="/inscription.php">Commencer des maintenant!</a>
            <div class="div4"></div>
        </div>
        <div class="box2">
            <img src="/image/rain_background.png" alt="" class="img1">
            <img src="/image/teste.png" alt="" class="img2">
        </div>
    </section>



    <div class="div-section">
        <section class="section3">
            <h1>Adoptez un ton affirmatif et confiant</h1>
            <div class="box1">
                <div class="p-style">
                    <span class="p1"></span>
                    <span class="p2">1</span>
                    <span class="p3"></span>
                </div>
                <div class="texte">
                    <h2>
                        Boostez votre productivité avec les freelances qu'il vous faut
                    </h2>
                    <p>
                        Grâce à Work-Flexer, accédez rapidement aux meilleurs profils de freelances correspondant à vos
                        besoins spécifiques.

                        Que vous ayez besoin d'un développeur logiciel, d'un designer UI/UX ou d'un spécialiste en
                        marketing, vous trouverez ici le talent adapté.

                        Notre moteur de recherche intelligent et nos critères de sélection pointus vous permettent de
                        filtrer les profils selon vos exigences.

                        Boostez ainsi vos projets en recrutant simplement le freelance parfait, avec les compétences et
                        l’expertise nécessaires pour vous accompagner.
                    </p>
                </div>
                <img src="/image/SEO-1.png" alt="">
            </div>
        </section>


        <section class="section3">
            <div class="box1">
                <div class="p-style">
                    <span class="p1"></span>
                    <span class="p2">2</span>
                    <span class="p3"></span>
                </div>
                <div class="texte">
                    <h2>
                        Recrutez en Toute Confiance avec Notre Plateforme de Recrutement
                    </h2>
                    <p>

                        Work-Flexer simplifie le processus de recrutement pour les entreprises
                        en leur permettant de publier des offres d'emploi en quelques clics. Découvrez
                        un vivier de candidats qualifiés et adaptez a votre entreprise et aux besoins
                        du marché en trouvant les meilleurs talents rapidement et
                        efficacement. La recherche de candidats exceptionnels n'a jamais été aussi facile.
                    </p>
                </div>
                <img src="/image/creation-site-1-600x511.png" alt="">
            </div>
        </section>


        <section class="section3">
            <div class="box1">
                <div class="p-style">
                    <span class="p1"></span>
                    <span class="p2">3</span>
                    <span class="p3"></span>
                </div>
                <div class="texte">
                    <h2>
                        Boostez Votre Carrière avec Notre Plateforme de Profils Professionnels
                    </h2>
                    <p>
                        Vous cherchez de nouvelles opportunités ? Donnez un coup de pouce à votre carrière
                        en créant un profil professionnel sur notre plateforme. Que vous soyez un
                        étudiant cherchant un stage, un professionnel en quête de nouvelles opportunités
                        ou un expert dans votre domaine, Work-Flexer vous offre la visibilité dont vous avez
                        besoin. Connectez-vous avec des recruteurs, développez votre réseau, et explorez un
                        monde d'opportunités professionnelles.
                    </p>

                    <a href="/inscription.php">Commencer</a>
                </div>
                <img src="/image/Performance-600x511.png" alt="">
            </div>
        </section>

    </div>

    <section class="temoin">
        <div class="box">
            <p>"Cette plateforme nous a aidé à trouver les candidats parfaits
                pour nos offres d'emploi. Fortement recommandé aux recruteurs."</p>
            <img src="/image/temoin.jpg" alt="">
        </div>
    </section>



    <section class="slider">

        <div class=" slider1  owl-carousel">

            <div class="item">
                <img src="/image/bouste.jpeg" alt="">
                <div class="effect">

                </div>
                <span class="formes1"></span>
                <span class="formes2"></span>
                <h2>Boostez votre carrière en créant votre profil en ligne</h2>
                <p>Augmentez votre visibilité auprès des recruteurs et mettez toutes les chances de votre côté pour
                    décrocher votre emploi idéal. En créant votre profil sur notre plateforme, vous pouvez mettre en
                    avant vos compétences et votre parcours.</p>

            </div>

            <div class="item">
                <img src="/image/recruter.png" alt="">
                <div class="effect">
                </div>
                <span class="formes1"></span>
                <span class="formes2"></span>
                <h2>Recrutez les meilleurs talents en quelques clics</h2>
                <p>Grâce à notre plateforme, publiez vos offres d'emploi et accédez à un vivier de candidats qualifiés
                    et motivés. Trouvez rapidement le profil idéal pour vos postes à pourvoir.</p>
            </div>

        </div>

    </section>

    <script>

    </script>

    <section class="explore">
        <div class="t1">
            <h1>Explorer les profiles qui vous conviennent</h1>
        </div>

        <div class="profil">
            <div class="owl-slider owl-carousel ">
                <div class="item">
                    <img src="/image/entreprise.jpg" alt="">
                    <h3>nick jomas effe</h3>
                    <p> developper web</p>
                </div>

                <div class="item">
                    <img src="/image/duré.jpg" alt="">
                    <h3>nick jomas effe</h3>
                    <p> developper web</p>
                </div>

                <div class="item">
                    <img src="/image/bg_bggenerator_com.jpg" alt="">
                    <h3>nick jomas effe</h3>
                    <p> developper web</p>
                </div>
            </div>
        </div>
    </section>

    <?php include('footer.php') ?>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/Flip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/Observer.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollToPlugin.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/Draggable.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/EaselPlugin.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/MotionPathPlugin.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/PixiPlugin.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/TextPlugin.min.js"></script>

    <!--
ScrollSmoother.min.js, InertiaPlugin.min.js, ScrambleTextPlugin.min.js, and SplitText.min.js are Club GreenSock perks which are not available on a CDN. Download them from your GreenSock account and include them locally like this:

<script src="/[YOUR_DIRECTORY]/ScrollSmoother.min.js"></script>
<script src="/[YOUR_DIRECTORY]/InertiaPlugin.min.js"></script>
<script src="/[YOUR_DIRECTORY]/ScrambleTextPlugin.min.js"></script>
<script src="/[YOUR_DIRECTORY]/SplitText.min.js"></script>

Sign up at https://greensock.com/club or try them for free on CodePen or CodeSandbox
-->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="/js/owl.carousel.min.js"></script>
    <script src="/js/owl.carousel.js"></script>
    <script src="/js/owl.animate.js"></script>
    <script src="/js/owl.autoplay.js"></script>


    <div></div>


    <script>
        $(document).ready(function () {


            $('.slider1 ').owlCarousel({
                items: 1,
                loop: true,
                autoplay: true,
                autoplayTimeout: 5000,
                stagePadding: 10,
                smartSpeed: 900,
                nav: true,
            });


            $('.owl-slider').owlCarousel({
                items: 3,
                loop: true,
                autoplay: true,
                animateOut: 'slideOutDown',
                animateIn: 'flipInX',
                autoplayTimeout: 5000,
                stagePadding: 10,
                smartSpeed: 600,
                nav: true,
            });

            // Animation GSA
            // Initialiser le carrousel 1 avec la portée appropriée
            $('.carousel1').owlCarousel({
                items: 5,
                loop: true,
                autoplay: true,
                autoplayTimeout: 6000,
                animateOut: 'slideOutDown',
                animateIn: 'flipInX',
                stagePadding: 10,
                smartSpeed: 450,
                margin: 10,
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


            $('.slider-area').owlCarousel({
                items: 1,
                loop: true,
                dots: true,
                autoplay: true,
                autoplayTimeout: 6000,
                animateOut: 'slideOutDown',
                animateIn: 'flipInX',
                smartSpeed: 600,
                stagePadding: 1,
                nav: true,
                navText: ['<i class="fa-solid fa-chevron-left"></i>', '<i class="fa-solid fa-chevron-right"></i>']
            });

            var carousel2 = $('.carousel1').owlCarousel();
            $('.owl-next2').click(function () {
                carousel2.trigger('next.owl.carousel');
            })
            $('.owl-prev2').click(function () {
                carousel2.trigger('prev.owl.carousel');
            })


        });
    </script>

    <script>
        // ..
        AOS.init();
    </script>
</body>

</html>