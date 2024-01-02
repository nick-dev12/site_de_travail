<?php
// Démarre la session
session_start();
// Récupérez l'ID du commerçant à partir de la session
// Récupérez l'ID de l'utilisateur depuis la variable de session

include_once('controller/controller_users.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5JBWCPV7');</script>
<!-- End Google Tag Manager -->

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

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5JBWCPV7"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

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


<section class="box-section" >


    <section class="partie-box1">
        <div class="box2">
            <img src="/image/profile1.jpg" alt="">
        </div>
        <div class="box1">
            <h2>"Construisez votre histoire professionnelle avec un profil et un CV virtuels à la pointe de l'innovation."</h2>
        </div>
        
    </section>

    <section class="partie-box2">
       
        <div class="box2">
            <img src="/image/bg_bggenerator_com.jpg" alt="">
        </div>
         <div class="box1">
            <h2>"Élargissez vos horizons professionnels avec Work-Flexer, une vision audacieuse qui redéfinit la flexibilité au travail."</h2>
        </div>
    </section>
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
                
                <div class="container">
                <div class="texte">
                    <h2>
                        Boostez votre productivité avec les freelances qu'il vous faut
                    </h2>
                    <p>
                    Découvrez les meilleurs freelances avec Work-Flexer ! 
                    Trouvez rapidement le talent idéal pour vos projets, 
                    que ce soit un développeur, un designer ou un expert en 
                    marketing. Utilisez notre moteur de recherche intelligent pour des résultats précis. 
                    Boostez vos projets en recrutant simplement le freelance parfait.
                    </p>
                </div>
                <img src="/image/SEO-1.png" alt="">
                </div>
               
            </div>
        </section>


        <section class="section3">
            <div class="box1">
                <div class="p-style">
                    <span class="p1"></span>
                    <span class="p2">2</span>
                    <span class="p3"></span>
                </div>

                <div class="container">
                <div class="texte">
                    <h2>
                        Recrutez en Toute Confiance avec Notre Plateforme de Recrutement
                    </h2>
                    <p>
                    Simplifiez votre recrutement avec Work-Flexer ! Publiez vos offres 
                    d'emploi en quelques clics, découvrez des candidats qualifiés qui 
                    correspondent à votre entreprise et aux exigences du marché. Trouvez 
                    les meilleurs talents rapidement et efficacement. 
                    La recherche de candidats exceptionnels n'a jamais été aussi simple.
                    </p>
                </div>
                <img src="/image/creation-site-1-600x511.png" alt="">
                </div>
                
            </div>
        </section>


        <section class="section3">
            <div class="box1">
                <div class="p-style">
                    <span class="p1"></span>
                    <span class="p2">3</span>
                    <span class="p3"></span>
                </div>

                <div class="container">
                <div class="texte">
                    <h2>
                        Boostez Votre Carrière avec Notre Plateforme de Profils Professionnels
                    </h2>
                    <p>
                    Élevez votre carrière avec Work-Flexer ! Créez votre profil pro, 
                    connectez-vous avec des recruteurs, et explorez 
                    un monde d'opportunités uniques. Transformez votre avenir dès maintenant !
                    </p>

                    <a href="/inscription.php">Commencer</a>
                </div>
                <img src="/image/Performance-600x511.png" alt="">
                </div>
                
            </div>
        </section>

    </div>


    <section class="box-section3">
        <div class="box1">
            <h2>Pour les Professionnels</h2>
            <p>Découvrez Work-Flexer, la plateforme révolutionnaire qui élargit vos perspectives professionnelles 
                en redéfinissant la flexibilité au travail. Notre vision audacieuse transcende les limites 
                traditionnelles en offrant un espace où les professionnels peuvent non seulement rechercher 
                des opportunités d'emploi, mais également créer des profils et des CV virtuels dynamiques qui 
                racontent leur histoire de manière percutante.
            </p>
        </div>
        <span>
            
        </span>
        <div class="box1">
            <h2>Pour les Recruteurs</h2>
            <p>Bienvenue sur Work-Flexer, la plateforme qui réinvente le recrutement pour les professionnels 
                visionnaires. Créez, publiez et gérez vos offres d'emploi de manière simple et efficace. Notre 
                interface intuitive offre des outils puissants pour cibler les talents, gérer les candidatures 
                en toute fluidité, et interagir sans effort avec les candidats.
            </p>
        </div>
    </section>

    <section class="temoin" >
        <div class="box">
            <span>"</span>
            <p>Cette plateforme nous a aidé à trouver les candidats parfaits
                pour nos offres d'emploi. Fortement recommandé aux recruteurs.</p>
            <img class="img" src="/image/temoin.jpg" alt="">
        </div>

        <div class="box">
            <span>"</span>
            <p>Cette plateforme nous a aidé à trouver les candidats parfaits
                pour nos offres d'emploi. Fortement recommandé aux recruteurs.</p>
            <img class="img" src="/image/temoin.jpg" alt="">
        </div>

        <div class="box">
            <span>"</span>
            <p>Cette plateforme nous a aidé à trouver les candidats parfaits
                pour nos offres d'emploi. Fortement recommandé aux recruteurs.</p>
            <img class="img" src="/image/temoin.jpg" alt="">
        </div>

        <div class="box">
            <span>"</span>
            <p>Cette plateforme nous a aidé à trouver les candidats parfaits
                pour nos offres d'emploi. Fortement recommandé aux recruteurs.</p>
            <img class="img" src="/image/temoin.jpg" alt="">
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
                <?php foreach($totalUsers as $user): ?>
                    <div class="item">
                    <a href="/page/candidats.php?id=<?= $user['id'] ?>">
                    <img src="/upload/<?= $user['images']; ?>" alt="">
                    <h3><?= $user['nom']; ?></h3>
                    <p> <?= $user['competences']; ?> </p>
                </a>
                </div>
                <?php endforeach; ?>
                
            </div>
        </div>
    </section>

    <?php include('footer.php') ?>



    

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
   
