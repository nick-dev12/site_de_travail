<?php

// Démarre la session
session_start();

include 'conn/conn.php';
if (isset($_SESSION['compte_entreprise'])) {
    header('location: ../index.php'); // Rediriger vers la page du tableau de bord
    exit();
}

// Inclusion du fichier de connexion à la BDD


// Déclaration d'un tableau pour stocker les erreurs
$erreurs = ''; // Initialisez un tableau pour stocker les erreurs

// Vérification si le bouton valider est cliqué
if (isset($_POST['valider'])) {
    // Récupération des données du formulaire
    // Déclaration des variables 
    $nom = $mail = $phone =$types = $taille = $entreprise = $images = $ville = $categorie = $passe = $cpasse = '';

    $id = uniqid();

    // Vérification du nom
    if (empty($_POST['nom'])) {
        $erreurs = "Le nom est obligatoire";
    } else {
        $nom = htmlspecialchars($_POST['nom'], ENT_QUOTES, 'UTF-8'); // Échapper les caractères spéciaux
    }
    // Vérification du nom de boutique
    if (empty($_POST['entreprise'])) {
        $erreurs = "Le nom de l'entreprise est obligatoire";
    } else {
        $entreprise = ($_POST['entreprise']);
    }
    // Vérification du mail
    if (empty($_POST['mail'])) {
        $erreurs = "email est obligatoire";
    } elseif (!filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)) {
        $erreurs = "L'email n'est pas valide";
    } else {
        $mail = $_POST['mail'];

        // Préparer la requête SQL pour vérifier si l'e-mail est déjà utilisé
        $query = $db->prepare("SELECT * FROM compte_entreprise WHERE mail = :mail");
        $query->bindParam(':mail', $mail);
        $query->execute();

        // Vérifier si des résultats ont été trouvés
        if ($query->rowCount() > 0) {
            $erreurs = "L'e-mail est déjà utilisé";
        }
    }

    // Vérification du téléphone  
    if (empty($_POST['phone'])) {
        $erreurs = "Le téléphone est obligatoire";
    } else {
        $phone = $_POST['phone'];
    }

    // Vérification du téléphone  
    if (empty($_POST['types'])) {
        $erreurs = "Le téléphone est obligatoire";
    } else {
        $types = $_POST['types'];
    }
    
    // Vérification du nom de boutique
    if (empty($_POST['taille'])) {
        $erreurs = "La taille de l'entreprise est obligatoire";
    } else {
        $taille = htmlspecialchars($_POST['taille']);
    }

    // Vérification de la ville
    if (empty($_POST['categorie'])) {
        $erreurs = "La catergorie est obligatoire";
    } else {
        $categorie = htmlspecialchars($_POST['categorie']);
    }

    // Vérification de la ville
    if (empty($_POST['ville'])) {
        $erreurs = "La ville est obligatoire";
    } else {
        $ville = htmlspecialchars($_POST['ville']);
    }

    // $nom = $_POST['nom'];
    // $entreprise = $_POST['entreprise'];
    // $mail = $_POST['mail'];
    // $phone = $_POST['phone'];
    // $taille = $_POST['taille'];
    // $categorie = $_POST['categorie'];
    // $ville = $_POST['ville'];
    // $passe = $_POST['passe'];
    // $cpasse = $_POST['cpasse'];

    // Vérification de la ville
    if (empty($_FILES['images'])) {
        $erreurs = "Choisisser une photo de profil";
    } else {
        // Récupérer les données du formulaire
        $images = $_FILES['images'];
        // Vérifier qu'un fichier est uploadé
        if ($images['error'] == 0) {

            // Récupérer le nom et le chemin temporaire
            $fileName = $images['name'];
            $tmpName = $images['tmp_name'];

            // Ajouter l'identifiant unique au nom du fichier
            $uniqueFileName = $id . '_' . $fileName;

            // Déplacer le fichier dans le répertoire audio
            $targetFile = 'upload/' . $uniqueFileName;
            move_uploaded_file($tmpName, $targetFile);
        }
    }

    // Vérification du mot de passe
    if (empty($_POST['passe'])) {
        $erreurs = "Le mot de passe est obligatoire";
    } else {
        $passe = $_POST['passe'];
    }

    // Vérification de la confirmation du mot de passe
    if (empty($_POST['cpasse'])) {
        $erreurs = "La confirmation du mot de passe est obligatoire";
    } else {
        $cpasse = $_POST['cpasse'];
    }

    // Vérification de la correspondance des mots de passe
    if ($passe !== $cpasse) {
        $erreurs = "Les mots de passe ne correspondent pas !";
    }

    // Si aucune erreur n'est détectée, procédez à l'insertion
    if (empty($erreurs)) {
        // Hachage du mot de passe
        $passe = password_hash($passe, PASSWORD_DEFAULT);

       
        // Requête SQL pour l'insertion des données
        $sql = "INSERT INTO compte_entreprise (nom, mail, phone,types, taille, entreprise, ville, categorie, images, passe) 
                VALUES (:nom, :mail, :phone,:types, :taille, :entreprise, :ville, :categorie, :images, :passe)";

        $stmt = $db->prepare($sql);
        $stmt->bindParam(':nom', $nom);
        $stmt->bindParam(':mail', $mail);
        $stmt->bindParam(':phone', $phone);
        $stmt->bindParam(':types', $types);
        $stmt->bindParam(':taille', $taille);
        $stmt->bindParam(':entreprise', $entreprise);
        $stmt->bindParam(':ville', $ville);
        $stmt->bindParam(':categorie', $categorie);
        $stmt->bindParam(':images', $uniqueFileName);
        $stmt->bindParam(':passe', $passe);
        // Exécution de la requête
        $stmt->execute();

        // Redirection vers une page de confirmation
        header('Location: ../entreprise/connexion.php');
        exit;
    }
}

