<?php 
session_start();

include_once('../controller/controller_postulation.php');
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
</head>
<body>
    <?php 
    include('../navbare.php')
    ?>

    <section class="section2" >
        <h2>Liste des candidats</h2>

        <div class="container">
            <?php foreach($getALLpostulation as $postulant) :?>
            <div class="items" >
                <h3> <span>POSTE : </span><?= $postulant['poste'] ?></h3>
                <img src="/image/entreprise.jpg" alt="">
                <ul>
                    <li><?= $postulant['nom'] ?></li>
                    <li><?= $postulant['mail'] ?></li>
                    <li>mes competences</li>
                    <li>profession</li>
                </ul>
                
                <a href="../page/user_profil.php?id=<?= $postulant['users_id'] ?>"><button>voir le profil</button></a>
            </div>
            <?php endforeach; ?>
        </div>
    </section>
</body>
</html>