</script>
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
            });

            


            // Sélectionnez la section avec la classe "temoin"

            var sectionTemoin = document.querySelector('.temoin');

// Vérifiez si la section existe
if (sectionTemoin) {
    // Obtenez la liste des éléments enfants de la section
    var enfantsSection = sectionTemoin.children;

    // Vérifiez la condition du nombre d'éléments enfants
    if (enfantsSection.length > 3) {
        // Code à exécuter si le nombre d'éléments enfants est supérieur à 3
        $('.temoin').addClass('owl-carousel').owlCarousel({
            items: 4,
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

        // Code pour gérer la navigation du carousel
        var carousel1 = $('.temoin').owlCarousel();
        $('.owl-next').click(function () {
            carousel1.trigger('next.owl.carousel');
        })
        $('.owl-prev').click(function () {
            carousel1.trigger('prev.owl.carousel');
        });
    } else {
        // Code à exécuter si le nombre d'éléments enfants est inférieur ou égal à 3
        console.log("Le nombre d'éléments enfants est inférieur ou égal à 3. Ne faites rien.");
    }
} else {
    console.error("La section avec la classe 'temoin' n'a pas été trouvée.");
}


           


            $('.slider-area').owlCarousel({
                items: 1,
                loop: true,
                dots: true,
                autoplay: true,
                autoplayTimeout: 6000,
                animateOut: 'slideOutDown',
                animateIn: 'flipInX',
                smartSpeed: 900,
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
            });


        });



        $(document).ready(function () {

             // Carrousel 3  
             var carousel5 = $('.owl-slider');
            var numItems2 = carousel5.find('.carousel').length;

            if (numItems2 > 2) {

                // Initialiser Owl carousel5 si il y a plus de 4 éléments
                carousel5.owlCarousel({
                    items: 5, // Limitez le nombre d'éléments à afficher à 5
                    loop: true,
                    autoplay: true,
                    autoplayTimeout: 3000,
                    animateOut: 'slideOutDown',
                    animateIn: 'flipInX',
                    stagePadding: 30,
                    smartSpeed: 450,
                    margin: 200,
                    nav: true,
                    navText: ['<i class="fa-solid fa-chevron-left"></i>', '<i class="fa-solid fa-chevron-right"></i>']
                });

                var carousel5 = $('.owl-slider').owlCarousel();
                $('.owl-next').click(function() {
                    carousel5.trigger('next.owl.carousel');
                })
                $('.owl-prev').click(function() {
                    carousel5.trigger('prev.owl.carousel');
                })



            } else {

                carousel5.trigger('destroy.owl.carousel');
                carousel5.removeClass('owl-carousel owl-loaded');
                carousel5.find('.owl-stage-outer').children().unwrap();

            }



        });



        
            
    </script>

    <script>
        // ..
        AOS.init();
    </script>
</body>

</html>