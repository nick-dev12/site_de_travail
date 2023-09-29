<?php
session_start();

if(isset($_GET['id'])){
    $offre_id = $_GET['id'] ;
}else{
    header('Location: ../entreprise/entreprise_profil.php');
}

include_once('app/controller/controllerOffre_emploi.php');

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
    <link rel="stylesheet" href="../css/voir_offre.css">
    <link rel="stylesheet" href="../css/navbare.css">
</head>
<body>
<?php include('navbare.php') ?>



<section class="section2">
        <div class="box1">
            <h1>Info de l'Entreprise</h1>

            <table>
                <tr>
                    <th>NOM</th>
                    <td>Web-geniuses</td>
                </tr>
                <tr>
                    <th>site internet</th>
                    <td><a href="">www/webgeniuses.com</a></td>
                </tr>
                <tr>
                    <th>secteur d'activiter</th>
                    <td>informatique genicil maintenance logiciel </td>
                </tr>

                <tr>
                    <th>description de l'Entreprise</th>
                    <td>nous somme une Entreprise specialiser sur la creation et le montage de site internetpour les particulier comme des Entreprise </td>
                </tr>
            </table>
        </div>
    </section>



    <section class="section3">
        <?php if($Offres): ?>
        <div class="box1">
            <h1>detaille de l'offre</h1>
            <h2>poste disponible : <span><?= $Offres['poste'] ?></span></h2>
            <h3>Mission et responsabiliter</h3>
            <ul>
                <li>dois maitriser les langages de programation tel que html css js php ukguigiugigigigigigigigigigigi,b,j ioifv ohot tr6e5 uggu</li>
                <li>dois maitriser les langages de programation tel que html css js php </li>
                <li>dois maitriser les langages de programation tel que html css js php </li>
                <li>dois maitriser les langages de programation tel que html css js php </li>
                <li>dois maitriser les langages de programation tel que html css js php </li>
                <li>dois maitriser les langages de programation tel que html css js php </li>
            </ul>

            <h3>profil rechercher (caliter et competance) </h3>
            <ul>
                <li>dois maitriser les langages de programation tel que html css js php </li>
                <li>dois maitriser les langages de programation tel que html css js php </li>
                <li>dois maitriser les langages de programation tel que html css js php </li>
                <li>dois maitriser les langages de programation tel que html css js php </li>
                <li>dois maitriser les langages de programation tel que html css js php </li>
                <li>dois maitriser les langages de programation tel que html css js php </li>
            </ul>

            <h1 class="suplement">Info suplementaire</h1>


            <table>
                <tr>
                    <th>Métier :</th>
                    <td>Transport, logistique</td>
                </tr>
                <tr>
                    <th>Type de contrat :</th>
                    <td>CDD - Stage</td>
                </tr>
                <tr>
                    <th>Région :</th>
                    <td>Dakar</td>
                </tr>

                <tr>
                    <th>Ville :</th>
                    <td>Dakar</td>
                </tr>

                <tr>
                    <th>Niveau d'expérience :</th>
                    <td>Débutant < 2 ans</td>
                </tr>
                <tr>
                    <th>Niveau d'études :</th>
                    <td>Bac+3</td>
                </tr>
                <tr>
                    <th>Langues exigées :</th>
                    <td>Anglais›Intermédiaire , Français›Courant</td>
                </tr>
            </table>

            <button class="btn2" > modifier l'offre </button>



            <div class="form_off">
                <form method="post" action="">
                    <div class="box">
                        <label for="poste">Poste disponible</label>
                        <input type="text" name="poste" id="poste" value="<?= $Offres['poste'] ?>" >
                    </div>
                    <div class="box">
                        <label for="mission">decriver les missions et responsbiliter</label>
                        <textarea name="mission" id="mission" cols="30" rows="10"><?= htmlentities($Offres['mission']) ?></textarea>
                    </div>
                    <div class="box">
                        <label for="profil">decriver le profil rechercher (caliter et competance)</label>
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

        
        let btn2 = document.querySelector('.btn2')
        let form_off = document.querySelector('.form_off')

        btn2.addEventListener('click', () => {
            if (form_off.style.height === '0px') {
                form_off.style.height = '1400px'
            } else {
                form_off.style.height = '0px'
            }
        })
    </script>
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

</body>
</html>