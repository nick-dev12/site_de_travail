<?php

session_start();
include('../conn/conn.php');

include_once('app/controller/controllerEntreprise.php');
include_once('app/controller/controllerDescription.php');
include_once('app/controller/controllerOffre_emploi.php');
include_once('../controller/controller_postulation.php');
include_once('../controller/controller_users.php');
include_once('../controller/controller_message1.php');
include_once('../controller/controller_appel_offre.php');
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>

    <link rel="stylesheet" href="../css/message.css">
    <link rel="stylesheet" href="../css/navbare.css">
</head>

<body>
    <?php include('../navbare.php') ?>


    <section class="section2">
        <div class="container">
            <div class="box1">
                <img src="/image/offre-emploi-quebec.jpg" alt="">
                <span></span>
                <h2>
                    <?= $getEntreprise['nom']; ?>
                </h2>
            </div>

            <div class="box2">
                <h3>Groupe Keren</h3>
            </div>
            <div class="box3">
                <table>

                    <tr>
                        <td id="td"><img src="../image/modifier.png" alt=""></td>
                        <td> <a href="cv_users.php">modifier</a></td>
                    </tr>

                    <tr>
                        <td id="td"><a href="mon_entreprise.php"><img src="../image/entreprise_ic.png" alt=""></a></td>
                        <td><a href="mon_entreprise.php">mon entreprise</a></td>
                    </tr>
                    <tr>
                        <td id="td"><img src="../image/candidat.png" alt=""></td>
                        <td><a href="../page/candidature.php">Candidats</a></td>
                    </tr>
                    <tr>
                        <td id="td"><img src="../image/stat.png" alt=""></td>
                        <td>statistique</td>
                    </tr>
                    <tr>
                        <td id="td"><img src="../image/contacts-48.png" alt=""></td>
                        <td>contacte</td>
                    </tr>
                    <tr>
                        <td id="td"><a href="message.php"><img src="../image/modifier.png" alt=""></a></td>
                        <td> <a href="message.php">Message</a></td>
                    </tr>

                </table>
            </div>
        </div>
    </section>

    <section class="section3">

    <div class="container_profil">

    <div class="box3">
            <h2>Candidats retenu</h2>
            <?php foreach ($getALLpostulation as $postulant): ?>
                <?php if($postulant['statut']=='accepter'):?>
                    <?php $getoffre =getOffresEmploit($db,$postulant['offre_id']);?>
                    <a href="message_entreprise.php?users_id=<?= $postulant['users_id']?>&offres_id=<?= $postulant['offre_id']?>&entreprise_id=<?= $postulant['entreprise_id']?>&statut=<?= $postulant['statut']?>">
           <div class="info" >
                <img src="../upload/<?php echo $postulant['images']?>" alt="">
                <div class="div" >
                    <h4><?= $postulant['nom']?></h4>
                    <p> <strong>Competences:</strong> <?= $postulant['competences']?></p>
                    <p><span class="span1" ><strong>Offre postuler:</strong> <?= $postulant['poste']?></span> <span class="span2" ><?= $getoffre['contrat']?></span></p>
                </div>
            </div>
           </a>
            <?php endif;?>
            <?php endforeach; ?>
        </div>

        <div class="box2">
            <h2>Appel d'offres </h2>
            <?php foreach($getAllAppel_offre as $appel_offre): ?>
                <?php $infoUsers =getInfoUsers($db,$appel_offre['users_id']) ?>
                <a href="message_entreprise2.php?users_id=<?= $appel_offre['users_id']?>&entreprise_id=<?=$appel_offre['entreprise_id']?>">
            <div class="info">
            <img src="../upload/<?php echo $infoUsers['images']?>" alt="">
                <div class="div" >
                <h4><?= $infoUsers['nom']?></h4>
                    <p> <strong>Competences:</strong> <?= $infoUsers['competences']?></p>
                    <p><span class="span1" ><strong>Sujet:</strong> Appelle d'offre </span> </p>
                </div>
            </div>
        </a>
            <?php endforeach; ?>
        </div>
    </div>


        </div>
    </section>