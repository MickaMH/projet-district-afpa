<?php

    include "assets/php/fichiers_php/header.php";

?>

    <!-- MAIN -->
    <main class="container-fluid pb-5">

        <?php

            include "assets/php/fichiers_php/carousel_mobile.php";

        ?>

        <!-- intitulé main -->
        <div class="row">

            <div class="fs-1 fw-medium mt-lg-3 text-center">

                <p class="lettres">PASSER UNE COMMANDE</p>
            
            </div>

        </div>

        <div class="row m-sm-1 mt-sm-0 m-lg-5 d-flex justify-content-center">
            
            <!-- formulaire de commande -->
            <form action="fin_commande.php" method="POST" name="formulaire" id="document">
        
            <?php
            
                include 'assets/php/dao.php';
            
                $plat = get_commande();

            ?>

                <!-- Carte Horizontale -->
                <div class="card col-lg-6 mt-3 mt-lg-0 mb-4 mb-lg-2 border-3 bordures rounded-5 mx-auto flex-lg-row">

                    <div>

                        <!-- Image SM -->
                        <img src="assets/img/plats/<?php echo $plat['image']; ?>" alt="Image du plat" class="card-img-top p-3 rounded-5 d-sm-none" style="width: 17.6rem; height: 17.6rem;">
                        <!-- Image LG -->
                        <img src="assets/img/plats/<?php echo $plat['image']; ?>" alt="Image du plat" class="p-3 rounded-5 d-none d-lg-block">

                    </div>

                    <div class="card-body">

                        <div class="card-title fs-1 mb-2 mb-lg-2 mt-0 fw-medium"><?php echo $plat['libelle'];?></div>

                        <div class="card-text fst-italic fw-medium fs-5 mb-2 mb-lg-3 me-lg-2"><?php echo $plat['description'];?></div>

                        <div class="d-flex">

                            <label class="card-text fw-medium fs-5">Prix :</label>
                            <div class="card-text fw-medium fs-5 ms-2 ms-lg-2"><?php echo $plat['prix'];?></div>
                            <p class="fs-5 fw-medium ms-2">&#8364;</p>
                            
                        </div>
                        
                        <div class="d-flex">

                            <label class="fs-5 fw-medium mt-3">Quantité :</label>
                            <input type="text" id="quantite" name="quantiteCommande" 
                                    class="form-control fs-5 fw-medium ms-2 text-center rounded-3 border-3 bordures fond_input" 
                                    style="width: 4rem; height: 3rem;" maxlength="3" required>
                            <span id="requisQuantite"></span>

                        </div>

                    </div>

                </div>

        </div>

        <div class="row d-flex justify-content-center">

                <input type="hidden" name="imageCommande" value="assets/img/plats/<?php echo $plat['image']; ?>">
                <input type="hidden" name="libelleCommande" value="<?php echo $plat['libelle'];?>">
                <input type="hidden" name="idCommande" value="<?php echo $plat['id'];?>">
                <input type="hidden" name="prixCommande" value="<?php echo $plat['prix'];?>">
            
                <div class="col-12 col-lg-5 mb-4 mb-lg-5 mt-3 mt-lg-0">

                    <input type="text" class="form-control fs-4 border-3 bordures fond_input" id="nom" name="nomCommande" placeholder="Nom*(sans accents)" required>
                    <span id="requisNom"></span>

                </div>

                <div class="col-12 col-lg-5 mb-4 mb-lg-5">
                
                    <input type="text" class="form-control fs-4 border-3 bordures fond_input" id="prenom" name="prenomCommande" placeholder="Prénom*(sans accents)" required>
                    <span id="requisPrenom"></span>

                </div>

                <div class="col-12 col-lg-5 mb-4">

                    <input type="text" class="form-control fs-4 border-3 bordures fond_input" id="phone" name="phoneCommande" placeholder="Téléphone*" required>
                    <span id="requisPhone"></span>

                </div>

                <div class="col-12 col-lg-5">

                    <input type="email" class="form-control fs-4 border-3 bordures fond_input" id="mail" name="mailCommande" placeholder="Email*" required>
                    <span id="requisMail"></span>

                </div>

                <div class="col-12 col-lg-10 mb-3">

                    <label class="form-label"></label>
                    <textarea class="form-control fs-4 border-3 bordures fond_input" rows="3" id="adresse" name="adresseCommande" placeholder="Votre adresse*" required></textarea>
                    <span id="requisAdresse"></span>

                </div>

                <div class="col-12 d-sm-none">

                    <p class="lettres_noires"><sup>*</sup>Tous les champs sont obligatoires</p>

                </div>
                <div class="col-lg-10 fs-5 d-none d-lg-block">

                    <p class="lettres_noires"><sup>*</sup>Tous les champs sont obligatoires</p>

                </div>

                
                <div class="col-12 col-lg-12 mb-lg-5 d-flex justify-content-center">
                
                    <input class="d-flex justify-content-center fw-medium mx-auto shadow-lg fs-5 rounded-4 bouton_envoyer" id="envoi_commande" 
                            style="width: 10rem; height: 3rem;" type="submit" value="Commander">

                </div>

            </form>

        </div>

    </main>

<?php

    include "assets/php/fichiers_php/footer.php";

?>