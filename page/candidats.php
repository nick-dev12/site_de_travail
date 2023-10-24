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
                <img class="affiche" src="../upload/<?= $users['images'] ?>" alt="">
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
                        <td id="td" ><img src="../image/MCV.png" alt=""></td>
                        <td> <a href="cv_users.php">mon cv</a></td>
                    </tr>

                    <tr>
                        <td  id="td"><img src="../image/exp.png" alt=""></td>
                        <td>mon experience</td>
                    </tr>
                    <tr>
                        <td  id="td"><img src="../image/mpc.png" alt=""></td>
                        <td>mon parcour</td>
                    </tr>
                   
                </table>
            </div>
        </div>
    </section>


    <section class="section3">
<?php if(isset($_SESSION['compte_entreprise'])): ?>
    <button class="contacte">Contacter ce candidat</button>

    <form action="" class="form_appel" >
        <img class="fermer" src="../image/croix.png" alt="">
        <label for="message">Ecriver votre message ici</label>
        <textarea name="message" id="message" cols="30" rows="10"></textarea>
       <input type="submit" name="envoie" value="Envoyer">
    </form>

    <script>
        let contacte = document.querySelector('.contacte');
        let form_appel = document.querySelector('.form_appel');
        let fermer =document.querySelector('.fermer')

        contacte.addEventListener('click', () => {
            if (form_appel.style.left ='160%') {
                form_appel.style.left ='60%'
            }else{
                form_appel.style.left ='160%'
            }

            contacte.style.opacity= '0';
        })
        fermer.addEventListener('click', () => {
            if ( form_appel.style.left ='60%') {
                form_appel.style.left ='160%'
            }else{
                form_appel.style.left ='60%'
            }

            contacte.style.opacity= '1';
        })
    </script>

<?php endif; ?>
        
       

        <div class="container_box1" data-aos="fade-up" data-aos-delay="0" data-aos-duration="500"
            data-aos-easing="ease-in-out" data-aos-mirror="true" data-aos-once="false"
            data-aos-anchor-placement="top-bottom">
            <div class="box1">
                <h2>A propos de moi !</h2>

                <div class="description">
                    <?php
                    // Vérifier si la description de l'utilisateur est vide
                    if (empty($descriptions['description'])):

                        ?>
                    <?php else: ?>
                        <?php echo $descriptions['description']; ?>
                    <?php endif; ?>

                </div>
                
                // Vérifier si la description de l'utilisateur est vide
                
            </div>
        </div>





        <div class="container_box2" data-aos="fade-up" data-aos-delay="0" data-aos-duration="500"
            data-aos-easing="ease-in-out" data-aos-mirror="true" data-aos-once="false"
            data-aos-anchor-placement="top-bottom">
            <div class="box1">
                <h1>Expertise et compétences</h1>
            </div>
            <div class="box2">
                <h2>Experience professionnel</h2>
                <?php
                foreach ($afficheMetier as $metiers):

                    ?>
                    <div class="metier">
                        <table>
                            <tr>
                                <th>
                                    <p>
                                        <?php echo $metiers['metier']; ?>
                                    </p>
                                </th>
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


                    </div>



                    <div class="box3">
                <h2>Compétences</h2>
                <div class="container_comp">


                    <?php
                    foreach ($competencesUtilisateur as $competence):
                        ?>
                        <p>
                            <?php echo $competence['competence']; ?>
                        </p>
                        <?php
                    endforeach;
                    ?>
                </div>

            </div>

                   
            </div>

            
        




        <div class="container_box3" data-aos="fade-up" data-aos-delay="0" data-aos-duration="500"
            data-aos-easing="ease-in-out" data-aos-mirror="true" data-aos-once="false"
            data-aos-anchor-placement="top-bottom">

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
                            filiere
                        </th>
                        <th>
                            etablissement
                        </th>

                        <th class="grade">Grade</th>
                    </tr>

                </table>

                <?php foreach ($formationUsers as $formations): ?>
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
                           
                        </tr>
                    </table>
                <?php endforeach; ?>
            </div>

        </div>


        <div class="container_box4" data-aos="fade-up" data-aos-delay="0" data-aos-duration="500"
            data-aos-easing="ease-in-out" data-aos-mirror="true" data-aos-once="false"
            data-aos-anchor-placement="top-bottom">
            <div class="box1">
                <div class="div">
                    <table>
                        <tr>
                            <th>Diplome</th>
                        </tr>
                    </table>
                    <div>
                        <?php foreach ($afficheDiplome as $diplomes): ?>

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
                        <?php foreach ($afficheCertificat as $certificats): ?>
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
           
        </div>


        <div class="container_box7" data-aos="fade-up" data-aos-delay="0" data-aos-duration="500"
            data-aos-easing="ease-in-out" data-aos-mirror="true" data-aos-once="false"
            data-aos-anchor-placement="top-bottom">

            <div class="box1">
                <h1>Projets et realisations</h1>
  
                
            </div>
           
            <div class="box2">

                <?php foreach ($affichePojetUsers as $projets): ?>

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




        <div class="container_box5" data-aos="fade-up" data-aos-delay="0" data-aos-duration="500"
            data-aos-easing="ease-in-out" data-aos-mirror="true" data-aos-once="false"
            data-aos-anchor-placement="top-bottom">
            <div class="box1">
                <h1>maitrise des outils informatiques</h1>
            </div>

            <div class="box2">

                <table>
                    <?php foreach ($afficheOutil as $outils): ?>
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

                
            </div>

            
        </div>








        <div class="container_box5" data-aos="fade-up" data-aos-delay="0" data-aos-duration="500"
            data-aos-easing="ease-in-out" data-aos-mirror="true" data-aos-once="false"
            data-aos-anchor-placement="top-bottom">
            <div class="box1">
                <h1>maitrise des langues</h1>
            </div>

            <div class="box2">
                <table>
                    <?php foreach ($afficheLangue as $langues): ?>
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
               
            </div>

           
        </div>



        

       
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
                    ['insert', ['link', 'picture', 'video']],
                    ['view', ['fullscreen', 'codeview', 'help']]
                ]
            });
        });

        $(document).ready(function () {
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

        $(document).ready(function () {
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