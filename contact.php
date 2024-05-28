<?php

    include "assets/php/fichiers_php/header.php";

?>

    <!-- MAIN -->
    <main class="container-fluid pb-5">

        <!-- intitulé main -->
        <div class="row d-flex justify-content-center">

            <div class="col-12 col-lg-4 fs-1 fw-medium ms-lg-3 mt-3 mt-lg-3 text-center">

                <p class="lettres fond_intitule border-3">FORMULAIRE DE CONTACT</p>
            
            </div>

        </div>

        <!-- formulaire de contact -->
        <form action="traitement_contact.php" method="POST" name="formulaire_contact" id="document_contact" enctype="multipart/form-data" class="row m-sm-1 m-lg-5 d-flex justify-content-center">
            
            <div class="col-sm-10 col-lg-5 mt-3 mt-lg-0 mb-5">
            
                <input type="text" class="form-control fs-4 border-3 bordures fond_input" id="nomContact" name="nomContact" placeholder="Nom*" aria-label="First name" required>
                <span id="requisNomContact"></span>
            </div>

            <div class="col-sm-10 col-lg-5 mb-5 ">
                
                <input type="text" class="form-control fs-4 border-3 bordures fond_input" id="prenom" placeholder="Prénom" aria-label="Last name">
                
            </div>

            <div class="col-sm-10 col-lg-5 mb-5 mb-lg-4">

                <input type="email" class="form-control fs-4 border-3 bordures fond_input" id="mail" placeholder="Email" aria-label="Email">
        
            </div>

            <div class="col-sm-10 col-lg-5 mb-4">

                <input type="text" class="form-control fs-4 border-3 bordures fond_input" id="phoneContact" name="phoneContact" placeholder="Téléphone*" aria-label="Phone" required>
                <span id="requisPhoneContact"></span>
            </div>

         

            <div class="col-sm-10 col-lg-10 mb-3">

                <label class="form-label"></label>
                <textarea type="text" class="form-control fs-4 border-3 bordures fond_input" id="demandeContact" name="demandeContact" rows="3" placeholder="Votre demande*" aria-label="Demand" required></textarea>
                <span id="requisDemandeContact"></span>
            </div>

            <div class="col-sm-12 col-lg-10 fs-5 ms-3">

                <p class="lettres_noires"><sup>*</sup> Ces champs sont obligatoires</p>

            </div>

            <!-- bouton envoyer -->
            <div class="col-12 col-lg-12 d-flex justify-content-center">

                <input class="d-flex justify-content-center fw-medium mx-auto shadow-lg fs-5 rounded-4 bouton_envoyer" id="envoi_contact" 
                        style="width: 10rem; height: 3rem;" type="submit" value="Envoyer">

            </div>

        </form>

    </main>

<?php

    include "assets/php/fichiers_php/footer.php";

?>
   