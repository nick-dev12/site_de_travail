<?php
// Démarre la session
session_start();

// Récupérez l'ID du commerçant à partir de la session
// Récupérez l'ID de l'utilisateur depuis la variable de session
$users_id = $_SESSION['users_id'];

// Vous pouvez maintenant utiliser $commercant_id pour récupérer les informations de l'utilisateur depuis la base de données
// Écrivez votre requête SQL pour récupérer les informations nécessaires

// Récupérez l'ID du commerçant à partir de la session
// Récupérez l'ID de l'utilisateur depuis la variable de session
include_once('../controller/controller_description_users.php');
include_once('../controller/controller_metier_users.php');
include_once('../controller/controller_competence_users.php');
include_once('../controller/controller_formation_users.php');
include_once('../controller/controller_diplome_users.php');
include_once('../controller/controller_certificat_users.php');
include_once('../controller/controller_outil_users.php');
include_once('../controller/controller_langue_users.php');
include_once('../controller/controller_projet_users.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style/font-awesome.6.4.0.min.css">
    <script src="../script/jquery-3.6.0.min.js"></script>
    <script src="../script/bootstrap3.4.1.js"></script>
    <link rel="stylesheet" href="../css/navbare.css">
    <link rel="stylesheet" href="../css/model1.css">
</head>

<body>



    <?php include('../navbare.php') ?>
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
        <div class="container_box1">
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
                    <?php echo $users['competences']; ?>
                </h3>
            </div>
            <div class="box3">
                <table>
                   
                        <tr>
                            <td><i class="fa-solid fa-briefcase"></i></td>
                            <td> <a href="cv_users.php">mon cv</a></td>
                        </tr>
                    
                    <tr>
                        <td><i class="fa-solid fa-clipboard"></i></td>
                        <td>mon experience</td>
                    </tr>
                    <tr>
                        <td><i class="fa-solid fa-school"></i></td>
                        <td>mon parcour</td>
                    </tr>
                    <tr>
                        <td><i class="fa-solid fa-phone"></i></td>
                        <td>contacte</td>
                    </tr>
                </table>
            </div>
        </div>
        </div>

        <div class="container_box2">
            <div class="box1">
                <h1>Mon Cv</h1>
            </div>
            <div class="box2">

                <div class="parte1">
                    <div class="pte1">
                        <img class="affiche" src="../upload/<?= $users['images'] ?>" alt="">
                    </div>
                    <div class="pte2" >
                        <h2><?= $users['nom'] ?></h2>
                        <h4>developpeur web</h4>
                        <div>
                            <table>
                                <tr>
                                    <td class="inc" ><img src="../image/icons8-gmail-48.png" alt=""></td>
                                    <td><?= $users['mail'] ?></td>
                                </tr>
                                <tr>
                                    <td class="inc"><img src="../image/phone.png" alt=""></td>
                                    <td><?= $users['phone'] ?></td>
                                </tr>
                                <tr>
                                    <td class="inc"><img src="../image/villeic.png" alt=""></td>
                                    <td><?= $users['ville'] ?></td>
                                </tr>
                                <tr>
                                    <td class="inc"><img src="../image/nationaliet.png" alt=""></td>
                                    <td>Gabonnais</td>
                                </tr>
                            </table>
                        </div>
                    </div>

                    <div class="pte3" >
                        <h2>langues <img src="../image/langue.png" alt=""></h2>
                        <div>
                            <table>
                            <?php foreach ($afficheLangue as $langues): ?>
                                <tr>
                                    <td class="lan" > <?php echo $langues['langue']; ?></td>
                                    <td class="niv" > <?php echo $langues['niveau']; ?></td>
                                </tr>
                                <?php endforeach; ?>
                                <tr>
                                    <td class="lan">inc</td>
                                    <td>mail</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                   

                    <div class="pte3" >
                        <h2>Diplome <img src="../image/diplome.png" alt=""></h2>
                        <div>
                            <p>diplome de droit publique</p>
                            <p>diplome de droit publique</p>
                            <p>diplome de droit publique</p>
                        </div>
                    </div>
                    <div class="pte3" >
                        <h2>Sertificat <img src="../image/diplome.png" alt=""></h2>
                        <div>
                            <p>diplome de droit publique</p>
                            <p>diplome de droit publique</p>
                            <p>diplome de droit publique</p>
                        </div>
                    </div>

                    <div class="pte3" >
                        <h2>Centre d'interet <img src="../image/loisir.png" alt=""></h2>
                        <div>
                            <table>
                                <tr>
                                    <td class="inc" >inc</td>
                                    <td>mail</td>
                                </tr>
                                <tr>
                                    <td class="inc">inc</td>
                                    <td>mail</td>
                                </tr>
                            </table>
                        </div>
                    </div>

                    <div class="pte3" >
                        <h2>reseaux social <img src="../image/social.png" alt=""></h2>
                        <div class="reseaux" >
                        <img src="../image/facebook.png" alt="">
                        <img src="../image/linkedin.png" alt="">
                        <img src="../image/tweeter.png" alt="">
                        <img src="../image/whatsapp.png" alt="">
                        </div>
                    </div>
                </div>




                <div class="parte2">
                    <div class="pat1" >
                        <h1>a propos de moi !</h1>
                    </div>

                    <div class="pat2" >
                        <p>En résumé, Tkinter pour des interfaces simples, PyQt pour des UIs plus sophistiquées, PyGame plus orienté jeu vidéo. Le choix dépend des besoins de l'application.
                        En résumé, Tkinter pour des interfaces simples, PyQt pour des UIs plus sophistiquées, PyGame plus orienté jeu vidéo. Le choix dépend des besoins de l'application.
                        </p>
                    </div>

                    <div class="exp" >
                        <div class="til1" >
                            <h1>Experience profetionnel</h1>
                        </div>
                        <div class="mes_exp" >

                            <div class="exp1" ></div>
                            <div class="exp2" >date</div>
                            <div class="exp3" >
                                <h2>
                                    technicien
                                </h2>
                                <p>
                                    klnohoiiftydytd pu0y9t u0y6r 0u9tdwrsf git[pkp 89sstyufup;jpu9fd6d pouytd iiuydtysd ioyoyt5 o9uppjfudd lhfydfd
                                </p>
                            </div>
                        </div>
                        <div class="mes_exp" >

                            <div class="exp1" ></div>

                            <div class="exp2" >date</div>

                            <div class="exp3" >
                                <h2>
                                    technicien
                                </h2>
                                <p>
                                    klnohoiiftydytd pu0y9t u0y6r 0u9tdwrsf git[pkp 89sstyufup;jpu9fd6d pouytd iiuydtysd ioyoyt5 o9uppjfudd lhfydfd
                                </p>
                            </div>
                        </div>
                        <div class="mes_exp" >

                            <div class="exp1" ></div>
                            <div class="exp2" >
                                <em>3 / 2023</em> <em> 9 / 2023</em>
                            </div>
                            <div class="exp3" >
                                <h2>
                                    technicien
                                </h2>
                                <p>
                                    klnohoiiftydytd pu0y9t u0y6r 0u9tdwrsf git[pkp 89sstyufup;jpu9fd6d pouytd iiuydtysd ioyoyt5 o9uppjfudd lhfydfd
                                </p>
                            </div>
                        </div>
                    </div>




                    <div class="exp" >
                        <div class="til1" >
                            <h1>formation et parcour</h1>
                        </div>
                        <div class="mes_exp" >

                            <div class="exp1" ></div>
                            <div class="exp2" >date</div>
                            <div class="exp3" >
                                <h2>
                                    technicien
                                </h2>
                                <h4>
                                    technicien
                                </h4>
                                <p>
                                    klnohoiiftydytd pu0y9t u0y6r 0u9tdwrsf git[pkp 89sstyufup;jpu9fd6d pouytd iiuydtysd ioyoyt5 o9uppjfudd lhfydfd
                                </p>
                            </div>
                        </div>
                        <div class="mes_exp" >

                            <div class="exp1" ></div>

                            <div class="exp2" >date</div>

                            <div class="exp3" >
                                <h2>
                                    technicien
                                </h2>
                                <h4>
                                    technicien
                                </h4>
                                <p>
                                    klnohoiiftydytd pu0y9t u0y6r 0u9tdwrsf git[pkp 89sstyufup;jpu9fd6d pouytd iiuydtysd ioyoyt5 o9uppjfudd lhfydfd
                                </p>
                            </div>
                        </div>
                        <div class="mes_exp" >

                            <div class="exp1" ></div>
                            <div class="exp2" >
                                <em>3 / 2023</em> <em> 9 / 2023</em>
                            </div>
                            <div class="exp3" >
                                <h2>
                                    technicien
                                </h2>
                                <h4>
                                    technicien
                                </h4>
                                <p>
                                    klnohoiiftydytd pu0y9t u0y6r 0u9tdwrsf git[pkp 89sstyufup;jpu9fd6d pouytd iiuydtysd ioyoyt5 o9uppjfudd lhfydfd
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="outils" >
                        <div class="out1" >
                            <h1>maitrise des outils informatique</h1>
                        </div>
                        <div class="out2" >
                            <table>
                                <tr>
                                    <td >words</td>
                                    <td><em>intermediaire</em></td>
                                </tr>
                                <tr>
                                    <td>words</td>
                                    <td><em>intermediaire</em></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

</body>

</html>