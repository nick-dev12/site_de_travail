<?php
session_start();


include_once('../controller/controller_postulation.php');


if (isset($_COOKIE['users_id'])) {
    $users_id = $_COOKIE['users_id'];
} else {
    $users_id = '';
}


// Récupérez l'ID du commerçant à partir de la session
// Récupérez l'ID de l'utilisateur depuis la variable de session
$users_id = $_SESSION['users_id'];

// Vous pouvez maintenant utiliser $commercant_id pour récupérer les informations de l'utilisateur depuis la base de données
// Écrivez votre requête SQL pour récupérer les informations nécessaires
$conn = "SELECT * FROM users WHERE id = :users_id";
$stmt = $db->prepare($conn);
$stmt->bindParam(':users_id', $users_id);
$stmt->execute();
$users = $stmt->fetch(PDO::FETCH_ASSOC);


// $sql = "SELECT metier FROM metier_users WHERE users_id = :users_id";
// $users_metier = $db->prepare($sql);
// $users_metier->bindParam(':users_id', $users_id);
// $users_metier->execute();


$erreurs = '';

$message = '';

include_once('../entreprise/app/controller/controllerOffre_emploi.php');
include_once('../controller/controller_users.php');
include_once('../entreprise/app/controller/controllerEntreprise.php');
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

    <title>Mes demandes</title>
    <link rel="stylesheet" href="../style/font-awesome.6.4.0.min.css">
    
    <script src="../script/jquery-3.6.0.min.js"></script>

    <script src="../script/summernote@0.8.18.js"></script>
    <link rel="stylesheet" href="../style/summernote@0.8.18.css">
   
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <link rel="stylesheet" href="../css/navbare.css">
    <link rel="stylesheet" href="../css/mes_demande.css">
    <link rel="stylesheet" href="/css/owl.carousel.css">
    <link rel="stylesheet" href="/css/owl.carousel.min.css">
</head>

<body>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5JBWCPV7"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

    <?php include('../navbare.php'); ?>


    <?php include('../include/header_users.php') ?>



    <section class="section3">

        <div class="box1">
            <h1>Bienvenu au centre de gestion des offres postuler !</h1>
            <div class="container_slider owl-carousel ">
                <img src="../image/gestion_off1.jpg" alt="">
                <img src="../image/gestion_off2.jpg" alt="">
                <img src="../image/GestionOffre.png" alt="">
            </div>
        </div>

        <div class="box2">
            <p> <span>1</span><strong>Suivi des candidatures :</strong>Gardez un œil sur toutes vos candidatures
                passées, que ce
                soit pour des offres acceptées, en attente, ou non retenues.
            </p>
            <p>
                <span>2</span><strong>Améliorez vos chances :</strong>Utilisez cette section pour évaluer votre succès
                dans les processus
                de candidature et optimiser votre recherche d'emploi.
            </p>
        </div>






        <div class="div-section3">
        <div class="box6">
            <h2>Suivi de candidatures</h2>
            <div class="container_accept">
            <?php if( empty($getPostulationUsers)): ?>
                    <p><strong>Info :</strong> aucune Candidatures trouver !!</p> 
                    <?php else: ?>
                <?php foreach ($getPostulationUsers as $postulationUsers): ?>
                    <?php $getOffreEmploie = getOffresEmploit($db,$postulationUsers['offre_id']);
                    $infoEntreprise = getEntreprise($db,$postulationUsers['entreprise_id'])
                    ?>

                    <div class="accept">
                        <?php if ($postulationUsers['statut'] == 'accepter'): ?>
                            <h5 class="h51">accepter</h5>
                        <?php else: ?>
                            <?php if ($postulationUsers['statut'] == 'recaler'): ?>
                                <h5 class="h52">recaler</h5>
                            <?php else: ?>
                                <h5 class="h53">traitement en cours </h5>
                            <?php endif; ?>
                        <?php endif; ?>
                        <img src="../upload/<?= $infoEntreprise['images'] ?>" alt="">
                        <h3><span>Poste :</span> <?= $postulationUsers['poste'] ?></h3>
                        <p><strong>Contrat :</strong>  <?= $getOffreEmploie['contrat'] ?> <span>...</span></p>
                        <p><strong>Niveau :</strong> <?= $getOffreEmploie['etudes'] ?> <span>...</span></p>
                        <p><strong>Localité : </strong> <?= $getOffreEmploie['localite'] ?> <span>...</span></p>
                        <?php if ($postulationUsers['statut'] == 'recaler'): ?>
                        <a class="cursor" href="../entreprise/voir_offre.php?id=<?= $postulationUsers['offre_id']; ?>"><img
                                src="../image/vue3.png" alt=""> Désactiver
                            </a>
                            <?php else: ?>
                                <a  href="../entreprise/voir_offre.php?id=<?= $postulationUsers['offre_id']; ?>"><img
                                src="../image/vue2.png" alt=""> Voir l'offre
                            </a>
                            <?php endif; ?>
                    </div>
                <?php endforeach; ?>
                <?php endif; ?>
            </div>

        </div>
    </div>

    </section>




    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="/js/owl.carousel.min.js"></script>
    <script src="/js/owl.carousel.js"></script>
    <script src="/js/owl.animate.js"></script>
    <script src="/js/owl.autoplay.js"></script>
 <script>
    $(document).ready(function () {

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