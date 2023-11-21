<section class="section2">
        <div class="container">
            <div class="box1">
                <?php if ($users['statut'] == 'Disponible'): ?>
                    <button class="statut occ">
                        <?= $users['statut'] ?>
                    </button>
                <?php else: ?>
                    <?php if ($users['statut'] == 'Occuper'): ?>
                        <button class="statut disp">
                            <?= $users['statut'] ?>
                        </button>
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

                <tr class="tr3" >
                        <td id="td"><img src="../image/modifier.png" alt=""></td>
                        <td> <a href="../page/modifier.php">modifier</a></td>
                    </tr>

                    <tr class="tr4" >
                        <td id="td"><img src="../image/MCV.png" alt=""></td>
                        <td> <a href="/model_cv/model1.php">mon cv</a></td>
                    </tr>

                   
                    <tr class="tr">
                        <td id="td"><a href="../page/user_profil.php"><img src="../image/mpc.png" alt=""></a></td>
                        <td><a href="../page/user_profil.php">Mon parcours</a></td>
                    </tr>
                   
                    <tr class="tr1">
                        <td id="td"> <a href="../page/mes_demande.php"><img src="../image/mdep.png" alt=""></a></td>
                        <td><a href="../page/mes_demande.php">Mes demandes d’emploies</a></td>
                    </tr>
                    <tr class="tr2" >
                        <td id="td"><a href="message.php"><img src="../image/modifier.png" alt=""></a></td>
                        <td> <a href="../page/message_users.php">Message</a></td>
                    </tr>
                </table>
            </div>
        </div>
    </section>