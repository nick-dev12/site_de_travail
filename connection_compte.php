<?php
session_start();
// Inclusion du fichier de connexion à la BDD
include 'conn/conn.php';


// Vérifier si l'utilisateur est déjà connecté
if (isset($_SESSION['users_id']) && $_SESSION['users_id']) {

    // Rediriger l'utilisateur vers la page d'accueil
    header('Location: index.php');
    exit();
}



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/inscription.css">
    <link rel="stylesheet" href="../css/navbare.css">

</head>

<body>

    <?php  include('navbare.php')?>

    <section class="section3">
        <div class="box">
            <div>
                <a href="/entreprise/connexion.php">
                    <button>compte d'entreprise</button>
                    <img src="/image/entreprise.jpg" alt="">
                </a>
            </div>

            <div>
                <a href="/compte_travailleur.php">
                    <button> compte de travailleur</button>
                    <img src="/image/travail.png" alt="">
                </a>
            </div>
        </div>
    </section>

    <section class="section4">
        <img src="/image/p.png" alt="">
    </section>


</body>

</html>