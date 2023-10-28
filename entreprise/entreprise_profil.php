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
    <title> <?= $getEntreprise['entreprise']; ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="/css/owl.carousel.css">
    <link rel="stylesheet" href="/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/css/entreprise_profil.css">
    <link rel="stylesheet" href="../css/navbare.css">
</head>

<body>
    <?php include('../navbare.php') ?>


    <section class="section2">
        <div class="container">
            <div class="box1">
                <img src="../upload/ <?= $getEntreprise['images']; ?>" alt="">
                <span></span>
                <h2>
                    <?= $getEntreprise['nom']; ?>
                </h2>
            </div>

            <div class="box2">
                <h3> <?= $getEntreprise['entreprise']; ?></h3>
            </div>
            <div class="box3">
                <table>

                    <tr>
                        <td id="td"><img src="../image/modifier.png" alt=""></td>
                        <td> <a href="cv_users.php">Modifier</a></td>
                    </tr>

                    <tr class="me" >
                        <td id="td"><a href="entreprise_profil.php"><img src="../image/entreprise_ic.png" alt=""></a></td>
                        <td><a href="entreprise_profil.php">Mon entreprise</a></td>
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


        <div class="section2-div ">
            <div class="slider1 owl-carousel">

                <img src="../image/cc1.webp" alt="">

                <img src="../image/cc3.jpg" alt="">

                <img src="../image/cc4.png" alt="">

                <img src="../image/cc5.jpeg" alt="">

            </div>

            <div class="box1">
                <h1>Bienvenue au Centre de Gestion des Offres et Appels d'Offre de Work-Flexer</h1>

                <p>
                    <span>
                    Nous sommes heureux de vous accueillir dans notre plateforme exclusive de gestion des offres et
                    appels d'offre. Work-Flexer, votre partenaire privilégié, met à votre disposition un outil de
                    gestion avancé pour simplifier le processus de recrutement et trouver les talents les plus qualifiés
                    pour votre organisation.
                    </span>
                </p>

            </div>
        </div>



        <?php if (isset($_SESSION['success_message'])): ?>
            <div class="success">
                <?php echo $_SESSION['success_message']; ?>
                <?php unset($_SESSION['success_message']); ?>
            </div>
        <?php else: ?>
            <?php if (isset($_SESSION['error_message'])): ?>
                <div class="erreur">
                    <?php echo $_SESSION['error_message']; ?>
                    <?php unset($_SESSION['error_message']); ?>
                </div>
            <?php else: ?>

                <?php if (isset($_SESSION['delete_message'])): ?>
                    <div class="delete">
                        <?php echo $_SESSION['delete_message']; ?>
                        <?php unset($_SESSION['delete_message']); ?>
                    </div>

                <?php endif; ?>
            <?php endif; ?>

        <?php endif; ?>

        <script>
            let success = document.querySelector('.success')
            setTimeout(() => {
                success.classList.add('visible')
            }, 200)
            setTimeout(() => {
                success.classList.remove('visible')
            }, 8000)

            let erreur = document.querySelector('.erreur')
            setTimeout(() => {
                erreur.classList.add('visible')
            }, 200)
            setTimeout(() => {
                erreur.classList.remove('visible')
            }, 8000)

            let delet = document.querySelector('.delete')
            setTimeout(() => {
                delet.classList.add('visiblee')
            }, 200)
            setTimeout(() => {
                delet.classList.remove('visiblee')
            }, 8000)
        </script>
        <div class="container_box3">
            <div class="box1">
                <h2>Description !</h2>
                <?php if (isset($afficheDescriptionentreprise['descriptions'])): ?>
                    <?= $afficheDescriptionentreprise['descriptions'] ?>
                <?php else: ?>
                    <p> Ajouter une description pour que votre entreprise soit connue </p>
                <?php endif; ?>
            </div>
            <?php if (isset($afficheDescriptionentreprise['descriptions'])): ?>
                <button class="btn1">Modifier</button>

                <div class="form_desc">
                    <form method="post" action="">
                        <div>
                            <textarea name="descriptions" id="summernote" cols="30" rows="10">
                                    <?php echo htmlspecialchars($afficheDescriptionentreprise['descriptions'], ENT_QUOTES, 'UTF-8') ?>
                                </textarea>
                        </div>
                        <div class="div">
                            <label for="site">Avez vous un site web ?(facultatif*)</label>
                            <input type="text" name="liens" id="site" value="<?= $afficheDescriptionentreprise['liens'] ?>">
                        </div>
                        <input type="submit" name="modifiers" value="Modifier" id="ajouter">
                    </form>
                </div>
            <?php else: ?>
                <button class="btn1">Ajouter une description</button>

                <div class="form_desc">
                    <form method="post" action="">
                        <div>
                            <textarea name="descriptions" id="summernote" cols="30" rows="10"></textarea>
                        </div>
                        <div class="div">
                            <label for="site">Avez vous un site web ?</label>
                            <input type="text" name="liens" id="site">
                        </div>
                        <input type="submit" name="ajouter" value="ajouter" id="ajouter">
                    </form>
                </div>
            <?php endif; ?>



            <script>
                let btn1 = document.querySelector('.btn1');
                let form_desc = document.querySelector('.form_desc');

                btn1.addEventListener('click', () => {

                    if (form_desc.style.height === '0px') {
                        form_desc.style.height = '350px'
                    } else {
                        form_desc.style.height = '0px'
                    }
                })


            </script>
        </div>

        <div class="container_box1">
            <div class="box1">
                <h1>Publier une offre!!</h1>
            </div>

            <div class="box2">
                <button class="btn2">Ajouter une offre</button>
            </div>
            <div class="form_off">
                <form method="post" action="">

                    <div class="box">
                        <label for="poste">Poste disponible :</label>
                        <input type="text" name="poste" id="poste" required placeholder="Exemple : Développeur web">
                    </div>
                    <div class="box">
                        <label for="mission">Décrivez les missions et responsabilités :</label>
                        <textarea name="mission" id="mission" cols="30" rows="10"></textarea>
                    </div>
                    <div class="box">
                        <label for="profil">Décrivez le profil recherché (qualités et competence) :</label>
                        <textarea name="profil" id="profil" cols="30" rows="10" required
                            placeholder="Décrivez le profil recherché, les qualités et compétences requises"></textarea>
                    </div>

                    <div class="box">
                        <label for="contrat">Type de contrat :</label>
                        <input type="text" name="contrat" id="contrat" required placeholder="Exemple : CDI, CDD, Stage">
                    </div>
                    <div class="box">
                        <label for="etude">Niveau d'études requis :</label>
                        <input type="text" name="etude" id="etude" required
                            placeholder="Exemple : Bac+5, Licence, etc.">
                    </div>

                    <div class="box">
                        <label for="experience">Niveau d'expérience requis :</label>
                        <input type="text" name="experience" id="experience" required
                            placeholder="Exemple : 2 ans, 5 ans, etc.">
                    </div>
                    <div class="box">
                        <label for="localite">Localité :</label>
                        <input type="text" name="localite" id="localite" required
                            placeholder="Exemple : Paris, Lyon, etc.">
                    </div>
                    <div class="box">
                        <label for="Langues">Langues exigées :</label>
                        <input type="text" name="langues" id="Langues" required
                            placeholder="Exemple : Français, Anglais, Espagnol">
                    </div>

                    <div class="box">
                        <label for="categorie">Secteur d'activité :</label>
                        <select id="categorie" name="categorie">
                            <option value="">Sélectionnez une catégorie</option>
                            <option value="Informatique">Informatique et tech</option>
                            <option value="design">Design et création</option>
                            <option value="Rédaction">Rédaction et traduction</option>
                            <option value="marketing">Marketing et communication</option>
                            <option value="business">Conseil et gestion d'entreprise</option>
                            <option value="Juridique">Juridique</option>
                            <option value="Ingénierie">Ingénierie et architecture</option>
                            <option value="autre">Autre</option>
                        </select>
                    </div>

                    <input type="submit" name="publier" value="publier" id="valider">
                </form>
            </div>

            <script>
                let btn2 = document.querySelector('.btn2')
                let form_off = document.querySelector('.form_off')

                btn2.addEventListener('click', () => {
                    if (form_off.style.height === '0px') {
                        form_off.style.height = '1300px'
                    } else {
                        form_off.style.height = '0px'
                    }
                })
            </script>
        </div>


        <div class="container_box2">
            <div class="box1">
                <h1>mes offres</h1>
            </div>

            <div class="box2">
                <?php foreach ($afficheOffreEmplois as $offres): ?>

                    <?php $countOffre = countOffre($db, $offres['entreprise_id'], $offres['offre_id']); ?>
                    <div class="carousel">
                        <div class="vue">
                            <img src="../image/vue.png" alt="">
                            <span>
                                <?= $countOffre ?>
                            </span>
                        </div>

                        <a class="suprimer" href="?offre_id=<?= $offres['offre_id']; ?>"> Supprimer</a>

                        <img src="../upload/<?= $offres['images'] ?> " alt="">
                        <div class="p">
                            <p>
                                <?= $offres['entreprise'] ?>
                            </p>
                            <img class="img" src="../image/coeurs.png" alt="">
                        </div>

                        <div class="vendu">
                            <p>nous recherchons un
                                <?= $offres['poste'] ?>
                            </p>
                        </div>
                        <p id="nom">
                            <?= $offres['date'] ?>
                        </p>
                        <a class="liens" href="../entreprise/updat_offre.php?id=<?= $offres['offre_id'] ?>"><i
                                class="fa-solid fa-eye"></i></span>Voir l'offre</a>
                    </div>

                <?php endforeach; ?>


            </div>
        </div>


        <div class="container_box6">
            <div class="box1">
                <h1>Laisser moi un message</h1>
            </div>

            <div class="box2">
                <form action="" method="post">
                    <textarea name="message" id="message" cols="30" rows="10"></textarea>
                    <button type="submit">Envoyer</button>
                </form>
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
                    ['view', ['fullscreen', 'codeview', 'help']]
                ]
            });
        });

        $(document).ready(function () {
            $('#mission').summernote({
                placeholder: 'ajoute une description!!',
                tabsize: 6,
                height: 120,
                toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'underline', 'clear']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['table', ['table']],
                    ['view', ['fullscreen', 'codeview', 'help']]
                ]
            });
        });

        $(document).ready(function () {
            $('#profil').summernote({
                placeholder: 'ajoute une description!!',
                tabsize: 6,
                height: 120,
                toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'underline', 'clear']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['table', ['table']],
                    ['view', ['fullscreen', 'codeview', 'help']]
                ]
            });
        });


    </script>

    <script>
        $(document).ready(function () {
            // Initialiser le carrousel 1 avec la portée appropriée
            $('.slider1').owlCarousel({
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



</body>

</html>