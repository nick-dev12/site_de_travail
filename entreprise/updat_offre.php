<?php
session_start();

if(isset($_GET['id'])){
    $offre_id = $_GET['id'] ;
}else{
    header('Location: ../entreprise/entreprise_profil.php');
}

include_once('app/controller/controllerOffre_emploi.php');
include_once('app/controller/controllerEntreprise.php');
include_once('app/controller/controllerDescription.php');

$Offres =getOffres($db, $offre_id );
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

 <script src="../script/jquery-3.6.0.min.js"></script>
    <link href="../style/bootstrap.3.4.1.css" rel="stylesheet">
    <link rel="stylesheet" href="../style/summernote@0.8.18.css">
    <title>offre d'emploi</title>
    <link rel="stylesheet" href="../css/navbare.css">
    <link rel="stylesheet" href="../css/voir_offre.css">
    
</head>
<body>

<?php include('../navbare.php') ?>



<section class="section2">
        <div class="box1">
            <h1>Info de l'Entreprise</h1>

            <table>
                <tr>
                    <th>NOM</th>
                    <td><?= $getEntreprise['entreprise'] ?></td>
                </tr>
                <tr>
                    <th>site internet</th>
                    <?php if($afficheDescriptionentreprise):?>
                        <td><a href="<?= $afficheDescriptionentreprise['liens'] ?>"><?= $afficheDescriptionentreprise['liens'] ?></a></td>
                    <?php else: ?>
                        <td>Aucun lien pour cette entreprise</td>
                    <?php endif; ?>
                </tr>
                <tr>
                    <th>secteur d'activiter</th>
                    <td><?= $getEntreprise['categorie'] ?></td>
                </tr>

                <tr>
                    <th>description de l'Entreprise</th>
                    <?php if($afficheDescriptionentreprise):?>
                    <td><?= $afficheDescriptionentreprise['descriptions'] ?></td>
                    <?php else: ?>
                        <td>Aucune description pour cette entreprise</td>
                    <?php endif; ?>

                </tr>
            </table>
        </div>
    </section>



    <section class="section3">
        <?php if($Offres): ?>
        <div class="box1">
            <h1>détaille de l'offre</h1>
            <h2>poste disponible : <span><?= $Offres['poste'] ?></span></h2>

            <h3>Mission et responsabilités</h3>

            <?= $Offres['mission'] ?>

            <h3>profil rechercher (qualités et competence) </h3>

            <?= $Offres['profil'] ?>

            <h1 class="suplement">Info supplémentaire</h1>


            <table>
                <tr>
                    <th>Métier :</th>
                    <td> <?= $Offres['metier'] ?></td>
                </tr>
                <tr>
                    <th>Type de contrat :</th>
                    <td> <?= $Offres['contrat'] ?></td>
                </tr>
                <tr>
                    <th>Région :</th>
                    <td> <?= $Offres['localite'] ?></td>
                </tr>

                <tr>
                    <th>Ville :</th>
                    <td><?=$getEntreprise['ville']?></td>
                </tr>

                <tr>
                    <th>Niveau d'expérience :</th>
                    <td> <?= $Offres['experience'] ?></td>
                </tr>
                <tr>
                    <th>Niveau d'études :</th>
                    <td> <?= $Offres['etudes'] ?></td>
                </tr>
                <tr>
                    <th>Langues exigées :</th>
                    <td> <?= $Offres['langues'] ?></td>
                </tr>
            </table>

            <button class="btn2" > modifier l'offre </button>
            
        </div>

        <div class="container-b" >
            <img class="img1" src="../image/croix.png" alt="">
            <div class="form_off">
                <form method="post" action="">
                    <div class="box">
                        <label for="poste">Poste disponible</label>
                        <input type="text" name="poste" id="poste" value="<?= $Offres['poste'] ?>" >
                    </div>
                    <div class="box">
                        <label for="mission">décrivez les missions et responsabilités</label>
                        <textarea name="mission" id="mission" cols="30" rows="10"><?= htmlentities($Offres['mission']) ?></textarea>
                    </div>
                    <div class="box">
                        <label for="profil">décrivez le profil rechercher (qualités et competence)</label>
                        <textarea name="profil" id="profil" cols="30" rows="10"><?= $Offres['profil'] ?></textarea>
                    </div>
                    <div class="box">
                        <label for="metier">metier de l'offre</label>
                        <input type="text" name="metier" id="metier" value="<?= $Offres['metier'] ?>" >
                    </div>
                    <div class="box">
                        <label for="contrat">Type de contrat</label>
                        <input type="text" name="contrat" id="contrat" value="<?= $Offres['contrat'] ?>" >
                    </div>
                    <div class="box">
                        <label for="etude">Niveau d'études </label>
                        <input type="text" name="etude" id="etude" value="<?= $Offres['etudes'] ?>" >
                    </div>
                   
                    <div class="box">
                        <label for="experience">Niveau d'expérience </label>
                        <input type="text" name="experience" id="experience" value="<?= $Offres['experience'] ?>" >
                    </div>
                    <div class="box">
                        <label for="localite">region </label>
                        <input type="text" name="localite" id="localite" value="<?= $Offres['localite'] ?>" >
                    </div>
                    <div class="box">
                        <label for="Langues">Langues exigées</label>
                        <input type="text" name="langues" id="Langues" value="<?= $Offres['langues'] ?>" >
                    </div>

                    <input type="submit" name="modifier" value="modifier" id="valider">
                </form>
            </div>
            </div>

        <?php endif; ?>



       
    </section>


    <!-- <section class="section4">
        <div class="box1">
            <h1>voir plus d'offre de cette categorie</h1>


            <div class="box2">
                <span><i class="fa-solid fa-chevron-left"></i></span>
                <span><i class="fa-solid fa-chevron-right"></i></span>
            </div>
    
            <article class="articles owl-carousel carousel1">
                <div class="carousel">
                    <img src="/profils/preview_B0eCXi7.jpeg" alt="">
                    <p>informaticien de getion des affaires applique <span>1</span></p>
                    <div class="vendu">
                        <p>nous recherchons un personnels califier pour povoir nous aider dans </p>
                    </div>
                    <p id="nom">12 juillet 2023</p>
                    <a href="#"><i class="fa-solid fa-eye"></i></span>Profil</a>
                </div>
    
                <div class="carousel">
                    <img src="/profils/p1.jpeg" alt="">
                    <p>logistique<span>0</span></p>
                    <div class="vendu">
                        <span>html</span>
                        <span>css</span>
                        <span>java script</span>
                        <span>html</span>
                        <span>css</span>
                        <span>java script</span>
                    </div>
                    <p id="nom">t-shirt hummel</p>
                    <a href="#"><i class="fa-solid fa-eye"></i></span>Profil</a>
                </div>
    
                <div class="carousel">
                    <img src="/profils/p2.jpg" alt="">
                    <p>agronome<span>o</span></p>
                    <div class="vendu">
                        <span>css</span>
                        <span>java script</span>
                        <span>html</span>
                        <span>css</span>
                        <span>java script</span>
                    </div>
                    <p id="nom">Nom: Sylivin</p>
                    <a href="#"><i class="fa-solid fa-eye"></i></span>Profil</a>
                </div>
    
                <div class="carousel">
                    <img src="/profils/p3.jpeg" alt="">
                    <p>proffesseur de mathematique<span>0</span></p>
                    <div class="vendu">
                        <span>html</span>
                        <span>css</span>
                        <span>html</span>
                        <span>css</span>
                        <span>java script</span>
                    </div>
                    <p id="nom">Nom: pricil</p>
                    <a href="#"><i class="fa-solid fa-eye"></i></span>Profil</a>
                </div>
    
                <div class="carousel">
                    <img src="/profils/p4.jpeg" alt="">
                    <p>architecture<span>0</span></p>
                    <div class="vendu">
                        <span>html</span>
                        <span>css</span>
                        <span>java script</span>
                        <span>html</span>
                    </div>
                    <p id="nom">Nom: Sylivin</p>
                    <a href="#"><i class="fa-solid fa-eye"></i></span>Profil</a>
                </div>
    
                <div class="carousel">
                    <img src="/profils/p5.avif " alt="">
                    <p>disiner<span>0</span></p>
                    <div class="vendu">
                        <span>html</span>
                        <span>css</span>
                        <span>java script</span>
                        <span>html</span>
                        <span>css</span>
                        <span>java script</span>
                    </div>
                    <p id="nom">Nom: nike</p>
                    <a href="#"><i class="fa-solid fa-eye"></i></span>Profil</a>
                </div>
            </article>
        </div>
    </section> -->


    <!-- <section class="produit_vedete">
        <div class="box1">
            <span></span>
            <h1>voir plus d'offre de cette categorie</h1>
            <span></span>
        </div>

        <div class="box2">
            <span><i class="fa-solid fa-chevron-left"></i></span>
            <span><i class="fa-solid fa-chevron-right"></i></span>
        </div>

        <article class="articles owl-carousel carousel1">
            <div class="carousel">
                <img src="/profils/preview_B0eCXi7.jpeg" alt="">
                <p>informaticien de getion des affaires applique <span>1</span></p>
                <div class="vendu">
                    <p>nous recherchons un personnels califier pour povoir nous aider dans </p>
                </div>
                <p id="nom">12 juillet 2023</p>
                <a href="#"><i class="fa-solid fa-eye"></i></span>Profil</a>
            </div>

            <div class="carousel">
                <img src="/profils/p1.jpeg" alt="">
                <p>logistique<span>0</span></p>
                <div class="vendu">
                    <span>html</span>
                    <span>css</span>
                    <span>java script</span>
                    <span>html</span>
                    <span>css</span>
                    <span>java script</span>
                </div>
                <p id="nom">t-shirt hummel</p>
                <a href="#"><i class="fa-solid fa-eye"></i></span>Profil</a>
            </div>

            <div class="carousel">
                <img src="/profils/p2.jpg" alt="">
                <p>agronome<span>o</span></p>
                <div class="vendu">
                    <span>css</span>
                    <span>java script</span>
                    <span>html</span>
                    <span>css</span>
                    <span>java script</span>
                </div>
                <p id="nom">Nom: Sylivin</p>
                <a href="#"><i class="fa-solid fa-eye"></i></span>Profil</a>
            </div>

            <div class="carousel">
                <img src="/profils/p3.jpeg" alt="">
                <p>proffesseur de mathematique<span>0</span></p>
                <div class="vendu">
                    <span>html</span>
                    <span>css</span>
                    <span>html</span>
                    <span>css</span>
                    <span>java script</span>
                </div>
                <p id="nom">Nom: pricil</p>
                <a href="#"><i class="fa-solid fa-eye"></i></span>Profil</a>
            </div>

            <div class="carousel">
                <img src="/profils/p4.jpeg" alt="">
                <p>architecture<span>0</span></p>
                <div class="vendu">
                    <span>html</span>
                    <span>css</span>
                    <span>java script</span>
                    <span>html</span>
                </div>
                <p id="nom">Nom: Sylivin</p>
                <a href="#"><i class="fa-solid fa-eye"></i></span>Profil</a>
            </div>

            <div class="carousel">
                <img src="/profils/p5.avif " alt="">
                <p>disiner<span>0</span></p>
                <div class="vendu">
                    <span>html</span>
                    <span>css</span>
                    <span>java script</span>
                    <span>html</span>
                    <span>css</span>
                    <span>java script</span>
                </div>
                <p id="nom">Nom: nike</p>
                <a href="#"><i class="fa-solid fa-eye"></i></span>Profil</a>
            </div>
        </article>
    </section>

    

    <script src="../js/owl.carousel.min.js"></script>
    <script src="../js/owl.carousel.js"></script>
    <script src="../js/owl.animate.js"></script>
    <script src="../js/owl.autoplay.js"></script>
    
    <script>
        $(document).ready(function(){
    // Initialiser le carrousel 1 avec la portée appropriée
    $('.carousel1').owlCarousel({
      items: 4,
      loop: true,
      autoplay: true,
      animateOut: 'slideOutDown',
      animateIn: 'flipInX',
      stagePadding:1,
      smartSpeed:450,
      margin:0,
      nav: true,
      navText: ['<i class="fa-solid fa-chevron-left"></i>', '<i class="fa-solid fa-chevron-right"></i>']
    });
    var carousel1 = $('.carousel1').owlCarousel();
    $('.owl-next').click(function() {
      carousel1.trigger('next.owl.carousel');
    })
    $('.owl-prev').click(function() {
      carousel1.trigger('prev.owl.carousel');
    })


    $('.boot').owlCarousel({
      items: 1,
      loop: true,
      autoplay: false,
      autoplayTimeout: 5000,
      nav: true,
      navText: ['<i class="fa-solid fa-chevron-left"></i>', '<i class="fa-solid fa-chevron-right"></i>']
    });
    var carousel2 = $('.carousel2').owlCarousel();
    $('.owl-next2').click(function() {
      carousel2.trigger('next.owl.carousel');
    })
    $('.owl-prev2').click(function() {
      carousel2.trigger('prev.owl.carousel');
    })


        });
      </script> -->


      <script src="../script/bootstrap3.4.1.js"></script>
    <script src="../script/summernote@0.8.18.js"></script>
    <script>
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
                    ['insert', ['link', 'picture', 'video']],
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
                    ['insert', ['link', 'picture', 'video']],
                    ['view', ['fullscreen', 'codeview', 'help']]
                ]
            });
        });

       
    </script>

    <script>
        let img1 =document.querySelector('.img1')
        let containe =document.querySelector('.container-b')
        let btn2 = document.querySelector('.btn2')

        img1.addEventListener('click', ()=>{
            containe.classList.remove('active')
        })
        btn2.addEventListener('click', ()=>{
            containe.classList.add('active')
        })
        
    </script>

</body>
</html>