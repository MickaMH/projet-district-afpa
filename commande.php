<!-- HEADER -->
<?php

    include "assets/php/fichiers_php/header.php";

?>

<!-- MAIN -->
<main class="container-fluid pb-5">

    <!-- intitulé main -->
    <div class="row d-flex justify-content-center">

        <div class="col-12 col-lg-4 fs-1 fw-medium mt-3 mt-lg-3 text-center">

            <p class="lettres fond_intitule">PASSER UNE COMMANDE</p>
            
        </div>

    </div>
    
    <!-- formulaire de commande -->
    <form action="fin_commande.php" method="POST" name="formulaire" id="document">
        
        <?php
            
            include 'assets/php/dao.php';
            
            $plat = get_commande();

        ?>

        <!-- Carte Horizontale -->
        <div class="card col-lg-6 mt-3 mt-lg-5 mb-3 mb-lg-5 border-3 bordures rounded-5 mx-auto flex-lg-row">

            <div>

                <!-- Image SM -->
                <img src="assets/img/plats/<?php echo $plat['image']; ?>" alt="Image du plat" class="card-img-top p-3 rounded-5 d-sm-none img-fluid">
                <!-- Image LG -->
                <img src="assets/img/plats/<?php echo $plat['image']; ?>" alt="Image du plat" class="p-3 rounded-5 d-none d-lg-block">

            </div>

            <div class="card-body">
                <!-- libelle -->
                <div class="card-title fs-1 mb-2 mb-lg-2 mt-0 fw-medium"><?php echo $plat['libelle'];?></div>
                <!-- description -->
                <div class="card-text fst-italic fw-medium fs-5 mb-2 mb-lg-3 me-lg-2"><?php echo $plat['description'];?></div>
                <!-- prix -->
                <div class="d-flex">

                        <label class="card-text fw-medium fs-5">Prix :</label>
                        <div class="card-text fw-medium fs-5 ms-2 ms-lg-2"><?php echo $plat['prix'];?></div>
                        <p class="fs-5 fw-medium ms-2">&#8364;</p>
                            
                </div>
                <!-- quantite -->   
                <div class="d-flex">

                        <label class="fs-5 fw-medium mt-3">Quantité :</label>
                        <input type="text" id="quantite" name="quantiteCommande" 
                                class="form-control fs-5 fw-medium ms-2 text-center rounded-3 border-3 bordures fond_input" 
                                style="width: 4rem; height: 3rem;" maxlength="3" required>
                        <span id="requisQuantite"></span>

                </div>

            </div>

        </div>

        <!-- Champs de formulaire -->
        <div class="row d-flex justify-content-center">
            <!-- Récupération image, libelle, id, prix -->
            <input type="hidden" name="imageCommande" value="assets/img/plats/<?php echo $plat['image']; ?>">
            <input type="hidden" name="libelleCommande" value="<?php echo $plat['libelle'];?>">
            <input type="hidden" name="idCommande" value="<?php echo $plat['id'];?>">
            <input type="hidden" name="prixCommande" value="<?php echo $plat['prix'];?>">
            <!-- nom -->
            <div class="col-12 col-lg-5 mb-4 mb-lg-5 mt-3 mt-lg-0">

                    <input type="text" class="form-control fs-4 border-3 bordures fond_input" id="nom" name="nomCommande" placeholder="Nom*(sans accents)" required>
                    <span id="requisNom"></span>

            </div>
            <!-- prenom -->
            <div class="col-12 col-lg-5 mb-4 mb-lg-5">
                
                    <input type="text" class="form-control fs-4 border-3 bordures fond_input" id="prenom" name="prenomCommande" placeholder="Prénom*(sans accents)" required>
                    <span id="requisPrenom"></span>

            </div>
            <!-- telephone -->
            <div class="col-12 col-lg-5 mb-4">

                    <input type="text" class="form-control fs-4 border-3 bordures fond_input" id="phone" name="phoneCommande" placeholder="Téléphone*" required>
                    <span id="requisPhone"></span>

            </div>
            <!-- email -->
            <div class="col-12 col-lg-5">

                    <input type="email" class="form-control fs-4 border-3 bordures fond_input" id="mail" name="mailCommande" placeholder="Email*" required>
                    <span id="requisMail"></span>

            </div>
            <!-- adresse -->
            <div class="col-12 col-lg-10 mb-3">

                    <label class="form-label"></label>
                    <textarea class="form-control fs-4 border-3 bordures fond_input" rows="3" id="adresse" name="adresseCommande" placeholder="Votre adresse*" required></textarea>
                    <span id="requisAdresse"></span>

            </div>

            <!-- Tous champs obligatoires Mobile -->
            <div class="col-12 d-sm-none">

                    <p class="lettres_noires"><sup>*</sup>Tous les champs sont obligatoires</p>

            </div>
            <!-- Tous champs obligatoires Desktop -->
            <div class="col-lg-10 fs-5 d-none d-lg-block">

                    <p class="lettres_noires"><sup>*</sup>Tous les champs sont obligatoires</p>

            </div>

            <!-- Bouton Commander -->
            <div class="col-12 col-lg-12 mb-lg-5 d-flex justify-content-center">
                
                    <input class="d-flex justify-content-center fw-medium mx-auto shadow-lg fs-5 rounded-4 bouton_envoyer" id="envoi_commande" 
                            style="width: 10rem; height: 3rem;" type="submit" value="Commander">

            </div>

        </div>

    </form>

</main>

<!-- FOOTER -->
<?php

    include "assets/php/fichiers_php/footer.php";

?>