<?php
session_start();

include_once('../controller/controller_postulation.php');
include_once('../controller/controller_accepte_candidats.php');
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="../script/jquery-3.6.0.min.js"></script>
    <link href="../style/bootstrap.3.4.1.css" rel="stylesheet">
    <link rel="stylesheet" href="../style/summernote@0.8.18.css">
    <link rel="stylesheet" href="../css/navbare.css">
    <link rel="stylesheet" href="../css/candidature.css">
    <link rel="stylesheet" href="/css/owl.carousel.css">
    <link rel="stylesheet" href="/css/owl.carousel.min.css">
</head>

<body>
    <?php
    include('../navbare.php')
        ?>

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
            <?php foreach ($getALLpostulation as $postulant): ?>
                <?php if($postulant['statut']=='accepter'):?>
                    <?php else: ?>
                        <?php if($postulant['statut']=='recaler'):?>

                            <?php else: ?>

                                <?php if(empty($postulant['statut']== '')  ):?>
                                   
                                    <h6>accune candidature a traiter pour le moment!</h6>

                <?php else: ?>
                    <div class="items">
                        <?php if($postulant['statut']=='accepter'):?>
                        <h5 class="h51">accepter</h5>
                        <?php else: ?>
                            <?php if($postulant['statut']=='recaler'):?>
                                <h5 class="h52">recaler</h5>
                                <?php else: ?>
                                    <h5 class="h53">non traiter</h5>
                                <?php endif; ?>
                        <?php endif; ?>
                    <h3> <span>POSTE :</span>
                        <?= $postulant['poste'] ?>
                    </h3>
                    <img src="/image/entreprise.jpg" alt="">
                    <ul>
                        <li>
                            <?= $postulant['nom'] ?>
                        </li>
                        <li>
                            <?= $postulant['mail'] ?>
                        </li>
                        <li>mes competences</li>
                        <li>profession</li>
                    </ul>

                    <div class="container-box_btn">
                        <button class="btn1"><img src="../image/vue2.png" alt=""> <a href="../page/user_profil.php?id=<?= $postulant['users_id'] ?>">Voir le
                                profil</a></button>
                        <div class="box-btn">
                           
                               
                                <a class="btn2" href="?accepter=<?= $postulant['poste_id'] ?>">Accepter</a>
                           
                            
                            <form action="" method="post"> 
                                <input type="hidden" name="entreprise_id">
                                <input type="hidden" name="offre_id">
                                <input type="hidden" name="users_id">
                                <a class="btn3" href="?recaler=<?= $postulant['poste_id'] ?>">Recaler</a>
                            </form>

                        </div>
                    </div>
                </div>
                   
                                    <?php endif; ?>
                               
                            <?php endif; ?>
               
                <?php endif; ?>
              
            <?php endforeach; ?>
        </div>
    </section>


    <section class="section2">
        <h2>Candidatures traiter </h2>

        <h4>Candidatures accepter</h4>
        <div class="container">
            <?php foreach ($getALLpostulation as $postulant): ?>
                <?php if($postulant['statut']=='accepter'):?>
                   
                                    <div class="items">
                        <h5 class="h51">accepter</h5>
                        
                    <h3> <span>POSTE :</span>
                        <?= $postulant['poste'] ?>
                    </h3>
                    <img src="/image/entreprise.jpg" alt="">
                    <ul>
                        <li>
                            <?= $postulant['nom'] ?>
                        </li>
                        <li>
                            <?= $postulant['mail'] ?>
                        </li>
                        <li>mes competences</li>
                        <li>profession</li>
                    </ul>

                    <div class="container-box_btn">
                        <button class="btn1"><img src="../image/vue2.png" alt=""> <a href="../page/user_profil.php?id=<?= $postulant['users_id'] ?>">Voir le
                                profil</a></button>
                        <div class="box-btn">
                           
                               
                                <a class="btn2" href="?accepter=<?= $postulant['poste_id'] ?>">Accepter</a>
                           
                            
                            <form action="" method="post"> 
                                <input type="hidden" name="entreprise_id">
                                <input type="hidden" name="offre_id">
                                <input type="hidden" name="users_id">
                                <a class="btn3" href="?recaler=<?= $postulant['poste_id'] ?>">Recaler</a>
                            </form>

                        </div>
                    </div>
                </div>
                <?php endif; ?>
            <?php endforeach; ?>
          
        </div>
    </section>

    <section class="section2">

        <h4  class="h4" >Candidatures recaler</h4>
        <div class="container">
            <?php foreach ($getALLpostulation as $postulant): ?>
                <?php if($postulant['statut']=='recaler'):?>
                   
                                    <div class="items">
                        <h5 class="h52">recaler</h5>
                        
                    <h3> <span>POSTE :</span>
                        <?= $postulant['poste'] ?>
                    </h3>
                    <img src="/image/entreprise.jpg" alt="">
                    <ul>
                        <li>
                            <?= $postulant['nom'] ?>
                        </li>
                        <li>
                            <?= $postulant['mail'] ?>
                        </li>
                        <li>mes competences</li>
                        <li>profession</li>
                    </ul>

                    <div class="container-box_btn">
                        <button class="btn1"><img src="../image/vue2.png" alt=""> <a href="../page/user_profil.php?id=<?= $postulant['users_id'] ?>">Voir le
                                profil</a></button>
                        <div class="box-btn">
                           
                               
                                <a class="btn2" href="?accepter=<?= $postulant['poste_id'] ?>">Accepter</a>
                           
                            
                            <form action="" method="post"> 
                                <input type="hidden" name="entreprise_id">
                                <input type="hidden" name="offre_id">
                                <input type="hidden" name="users_id">
                                <a class="btn3" href="?recaler=<?= $postulant['poste_id'] ?>">Recaler</a>
                            </form>

                        </div>
                    </div>
                </div>
                <?php endif; ?>
            <?php endforeach; ?>
          
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