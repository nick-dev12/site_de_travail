<?php
session_start();
include('../conn/conn.php');

include_once('app/controller/controllerEntreprise.php');
include_once('app/controller/controllerDescription.php');
include_once('app/controller/controllerOffre_emploi.php');

include_once('../controller/controller_postulation.php');
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="/css/owl.carousel.css">
    <link rel="stylesheet" href="/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/mon_entreprise.css">
    <link rel="stylesheet" href="../css/navbare.css">
</head>

<body>
    <?php include('../navbare.php') ?>

    <section class="section2 ">
        <div class="slider owl-carousel">

            <img src="../image/cc1.webp" alt="">

            <img src="../image/cc3.jpg" alt="">

            <img src="../image/cc4.png" alt="">

            <img src="../image/cc5.jpeg" alt="">

        </div>

        <div class="box1">
            <h1>Bienvenu! au centre de discution de work-flexer</h1>
            <p>Ici vouz pourez discuter avec plusieur candidats, en particulier les ceux que vous avez retenu</p>
        </div>
    </section>





    <section class="section3">
        <div class="box3">
            <h2>Candidats retenu</h2>
            <?php foreach ($getALLpostulation as $postulant): ?>
                <?php if($postulant['statut']=='accepter'):?>
           <a href="message_entreprise.php?users_id=<?= $postulant['users_id']?>&offres_id=<?= $postulant['offre_id']?>&entreprise_id=<?= $postulant['entreprise_id']?>&statut=<?= $postulant['statut']?>">
           <div class="info" >
                <img src="../upload/<?php echo $postulant['images']?>" alt="">
                <div class="div" >
                    <h4><?= $postulant['nom']?></h4>
                    <p><?= $postulant['competences']?></p>
                </div>
            </div>
           </a>
            <?php endif;?>
            <?php endforeach; ?>
        </div>

        <div class="box2">
            <h2>Autres</h2>
            <div class="info" >
                <img src="../image/bg_bggenerator_com.jpg" alt="">
                <div class="div" >
                    <h4>oyono effe nick ludvanne</h4>
                    <p>developeur web</p>
                </div>
            </div>
        </div>
    </section>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="/js/owl.carousel.min.js"></script>
    <script src="/js/owl.carousel.js"></script>
    <script src="/js/owl.animate.js"></script>
    <script src="/js/owl.autoplay.js"></script>
</body>

<script>
    $(document).ready(function () {
        // Initialiser le carrousel 1 avec la portée appropriée
        $('.slider').owlCarousel({
            items: 1,
            loop: true,
            autoplay: true,
            animateOut: 'slideOutDown',
            animateIn: 'flipInX',
            stagePadding: 1,
            smartSpeed: 700,
            margin: 0,
            nav: true,
            navText: ['<i class="fa-solid fa-chevron-left"></i>', '<i class="fa-solid fa-chevron-right"></i>']
        });
        var carousel1 = $('.slider').owlCarousel();
        $('.owl-next').click(function () {
            carousel1.trigger('next.owl.carousel');
        })
        $('.owl-prev').click(function () {
            carousel1.trigger('prev.owl.carousel');
        })


    });
</script>

</html>