?>







<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@18.2.1/build/css/intlTelInput.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/inscription.css">
    <link rel="stylesheet" href="../css/navbare.css">

</head>

<body>
    <?php include('navbare.php') ?>


    <section class="section2">
        <img class="img" src="/image/work.jpeg" alt="">
        <div class="formulaire1  ">
            <form method="post" action="" enctype="multipart/form-data">
                <h3>Inscription</h3>
                <?php if (isset($erreurs)): ?>
                    <div class="erreur">
                        <?php echo $erreurs; ?>
                    </div>
                <?php endif; ?>
                <div class="container_form">

                    <div class="container">
                        <div class="box1">
                            <label for="nom">Nom et Prenom</label>
                            <input type="text" name="nom" id="nom">
                        </div>

                        <div class="box1">
                            <label for="entreprise">Nom de votre entreprise</label>
                            <input type="text" name="entreprise" id="entreprise">
                        </div>

                        <div class="box1">
                            <label for="mail">adress-mail</label>
                            <input type="text" name="mail" id="mail">
                        </div>

                        <div class="box1">
                            <label for="phone">Téléphone</label>
                            <input type="number" name="phone" id="phone">
                        </div>

                        <div class="box1">
                            <label for="type">Type d'entreprise ou d'active</label>
                            <input type="text" name="types" id="type">
                        </div>

                        <div class="box1">
                            <p>Photo de profile</p>
                            <div class="ab">
                                <div>
                                    <label class="label" for="images"> <img src="/image/galerie.jpg" alt=""></label>
                                    <input type="file" name="images" id="images">
                                </div>
                                <div class="im">
                                    <img id="imagePreview" src="" alt="view">
                                </div>

                            </div>
                        </div>

                    </div>


                    <div class="container">

                        <div class="box1">
                            <label for="taille">Taille de l'entreprise</label>
                            <select name="taille" id="taille">
                                <option value="1">1 personne</option>
                                <option value="2_10">Entre 2 et 10</option>
                                <option value="11_49">Entre 11 et 49</option>
                                <option value="femme">Entre 250 et 999</option>
                                <option value="femme">Entre 1000 et 4999</option>
                            </select>
                        </div>

                        <div class="box1">
                            <label for="categorie">Secteur d'activité</label>
                            <select id="categorie" name="categorie">
                                <option value="">Sélectionnez une catégorie</option>
                                <option value="Informatique">Informatique et tech</option>
                                <option value="design">Design et création</option>
                                <option value="Rédaction">Rédaction et traduction</option>
                                <option value="marketing">Marketing et communication</option>
                                <option value="business">Conseil et gestion d'entreprise</option>
                                <option value="Juridique">Juridique</option>
                                <option value="Ingénierie">Ingénierie et architecture</option>
                            </select>
                        </div>

                        <div class="box1">
                            <label for="ville">Ville</label>
                            <input type="text" name="ville" id="ville">
                        </div>


                        <div class="box1">
                            <label for="passe">Mot de passe</label>
                            <input type="password" name="passe" id="passe">
                        </div>
                        <div class="box1">
                            <label for="cpasse">mot de passe</label>
                            <input type="password" name="cpasse" id="cpasse">
                            <div class="view">
                                <p>Afficher le mot de passe</p>
                                <input type="checkbox" id="voirCPasse" onclick="showPassword()">
                            </div>

                        </div>

                        <input type="submit" name="valider" value="valider" id="valider">
                    </div>

                </div>

            </form>
        </div>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/intl-tel-input@18.2.1/build/js/intlTelInput.min.js"></script>
    <script>
        const input = document.querySelector("#phone");
        const iti = window.intlTelInput(input, {
            utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@18.2.1/build/js/utils.js",
            separateDialCode: true,
            autoHideDialCode: false,
            initialCountry: "auto",
            geoIpLookup: function (callback) {
                fetch("https://ipapi.co/json")
                    .then(function (res) {
                        return res.json();
                    })
                    .then(function (data) {
                        callback(data.country_code);
                    })
                    .catch(function () {
                        callback("us");
                    });
            }
        });



        // Masquer la liste au clic sur le champ de téléphone
        input.addEventListener('click', function () {
            iti.closeDropdown();
        });

        // Masquer au clic en dehors du champ de téléphone
        document.addEventListener('click', function (e) {
            if (!input.contains(e.target) && !iti.container.contains(e.target)) {
                iti.closeDropdown();
            }
        });
    </script>

    <script>
        function showPassword() {
            var x = document.getElementById("passe");
            var y = document.getElementById("cpasse");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }

            if (y.type === "password") {
                y.type = "text";
            } else {
                y.type = "password";
            }
        }
    </script>
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
</body>

</html>