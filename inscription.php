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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/inscription.css">
    <link rel="stylesheet" href="../css/navbare.css">
    
</head>
<body>
    <nav>
        <a class="logo" href="/index.html"><span>Work</span><span>Flexers</span></a>

        <div class="box1">
            <a href="../index.php">Accueil</a>
            <a href="/page/Offres_d'emploi.php">Offres d'emploi</a>
            <a href="#">Entreprise</a>
            <a href="/page/voir_profil.php">Explorer les profils</a>
        </div>

        <div class="box2">
            <form action="post">
                <input type="search" name="search" id="search">
                <label for="submit"><i class="fa-solid fa-magnifying-glass fa-xs"></i></label>
                <input type="submit" name="submit" id="submit" value="submit">
            </form>
        </div>

        <div class="box3">
            <a class="connexion" href="/connexion.php">Connexion</a>
        </div>
    </nav>

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

    

       <section class="section3">
        <a href="/compte_entreprise.php"><button> <img src="/image/entreprise.jpg" alt="">compte d'entreprise</button></a>
        <a href="/compte_travailleur.php"><button><img src="/image/travail.png" alt=""> compte de travailleur</button></a>
       </section>
    
       <section class="section4">
        <img src="/image/p.png" alt="">
       </section>

       
</body>
</html>