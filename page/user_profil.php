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
    include_once('../controller/controller_users.php');
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


    <link rel="stylesheet" href="/css/user_profil.css">
    <link rel="stylesheet" href="../css/navbare.css">

    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>

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
        <div class="container">
            <div class="box1">
                <?php if ($users['statut'] == 'Disponible'):?>
                <button class="statut occ"><?= $users['statut'] ?></button>
                <?php else: ?>
                    <?php if ($users['statut'] == 'Occuper'):?>
                <button class="statut disp"><?= $users['statut'] ?></button>
                <?php else: ?>
                    <button class="statut occ">Statut</button>
                <?php endif; ?>
                <?php endif; ?>
                <div class="div_statut">
                    <a class="disp" href="?occuper=<?= $users['id'] ?>">Occuper</a>
                    <a class=" occ" href="?disponible=<?= $users['id'] ?>">Disponible</a>
                </div>

                <script>
                    let statut = document.querySelector('.statut')
                    let div_statut = document.querySelector('.div_statut')

                    statut.addEventListener('click', () => {
                        if (div_statut.style.left === '-200%') {
                            div_statut.style.left = '0'
                        } else {
                            div_statut.style.left = '-200%'
                        }

                    })

                    // Ajouter un gestionnaire au clic n'importe où sur la page
                    document.addEventListener('click', (e) => {
                        // Vérifier que le clic ne vient pas du bouton
                        if (e.target !== statut) {
                            // Masquer la div
                            div_statut.style.left = '-200%'
                        }
                    });
                </script>


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
                        <td id="td"><img src="../image/MCV.png" alt=""></td>
                        <td> <a href="cv_users.php">mon cv</a></td>
                    </tr>

                    <tr>
                        <td id="td"><img src="../image/exp.png" alt=""></td>
                        <td>Mon experience</td>
                    </tr>
                    <tr>
                        <td id="td"><img src="../image/mpc.png" alt=""></td>
                        <td>Mon parcours</td>
                    </tr>
                    <tr>
                        <td id="td"><img src="../image/mct.png" alt=""></td>
                        <td>contacte</td>
                    </tr>
                    <tr>
                        <td id="td"> <a href="../page/mes_demande.php"><img src="../image/mdep.png" alt=""></a></td>
                        <td><a href="../page/mes_demande.php">Mes demandes d’emploies</a></td>
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
        <?php if (isset($_SESSION['compte_entreprise'])) : ?>
            <button class="contacte">Contacter ce candidat</button>

            <form action="" class="form_appel">
                <img class="fermer" src="../image/croix.png" alt="">
                <label for="message">Écrivez votre message ici</label>
                <textarea name="message" id="message" cols="30" rows="10"></textarea>
                <input type="submit" name="envoie" value="Envoyer">
            </form>

            <script>
                let contacte = document.querySelector('.contacte');
                let form_appel = document.querySelector('.form_appel');
                let fermer = document.querySelector('.fermer')

                contacte.addEventListener('click', () => {
                    if (form_appel.style.left = '160%') {
                        form_appel.style.left = '60%'
                    } else {
                        form_appel.style.left = '160%'
                    }

                    contacte.style.opacity = '0';
                })
                fermer.addEventListener('click', () => {
                    if (form_appel.style.left = '60%') {
                        form_appel.style.left = '160%'
                    } else {
                        form_appel.style.left = '60%'
                    }

                    contacte.style.opacity = '1';
                })
            </script>

        <?php endif; ?>

        <?php if (isset($_SESSION['success_message'])) : ?>
            <div class="message">
                <?php echo $_SESSION['success_message']; ?><i class="fa-solid fa-check fa-2xl"></i>
                <?php unset($_SESSION['success_message']); ?>
            </div>
        <?php else : ?>
            <?php if (isset($_SESSION['error_message'])) : ?>
                <div class="erreurs" id="messageErreur">
                    <?php echo $_SESSION['error_message']; ?>
                    <?php unset($_SESSION['error_message']); ?>
                </div>
            <?php endif; ?>
        <?php endif; ?>

        <script>
            let success = document.querySelector('.message')
            setTimeout(() => {
                success.classList.add('visible');
            }, 200);
            setTimeout(() => {
                success.classList.remove('visible');
            }, 6000);

            // Sélectionnez l'élément contenant le message d'erreur
            var messageErreur = document.getElementById('messageErreur');

            // Fonction pour afficher le message avec une transition de fondu
            setTimeout(function() {
                messageErreur.classList.add('visible');
            }, 200); // 1000 millisecondes équivalent à 1 seconde

            // Fonction pour masquer le message avec une transition de fondu
            setTimeout(function() {
                messageErreur.classList.remove('visible');
            }, 6000); // 6000 millisecondes équivalent à 6 secondes
        </script>



        <?php if (empty($competencesUtilisateur)) : ?>
            <?php if (isset($_SESSION['users_id'])) : ?>
                <div class="container_box0">
                    <h1> <span>Alerte :</span> <strong>veuillez ajouter au moins une competence pour être visible par les
                            recruteur</strong></h1>
                </div>
            <?php else : ?>
            <?php endif; ?>

        <?php endif; ?>


        <div class="container_box1" data-aos="fade-up" data-aos-delay="0" data-aos-duration="500" data-aos-easing="ease-in-out" data-aos-mirror="true" data-aos-once="false" data-aos-anchor-placement="top-bottom">
            <div class="box1">
                <h2>A propos de moi !</h2>

                <div class="description">
                    <?php
                    // Vérifier si la description de l'utilisateur est vide
                    if (empty($descriptions['description'])) :

                    ?>
                    <?php else : ?>
                        <?php echo $descriptions['description']; ?>
                    <?php endif; ?>

                </div>
                <?php
                // Vérifier si la description de l'utilisateur est vide
                if (empty($descriptions['description'])) :
                ?>
                    <?php if (isset($_SESSION['users_id'])) : ?>
                        <button class="buton">Ajouter une description</button>
                    <?php else : ?>
                    <?php endif; ?>


                    <div class="form_box">
                        <form method="post" action="" enctype="multipart/form-data">

                            <?php if (isset($erreurs)) : ?>
                                <div class="erreur">
                                    <?php echo $erreurs; ?>
                                </div>
                            <?php endif; ?>
                            <textarea name="description" id="summernote" cols="30" rows="10" placeholder="Ajoute une description ici"></textarea>

                            <input type="submit" value="ajouter" name="ajouter" id="ajoute">

                        </form>
                    </div>

                <?php else : ?>
                    <?php if (isset($_SESSION['users_id'])) : ?>
                        <button class="buton buttons">Modifier la description</button>
                    <?php else : ?>
                    <?php endif; ?>


                    <div class="form_box texte">
                        <form method="post" action="" enctype="multipart/form-data">

                            <textarea name="nouvelleDescription" id="summernote" cols="30" rows="10" placeholder="Ajoute une description ici">
                                     <?php echo htmlspecialchars($descriptions['description'], ENT_QUOTES, 'UTF-8'); ?>  
                                    </textarea>
                            <input type="submit" value="Modifier" name="Modifier" id="ajoute">
                        </form>
                    </div>

                <?php endif; ?>

                <script>
                    let buton = document.querySelector('.buton')
                    let form_box = document.querySelector('.form_box')

                    buton.addEventListener('click', function() {
                        if (form_box.style.display === 'none' || form_box.style.display === '') {
                            form_box.style.display = 'block';
                        } else {
                            form_box.style.display = 'none';
                        }
                    });

                    let button = document.querySelector('.buttons')
                    let texte = document.querySelector('.texte')

                    button.addEventListener('click', function() {
                        if (tetxe.style.display === 'none' || texte.style.display === '') {
                            texte.style.display = 'block';
                        } else {
                            texte.style.display = 'none';
                        }
                    });
                </script>
            </div>
        </div>





        <div class="container_box2" data-aos="fade-up" data-aos-delay="0" data-aos-duration="500" data-aos-easing="ease-in-out" data-aos-mirror="true" data-aos-once="false" data-aos-anchor-placement="top-bottom">
            <div class="box1">
                <h1>Expertise et compétences</h1>
            </div>
            <div class="box2">
                <h2>Experience professionnel</h2>
                <?php
                foreach ($afficheMetier as $metiers) :

                ?>
                    <div class="metier">
                        <table>
                            <tr>
                                <th>
                                    <p>
                                        <?php echo $metiers['metier']; ?>
                                    </p>
                                </th>
                                <td>
                                    <?php if (isset($_SESSION['users_id'])) : ?>
                                        <!-- Ajouter un lien de suppression -->
                                        <a class="delete" href="?supprimer=<?php echo $metiers['id']; ?>"><span class="span">x</span></a>
                                    <?php else : ?>
                                    <?php endif; ?>

                                </td>
                            </tr>
                        </table>
                        <table>
                            <tr>
                                <td class="date">
                                    <em>
                                        <?php echo $metiers['date1']; ?>
                                    </em>
                                </td>

                                <td class="date">
                                    <em>
                                        <?php echo $metiers['date2']; ?>
                                    </em>
                                </td>

                            </tr>
                        </table>

                        <table>
                            <tr>
                                <td id="td">
                                    <span>
                                        <?php echo $metiers['description']; ?>
                                    </span>
                                </td>

                            </tr>
                        </table>

                    </div>
                <?php
                endforeach;
                ?>
                <?php if (isset($_SESSION['users_id'])) : ?>
                    <button class="affiche_form">Ajouter une experience</button>
                <?php else : ?>
                <?php endif; ?>


                <form class="form" action="" method="post">
                    <div class="boxmetier">
                        <label for="metier">Nom de l'experience professionnel</label>
                        <input type="text" name="metier" id="metier">
                    </div>

                    <div class="boxmetier" id="dat">
                        <div>
                            <label for="date1">date de debut</label>
                            <div class="input-group date">
                                <input id="datee" name="date1" type="text" class="form-control" value="12-02-2012" width 200>
                            </div>
                        </div>
                        <div>
                            <label for="date2">date de fin</label>
                            <div class="input-group date">
                                <input id="datees" name="date2" type="text" class="form-control" value="12-02-2012" width 200>
                            </div>
                        </div>

                        <script>
                            $(document).ready(function() {
                                $('#datee').datepicker({
                                    format: 'dd/mm/yyyy', // Format de la date
                                    autoclose: true, // Fermer automatiquement le sélecteur après la sélection
                                    todayHighlight: true, // Mettre en surbrillance la date actuelle
                                    startDate: '01/01/2000', // Date de début
                                    endDate: '31/12/2030', // Date de fin
                                    language: 'fr' // Langue (français)
                                });
                            });
                            $(document).ready(function() {
                                $('#datees').datepicker({
                                    format: 'dd/mm/yyyy', // Format de la date
                                    autoclose: true, // Fermer automatiquement le sélecteur après la sélection
                                    todayHighlight: true, // Mettre en surbrillance la date actuelle
                                    startDate: '01/01/2000', // Date de début
                                    endDate: '31/12/2030', // Date de fin
                                    language: 'fr' // Langue (français)
                                });
                            });
                        </script>
                    </div>

                    <div class="boxmetier">
                        <label for="metier">ajouter une description : se n'est pas obligatoire</label>
                        <textarea name="Metierdescription" id="description" cols="30" rows="10">
                    </textarea>
                    </div>
                    <input type="submit" value="Ajouter" name="Ajouter" id="Ajouter">
                </form>

                <script>
                    let affiche_form = document.querySelector('.affiche_form')
                    let form = document.querySelector('.form')

                    affiche_form.addEventListener('click', function() {
                        if (form.style.display === 'none' || form.style.display === '') {
                            form.style.display = 'block';
                        } else {
                            form.style.display = 'none';
                        }
                    });
                </script>
            </div>

            <div class="box3">
                <h2>Compétences</h2>
                <div class="container_comp">


                    <?php
                    foreach ($competencesUtilisateur as $competence) :
                    ?>
                        <p>
                            <?php echo $competence['competence']; ?>
                            <a href="?supprime=<?php echo $competence['id']; ?>">x</a>
                        </p>




                    <?php
                    endforeach;
                    ?>
                </div>

                <?php if (isset($_SESSION['users_id'])) : ?>
                    <button class="affiche_forms">Ajouter une compétences</button>
                <?php else : ?>
                <?php endif; ?>

                <form class="forms" action="" method="post">
                    <input type="text" name="competence" id="competence">
                    <input type="submit" value="Ajouter" name="Ajouter1" id="Ajouter">
                </form>

                <script>
                    let affiche_forms = document.querySelector('.affiche_forms')
                    let forms = document.querySelector('.forms')

                    affiche_forms.addEventListener('click', function() {
                        if (forms.style.display === 'none' || forms.style.display === '') {
                            forms.style.display = 'block';
                        } else {
                            forms.style.display = 'none';
                        }
                    });
                </script>

            </div>
        </div>



        </div>



        <div class="container_box3" data-aos="fade-up" data-aos-delay="0" data-aos-duration="500" data-aos-easing="ease-in-out" data-aos-mirror="true" data-aos-once="false" data-aos-anchor-placement="top-bottom">

            <div class="box4">
                <h1>formation</h1>
            </div>
            <div class="box5">
                <table>

                    <tr>
                        <th>
                            Date
                        </th>
                        <th>
                            filière
                        </th>
                        <th>
                            établissement
                        </th>

                        <th class="grade">Grade</th>
                        <th class="supr">supr</th>
                    </tr>

                </table>

                <?php foreach ($formationUsers as $formations) : ?>
                    <table>

                        <tr>
                            <td class="pt">
                                <?php echo $formations['annee']; ?><br>
                                au <br>
                                <?php echo $formations['annees']; ?>

                            </td>

                            <td>
                                <?php echo $formations['Filiere']; ?>
                            </td>

                            <td>
                                <?php echo $formations['etablissement']; ?>
                            </td>

                            <td colspan="2" class="grade">
                                <?php echo $formations['niveau']; ?>
                            </td>
                            <td class="supr">
                                <?php if (isset($_SESSION['users_id'])) : ?>
                                    <a href="?supprimes=<?php echo $formations['id']; ?>">x</a>
                                <?php else : ?>
                                <?php endif; ?>

                            </td>
                        </tr>
                    </table>
                <?php endforeach; ?>
            </div>

            <div class="fa-formation">
                <?php if (isset($_SESSION['users_id'])) : ?>
                    <button class="Ajouters">Ajouter une formation</button>
                <?php else : ?>
                <?php endif; ?>

            </div>

            <div class="containne">
                <form class="formee" action="" method="post">

                    <div class="container_box">

                        <div class="box1">
                            <label for="annee">Année du debut </label>
                            <div class="input-group date">
                                <input id="date1" name="annee" type="text" class="form-control" value="12-02-2012" width 200>
                            </div>
                        </div>
                        <div class="box1">
                            <label for="annees">Année de la fin </label>
                            <div class="input-group date">
                                <input id="date2" name="annees" type="text" class="form-control" value="12-02-2012" width 200>
                            </div>
                        </div>
                    </div>
                    <div class="container_box">
                        <div class="box1">
                            <label for="Filiere">Filière/classe</label>
                            <input type="text" name="Filiere" id="Filiere">
                        </div>
                        <div class="box1">
                            <label for="etablissement">Établissement</label>
                            <input type="text" name="etablissement" id="etablissement">
                        </div>
                    </div>
                    <div class="container_box">
                        <div class="box1">
                            <label for="etablissement">Niveau</label>
                            <input type="text" name="niveau" id="niveau">
                        </div>
                        <div class="box1">
                            <input type="submit" value="ajouter" name="ajouter2" id="ajouter">
                        </div>
                    </div>

                </form>
            </div>
            <script>
                $(document).ready(function() {
                    $('#date1').datepicker({
                        format: 'dd/mm/yyyy', // Format de la date
                        autoclose: true, // Fermer automatiquement le sélecteur après la sélection
                        todayHighlight: true, // Mettre en surbrillance la date actuelle
                        startDate: '01/01/2000', // Date de début
                        endDate: '31/12/2030', // Date de fin
                        language: 'fr' // Langue (français)
                    });
                });
                $(document).ready(function() {
                    $('#date2').datepicker({
                        format: 'dd/mm/yyyy', // Format de la date
                        autoclose: true, // Fermer automatiquement le sélecteur après la sélection
                        todayHighlight: true, // Mettre en surbrillance la date actuelle
                        startDate: '01/01/2000', // Date de début
                        endDate: '31/12/2030', // Date de fin
                        language: 'fr' // Langue (français)
                    });
                });
            </script>

            <script>
                let Ajoutes = document.querySelector('.Ajouters')
                let formee = document.querySelector('.containne')

                Ajoutes.addEventListener('click', function() {
                    if (formee.style.display === 'none' || formee.style.display === '') {
                        formee.style.display = 'block';
                    } else {
                        formee.style.display = 'none';
                    }
                });
            </script>
        </div>


        <div class="container_box4" data-aos="fade-up" data-aos-delay="0" data-aos-duration="500" data-aos-easing="ease-in-out" data-aos-mirror="true" data-aos-once="false" data-aos-anchor-placement="top-bottom">
            <div class="box1">
                <div class="div">
                    <table>
                        <tr>
                            <th>Diplome</th>
                        </tr>
                    </table>
                    <div>
                        <?php foreach ($afficheDiplome as $diplomes) : ?>

                            <table>
                                <tr>
                                    <td>
                                        <?php echo $diplomes['diplome']; ?>
                                    </td>
                                </tr>
                            </table>
                        <?php endforeach; ?>
                    </div>

                </div>

                <div class="div">
                    <table>
                        <tr>
                            <th>Certificats</th>
                        </tr>
                    </table>
                    <div>
                        <?php foreach ($afficheCertificat as $certificats) : ?>
                            <table>
                                <tr>
                                    <td>
                                        <?php echo $certificats['certificat'] ?>
                                    </td>
                                </tr>
                            </table>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

            <div class="box2">
                <?php if (isset($_SESSION['users_id'])) : ?>
                    <button class="btn btn1"> ajouter un Diplôme</button>
                    <button class="btn btn2"> ajouter un certificat</button>
                <?php else : ?>
                <?php endif; ?>

            </div>


            <div class="box3 box31">
                <form action="" method="post">
                    <input type="text" name="diplome" id="diplome">
                    <input type="submit" value="ajouter" name="ajouteer1" id="ajouteer">
                </form>
            </div>
            <div class="box3 box32">
                <form action="" method="post">
                    <input type="text" name="certificat" id="diplome">
                    <input type="submit" value="ajouter" name="ajouteer2" id="ajouteer">
                </form>
            </div>


            <script>
                let btn1 = document.querySelector('.btn1')
                let box31 = document.querySelector('.box31')

                btn1.addEventListener('click', function() {
                    if (box31.style.display === 'none' || box31.style.display === '') {
                        box31.style.display = 'block';
                    } else {
                        box31.style.display = 'none';
                    }
                });

                let btn2 = document.querySelector('.btn2')
                let box32 = document.querySelector('.box32')

                btn2.addEventListener('click', function() {
                    if (box32.style.display === 'none' || box32.style.display === '') {
                        box32.style.display = 'block';
                    } else {
                        box32.style.display = 'none';
                    }
                });
            </script>

        </div>


        <div class="container_box7" data-aos="fade-up" data-aos-delay="0" data-aos-duration="500" data-aos-easing="ease-in-out" data-aos-mirror="true" data-aos-once="false" data-aos-anchor-placement="top-bottom">

            <div class="box1">
                <h1>Projets et réalisations</h1>
                <?php if (isset($_SESSION['users_id'])) : ?>
                    <button class="ajout">Ajouter un projet/réalisation</button>
                <?php else : ?>
                <?php endif; ?>

            </div>
            <div class="form_projet">

                <form action="" method="post" enctype="multipart/form-data">
                    <div class="box">
                        <label for="titre">Titre</label>
                        <input type="text" name="titre" id="titre">
                    </div>

                    <div class="box">
                        <label for="liens">Ajoute un lien </label>
                        <input type="text" name="liens" id="liens" value="http://www.">
                    </div>

                    <div class="box">
                        <label for="projetdescription">Description</label>
                        <textarea name="projetdescription" id="projetdescription" cols="30" rows="10"></textarea>
                    </div>

                    <div class="box">
                        <p>Ajoute une image de ton projet</p>
                        <div class="imageView">
                            <label class="label" for="images"> <img src="/image/galerie.jpg" alt=""></label>
                            <input type="file" name="images" id="images">
                            <img id="imagePreview" src="" alt="view">

                            <script>
                                // Récupérer l'élément input type file
                                const inputImage = document.getElementById('images');

                                // Écouter le changement de fichier sélectionné
                                inputImage.addEventListener('change', () => {

                                    // Récupérer le premier fichier sélectionné
                                    const file = inputImage.files[0];

                                    // Afficher l'aperçu dans l'élément img
                                    const previewImg = document.getElementById('imagePreview');
                                    previewImg.src = URL.createObjectURL(file);

                                });
                            </script>
                        </div>

                    </div>
                    <input type="submit" name="valider" value="Ajouter" id="ajouter">
                </form>

            </div>

            <script>
                let ajout = document.querySelector('.ajout')
                let form_projet = document.querySelector('.form_projet')

                ajout.addEventListener('click', function() {
                    if (form_projet.style.display === 'none' || form_projet.style.display === '') {
                        form_projet.style.display = 'block';
                    } else {
                        form_projet.style.display = 'none';
                    }
                });
            </script>
            <div class="box2">

                <?php foreach ($affichePojetUsers as $projets) : ?>

                    <div class="info_projet">
                        <h2>
                            <?php echo $projets['titre'] ?>
                        </h2>
                        <p>
                            <?php echo $projets['projetdescription'] ?>
                        </p>

                        <a href="<?php echo $projets['liens'] ?>">Click sur ce lien</a>

                        <img src="../upload/<?php echo $projets['images'] ?>" alt="">
                    </div>

                <?php endforeach; ?>


            </div>
        </div>




        <div class="container_box5" data-aos="fade-up" data-aos-delay="0" data-aos-duration="500" data-aos-easing="ease-in-out" data-aos-mirror="true" data-aos-once="false" data-aos-anchor-placement="top-bottom">
            <div class="box1">
                <h1>maîtrise des outils informatiques</h1>
            </div>

            <div class="box2">

                <table>
                    <?php foreach ($afficheOutil as $outils) : ?>
                        <tr>
                            <td>
                                <?php echo $outils['outil'] ?>
                            </td>
                            <td class="niveau">
                                <?php echo $outils['niveau'] ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </table>

                <div class="outil">
                    <?php if (isset($_SESSION['users_id'])) : ?>
                        <button class="btn3"> Ajouter un outil</button>
                    <?php else : ?>
                    <?php endif; ?>

                </div>
            </div>

            <div class="box3 box34">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="tcp">
                        <label for="outil">Ajouter un outil informatique</label>
                        <input type="text" name="outil" id="outil">
                    </div>

                    <div class="tcp">
                        <label for="niveau">Ajouter un niveau</label>
                        <select name="niveau" id="niveau">
                            <option value="Debutant">Debutant</option>
                            <option value="Intermediaire">Intermédiaire</option>
                            <option value="professionel">Professionnel</option>
                            <option value="Avencer">Avancer</option>
                        </select>
                        <input type="submit" value="ajouter" name="ajouts" id="ajout">
                    </div>

                </form>
            </div>

            <script>
                let btn3 = document.querySelector('.btn3')
                let box34 = document.querySelector('.box34')

                btn3.addEventListener('click', function() {
                    if (box34.style.display === 'none' || box34.style.display === '') {
                        box34.style.display = 'block';
                    } else {
                        box34.style.display = 'none';
                    }
                });
            </script>
        </div>








        <div class="container_box5" data-aos="fade-up" data-aos-delay="0" data-aos-duration="500" data-aos-easing="ease-in-out" data-aos-mirror="true" data-aos-once="false" data-aos-anchor-placement="top-bottom">
            <div class="box1">
                <h1>maitrise des langues</h1>
            </div>

            <div class="box2">
                <table>
                    <?php foreach ($afficheLangue as $langues) : ?>
                        <tr>
                            <td>
                                <?php echo $langues['langue']; ?>
                            </td>
                            <td class="niveau">
                                <?php echo $langues['niveau']; ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </table>
                <div class="outil">
                    <?php if (isset($_SESSION['users_id'])) : ?>
                        <button class="btn4"> Ajouter une langue</button>
                    <?php else : ?>
                    <?php endif; ?>

                </div>
            </div>

            <div class="box3 box35">
                <form action="" method="post">
                    <div class="tcp">
                        <label for="tangue">Ajouter une langue</label>
                        <input type="text" name="langue" id="langue">
                    </div>

                    <div class="tcp">
                        <label for="niveau">Ajouter un niveau</label>
                        <select name="niveau" id="niveau">
                            <option value="Debutant">Debutant</option>
                            <option value="Intermediaire">Intermédiaire</option>
                            <option value="professionel">Professionnel</option>
                            <option value="Avencer">Avancer</option>
                        </select>
                        <input type="submit" value="ajouter" name="ajoutss" id="ajout">
                    </div>

                </form>
            </div>

            <script>
                let btn4 = document.querySelector('.btn4')
                let box35 = document.querySelector('.box35')

                btn4.addEventListener('click', function() {
                    if (box35.style.display === 'none' || box35.style.display === '') {
                        box35.style.display = 'block';
                    } else {
                        box35.style.display = 'none';
                    }
                });
            </script>
        </div>



        <?php if (isset($_SESSION['users_id'])) : ?>
            <div class="container_box6" data-aos="fade-up" data-aos-delay="0" data-aos-duration="500" data-aos-easing="ease-in-out" data-aos-mirror="true" data-aos-once="false" data-aos-anchor-placement="top-bottom">
                <div class="box1">
                    <h1>Laisser moi un message</h1>
                </div>

                <div class="box2">
                    <form action="" method="post">
                        <textarea name="message" class="form-control" id="" cols="30" rows="10"></textarea>
                        <button type="submit">Envoyer</button>
                    </form>
                </div>
            </div>
        <?php else : ?>
        <?php endif; ?>


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

    <script>
        $(document).ready(function() {
            $('#summernote').summernote({
                placeholder: 'ajoute une description!!',
                tabsize: 6,
                height: 120,
                toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'underline', 'clear']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['table', ['table']],
                    ['insert', ['link', 'picture', 'video']],
                    ['view', ['fullscreen', 'codeview', 'help']]
                ]
            });
        });

        $(document).ready(function() {
            $('#description').summernote({
                placeholder: 'ajoute une description!!',
                tabsize: 6,
                height: 120,
                toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'underline', 'clear']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['table', ['table']],
                    ['insert', ['link', 'picture', 'video']],
                    ['view', ['fullscreen', 'codeview', 'help']]
                ]
            });
        });

        $(document).ready(function() {
            $('#projetdescription').summernote({
                placeholder: 'ajoute une description!!',
                tabsize: 6,
                height: 120,
                toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'underline', 'clear']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['table', ['table']],
                    ['insert', ['link', 'picture', 'video']],
                    ['view', ['fullscreen', 'codeview', 'help']]
                ]
            });
        });
    </script>

</body>

</html>