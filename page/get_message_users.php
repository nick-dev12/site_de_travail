<?php
session_start();
include '../conn/conn.php';

if (isset($_GET['id'])) {
    // Récupérez l'ID du commerçant à partir de la session
// Récupérez l'ID de l'utilisateur depuis la variable de session
    $users_id = $_GET['id'];

    // Vous pouvez maintenant utiliser $commercant_id pour récupérer les informations de l'utilisateur depuis la base de données
// Écrivez votre requête SQL pour récupérer les informations nécessaires
    $conn = "SELECT * FROM users WHERE id = :users_id";
    $stmt = $db->prepare($conn);
    $stmt->bindParam(':users_id', $users_id);
    $stmt->execute();
    $users = $stmt->fetch(PDO::FETCH_ASSOC);

    $erreurs = '';

    $message = '';


    include_once('../controller/controller_description_users.php');
    include_once('../controller/controller_metier_users.php');
    include_once('../controller/controller_competence_users.php');
    include_once('../controller/controller_formation_users.php');
    include_once('../controller/controller_diplome_users.php');
    include_once('../controller/controller_certificat_users.php');
    include_once('../controller/controller_outil_users.php');
    include_once('../controller/controller_langue_users.php');
    include_once('../controller/controller_projet_users.php');
} else {

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




    // Récupérez l'ID du commerçant à partir de la session
    // Récupérez l'ID de l'utilisateur depuis la variable de session

    // Récupérer l'id du métier à supprimer (via lien ou formulaire par exemple)


    include_once('../controller/controller_description_users.php');
    include_once('../controller/controller_metier_users.php');
    include_once('../controller/controller_competence_users.php');
    include_once('../controller/controller_formation_users.php');
    include_once('../controller/controller_diplome_users.php');
    include_once('../controller/controller_certificat_users.php');
    include_once('../controller/controller_outil_users.php');
    include_once('../controller/controller_langue_users.php');
    include_once('../controller/controller_projet_users.php');
    include_once('../controller/controller_postulation.php');
    include_once('../entreprise/app/controller/controllerEntreprise.php');
    include_once('../entreprise/app/controller/controllerOffre_emploi.php');
    include_once('../controller/controller_message1.php');
    include_once('../controller/controller_appel_offre.php');
}

?>






<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
    <link rel="stylesheet" href="../style/font-awesome.6.4.0.min.css">

    <link href="../style/bootstrap.3.4.1.css" rel="stylesheet">
    <script src="../script/jquery-3.6.0.min.js"></script>
    <script src="../script/bootstrap3.4.1.js"></script>

    <script src="../script/summernote@0.8.18.js"></script>
    <link rel="stylesheet" href="../style/summernote@0.8.18.css">


    <script src="../script/bootstrap-datepicker1.9.0.js"></script>
    <link rel="stylesheet" href="../style/bootstrap-datepicker1.9.0.css">


    <link rel="stylesheet" href="../css/message_entreprise.css">
    <link rel="stylesheet" href="../css/navbare.css">

    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>

</head>

<body>


    <?php include('../navbare.php') ?>



    <section class="section2">
        <div class="container">
            <div class="box1">
                <img class="affiche" src="/upload/<?= $users['images'] ?>" alt="">
                <span></span>
                <h2>
                    <?php echo $users['nom']; ?>
                </h2>
            </div>

            <div class="box2">
                <h3>
                    <?php echo $users['profession']; ?>
                </h3>
            </div>
            <div class="box3">
                <table>

                    <tr>
                        <td id="td"><img src="../image/MCV.png" alt=""></td>
                        <td> <a href="cv_users.php">mon cv</a></td>
                    </tr>

                    <tr>
                        <td id="td"><img src="../image/exp.png" alt=""></td>
                        <td>mon experience</td>
                    </tr>
                    <tr>
                        <td id="td"><img src="../image/mpc.png" alt=""></td>
                        <td>mon parcour</td>
                    </tr>
                    <tr>
                        <td id="td"><img src="../image/mct.png" alt=""></td>
                        <td>contacte</td>
                    </tr>
                    <tr>
                        <td id="td"> <a href="../page/mes_demande.php"><img src="../image/mdep.png" alt=""></a></td>
                        <td><a href="../page/mes_demande.php">Mes demandes d'emploit</a></td>
                    </tr>
                    <tr>
                        <td id="td"><a href="message.php"><img src="../image/modifier.png" alt=""></a></td>
                        <td> <a href="message_users.php">Message</a></td>
                    </tr>
                </table>
            </div>
        </div>
    </section>


    <section class="section3">

        <div class="container_profil">

            <div class="box3">
                <h2>Candidats retenu</h2>
                <?php foreach ($getPostulationUsers as $postulationUsers): ?>
                    <?php if ($postulationUsers['statut'] == 'accepter'): ?>
                        <?php $infoEntreprise = getEntreprise($db, $postulationUsers['entreprise_id']) ?>
                        <?php $afficheOffre = getOffresEmploit($db, $postulationUsers['offre_id']); ?>
                        <a
                            href="get_message_users.php?users_id=<?= $postulationUsers['users_id'] ?>&offres_id=<?= $postulationUsers['offre_id'] ?>&entreprise_id=<?= $postulationUsers['entreprise_id'] ?>&statut=<?= $postulationUsers['statut'] ?>">
                            <div class="info">
                                <img src="../upload/<?php echo $infoEntreprise['images'] ?>" alt="">
                                <div class="div">
                                    <h4>
                                        <?= $infoEntreprise['entreprise'] ?>
                                    </h4>
                                    <p> <strong>Competences:</strong>
                                        <?= $postulationUsers['competences'] ?>
                                    </p>
                                    <p><span class="span1"><strong>Offre postuler:</strong>
                                            <?= $afficheOffre['poste'] ?>
                                        </span> <span class="span2">
                                            <?= $afficheOffre['contrat'] ?>
                                        </span></p>
                                </div>
                            </div>
                        </a>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>

            <div class="box2">
                <h2>Appel d'offres</h2>
                <?php foreach ($getAllAppel_offre as $appel_offre): ?>
                    <?php $infoEntreprise = getEntreprise($db, $appel_offre['entreprise_id']) ?>
                    <a
                        href="get_message_users2.php?users_id=<?= $appel_offre['users_id'] ?>&entreprise_id=<?= $appel_offre['entreprise_id'] ?>">
                        <div class="info">
                            <img src="../upload/<?php echo $infoEntreprise['images'] ?>" alt="">
                            <div class="div">
                                <h4>
                                    <?= $infoEntreprise['nom'] ?>
                                </h4>
                                <p> <strong>Competences:</strong>
                                    <?= $infoEntreprise['entreprise'] ?>
                                </p>
                                <p><span class="span1"><strong>Sujet:</strong> Appelle d'offre </span> </p>
                            </div>
                        </div>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>


        <?php include('../include/affiche_message.php') ?>
    </section>


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



</body>

</html>