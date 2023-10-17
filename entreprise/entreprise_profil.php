<?php
session_start();
include('../conn/conn.php');







include_once('app/controller/controllerEntreprise.php');
include_once('app/controller/controllerDescription.php');
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

    <link rel="stylesheet" href="/css/entreprise_profil.css">
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
                        <td id="td"><img src="../image/entreprise_ic.png" alt=""></td>
                        <td>mon entreprise</td>
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
                </table>
            </div>
        </div>
    </section>


    <section class="section3">

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

            <?php endif; ?>
        <?php endif; ?>

        <script>
            let success = document.querySelector('.success')
            setTimeout(() => {
                success.classList.add('visible')
            }, 200)
            setTimeout(() => {
                success.classList.remove('visible')
            }, 6000)

            let erreur = document.querySelector('.erreur')
            setTimeout(() => {
                erreur.classList.add('visible')
            }, 200)
            setTimeout(() => {
                erreur.classList.remove('visible')
            }, 6000)
        </script>
        <div class="container_box3">
            <div class="box1">
                <h2>Description !</h2>
               <?php if(isset(  $afficheDescriptionentreprise['descriptions'])) :?>
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
                            <textarea  name="descriptions" id="summernote" cols="30" rows="10">
                                <?php echo htmlspecialchars($afficheDescriptionentreprise['descriptions'], ENT_QUOTES,'UTF-8') ?>
                            </textarea>
                        </div>
                        <div class="div">
                            <label for="site">Avez vous un site web ?(facultatif*)</label>
                            <input type="text" name="liens" id="site" value="<?= $afficheDescriptionentreprise['liens']?>">
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
                        <label for="poste">Poste disponible</label>
                        <input type="text" name="poste" id="poste">
                    </div>
                    <div class="box">
                        <label for="mission">Decriver les missions et responsbiliter</label>
                        <textarea name="mission" id="mission" cols="30" rows="10"></textarea>
                    </div>
                    <div class="box">
                        <label for="profil">Decriver le profil rechercher (caliter et competance)</label>
                        <textarea name="profil" id="profil" cols="30" rows="10"></textarea>
                    </div>
                    <div class="box">
                        <label for="metier">Nom du metier</label>
                        <input type="text" name="metier" id="metier">
                    </div>
                    <div class="box">
                        <label for="contrat">Type de contrat</label>
                        <input type="text" name="contrat" id="contrat">
                    </div>
                    <div class="box">
                        <label for="etude">Niveau d'études </label>
                        <input type="text" name="etude" id="etude">
                    </div>

                    <div class="box">
                        <label for="experience">Niveau d'expérience </label>
                        <input type="text" name="experience" id="experience">
                    </div>
                    <div class="box">
                        <label for="localite">Region </label>
                        <input type="text" name="localite" id="localite">
                    </div>
                    <div class="box">
                        <label for="Langues">Langues exigées</label>
                        <input type="text" name="langues" id="Langues">
                    </div>

                    <input type="hidden" name="categorie">

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
                    <div class="carousel">
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


</body>

</html>