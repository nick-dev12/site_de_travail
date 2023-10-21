<?php
session_start();
include('../conn/conn.php');

include_once('app/controller/controllerEntreprise.php');
include_once('app/controller/controllerDescription.php');
include_once('app/controller/controllerOffre_emploi.php');
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

    <link rel="stylesheet" href="../css/navbare.css">
    <link rel="stylesheet" href="../css/mon_entreprise.css">
</head>

<body>
    <?php include('../navbare.php') ?>

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
            <p> <span>1</span><strong>Gérez vos candidatures :</strong> Suivez 
            facilement les postulants à vos offres d'emploi et simplifiez le processus de sélection
            </p>
            <p>
                <span>2</span><strong>Consultez vos candidats :</strong>Accédez 
                aux profils des personnes qui ont répondu à vos offres, explorez leurs compétences et expériences.
            </p>
        </div>
    </section>





    <section class="section2">
        <h2>Liste des candidatures</h2>

        <div class="container">
           
              
                                   
                                   

             
                    <div class="items">
                        
                        <h5 class="h51">accepter</h5>
                        
                    <h3> <span>POSTE :</span>
                      teste
                    </h3>
                    <img src="/image/entreprise.jpg" alt="">
                    <ul>
                        <li>
                            tesre
                        </li>
                        <li>
                          teste
                        </li>
                        <li>mes competences</li>
                        <li>profession</li>
                    </ul>

                    <div class="container-box_btn">
                        <button class="btn1"><img src="../image/vue2.png" alt=""> <a href="../page/user_profil.php">Voir le
                                profil</a></button>
                        <div class="box-btn">
                           
                               
                                <a class="btn2" href="">Accepter</a>
                           
                            
                            <form action="" method="post"> 
                                <input type="hidden" name="entreprise_id">
                                <input type="hidden" name="offre_id">
                                <input type="hidden" name="users_id">
                                <a class="btn3" href="">Recaler</a>
                            </form>

                        </div>
                    </div>
                </div>
                   
                                 
        </div>
    </section>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="/js/jquery-2.2.4.min.js"></script>
    <script src="/js/owl.carousel.min.js"></script>
    <script src="/js/owl.carousel.js"></script>
    <script src="/js/owl.animate.js"></script>
    <script src="/js/owl.autoplay.js"></script>
    <script src="/js/slider_users_owl_carousel.js"></script>
</body>

</html>