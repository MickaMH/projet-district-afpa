<?php

    include "assets/php/fichiers_php/header.php";

?>


    <!-- MAIN -->
    <main class="container-fluid pb-5">

        <div class="row">

            <!-- carousel desktop -->
            <div class="fw-medium text-center d-none d-lg-block">

                <div id="carousel_desktop" class="carousel-fade" data-bs-ride="carousel">

                    <div class="carousel-inner">

                        <div class="carousel-item active" data-bs-interval="4000">

                            <!-- <img src="..." class="d-block w-100" alt="..."> -->
                            <p class="d-block w-100 bienvenue_desktop fst-italic">BIENVENUE</p>

                        </div>

                        <div class="carousel-item" data-bs-interval="4000">

                            <!-- <img src="..." class="d-block w-100" alt="..."> -->
                            <p class="d-block w-100 bienvenue_desktop fst-italic">WELCOME</p>

                        </div>

                        <div class="carousel-item" data-bs-interval="4000">

                            <!-- <img src="..." class="d-block w-100" alt="..."> -->
                            <p class="d-block w-100 bienvenue_desktop fst-italic">BIENVENIDA</p>

                        </div>

                        <div class="carousel-item" data-bs-interval="4000">

                            <!-- <img src="..." class="d-block w-100" alt="..."> -->
                            <p class="d-block w-100 bienvenue_desktop fst-italic">WILLKOMMEN</p>

                        </div>

                    </div>
                    
                </div>
            
            </div>

            <?php

            include "assets/php/fichiers_php/carousel_mobile.php";

            ?>

        </div>

        <!-- icones categories mobile -->
        <div class="row mt-5 mb-2 d-block d-sm-none">

            <div class="card-group text-center">

                <div class="d-flex">

                    <div class="card shadow-lg border-4 bordures rounded-5 zoom mx-auto mb-4" style="width: 10rem; height: 10rem;">

                        <div>

                            <p class="card-text mb-1 fw-medium">Toutes les<br> catégories de plat</p>

                            <img src="assets/img/icones/icone_categories_transp_2.png" class="card-img mt-1" style="width: 33%;" alt="" title="">
            
                        </div>

                        <div class="mt-3 ms-2 me-2 rounded-5 fond_logo text-center" style="height: 1.6rem;">
                        
                            <a href="categories.php" class="text-decoration-none">

                            <p class="fw-medium lettres_blanches">CATEGORIES</p>

                            </a>

                        </div>

                    </div>

                    <div class="card shadow-lg border-4 bordures rounded-5 zoom mx-auto mb-4" style="width: 10rem; height: 10rem;">

                        <div>

                            <p class="card-text mb-1 fw-medium">Retrouvez tous<br> les plats</p>

                            <img src="assets/img/icones/icone_plats_transp_2.png" class="card-img mt-1" style="width: 37%;" alt="" title="">
            
                        </div>

                        <div class="mt-3 ms-2 me-2 rounded-5 fond_logo text-center" style="height: 1.6rem;">
                        
                            <a href="plats.php" class="text-decoration-none">

                            <p class="fw-medium lettres_blanches">PLATS</p>

                            </a>

                        </div>

                    </div>

                </div>

                <div class="card shadow-lg border-4 bordures rounded-5 zoom mx-auto" style="width: 10rem; height: 10rem;">

                    <div>

                        <p class="card-text mb-1 fw-medium">Adressez nous<br> vos demandes</p>

                        <img src="assets/img/icones/icone_contact_transp_2.png" class="card-img mt-1 ms-2" style="width: 30%;" alt="" title="">
            
                    </div>

                    <div class="mt-3 ms-2 me-2 rounded-5 fond_logo text-center" style="height: 1.6rem;">
                        
                        <a href="contact.php" class="text-decoration-none">

                        <p class="fw-medium lettres_blanches">CONTACT</p>

                        </a>

                    </div>

                </div>

            </div>

        </div>

        <!-- icones categories desktop -->
        <div class="container-fluid rond bordures mt-5 d-none d-lg-block" style="width: 29rem; height: 28rem;">

        <div class="row mt-3">

            <div class="col-lg-12 text-center d-flex justify-content-center">
                
                <div class="card shadow-lg border-4 bordures rounded-5 zoom" style="width: 10rem; height: 10rem;">

                    <div>

                        <p class="card-text mb-1 fw-medium">Toutes les<br> catégories de plat</p>

                        <img src="assets/img/icones/icone_categories_transp_2.png" class="card-img mt-1" style="width: 33%;" alt="" title="">
                
                    </div>

                    <div class="mt-3 ms-2 me-2 rounded-5 fond_logo text-center" style="height: 1.6rem;">
                            
                        <a href="categories.php" class="text-decoration-none">
                        <p class="fw-medium lettres_blanches">CATEGORIES</p>
                        </a>

                    </div>

                </div>
                
            </div>

        </div>

        <!-- boussole -->
        <div class="row">

            <div class="col-lg-12 mt-2 d-flex justify-content-center">

                <img src="assets/img/icones/boussole_1.png" class="" style="width: auto; height: 4rem;" alt="">
            
            </div>

        </div>

        <div class="row mt-2 d-flex justify-content-around">

            <div class="col-lg-5 text-center">
                
                <div class="card shadow-lg border-4 bordures rounded-5 zoom" style="width: 10rem; height: 10rem;">

                    <div>

                        <p class="card-text mb-1 fw-medium">Retrouvez tous<br> les plats</p>

                        <img src="assets/img/icones/icone_plats_transp_2.png" class="card-img mt-1" style="width: 37%;" alt="" title="">
                
                    </div>

                    <div class="mt-3 ms-2 me-2 rounded-5 fond_logo text-center" style="height: 1.6rem;">
                            
                        <a href="plats.php" class="text-decoration-none">
                        <p class="fw-medium lettres_blanches">PLATS</p>
                        </a>

                    </div>

                </div>
                
            </div>

            <div class="col-lg-5 text-center">
                
                <div class="card shadow-lg border-4 bordures rounded-5 zoom ms-2" style="width: 10rem; height: 10rem;">

                    <div>

                        <p class="card-text mb-1 fw-medium">Adressez nous<br> vos demandes</p>

                        <img src="assets/img/icones/icone_contact_transp_2.png" class="card-img mt-1 ms-2" style="width: 30%;" alt="" title="">
                
                    </div>

                    <div class="mt-3 ms-2 me-2 rounded-5 fond_logo text-center" style="height: 1.6rem;">
                            
                        <a href="contact.php" class="text-decoration-none">
                        <p class="fw-medium lettres_blanches">CONTACT</p>
                        </a>

                    </div>

                </div>
                
            </div>

        </div>

        </div>

        <div class="row mb-lg-5 mt-lg-5">

            <!-- div categorie plat mobile -->
            <div class="d-block d-sm-none">

                    <div id="promo_categorie_mobile" class="w-100"></div>

                    <div id="promo_plat_1_mobile" class="w-100"></div>

                    <div id="promo_plat_2_mobile" class="w-100" ></div>

            </div>

            <!-- div categorie plat desktop -->
            <div class="d-flex justify-content-around">

                    <div id="promo_categorie" class="w-25 d-none d-lg-block"></div>

                    <div id="promo_plat_1" class="w-25 d-none d-lg-block"></div>

                    <div id="promo_plat_2" class="w-25 d-none d-lg-block" ></div>

            </div>

        </div>

        <!-- images labels restaurateur-->
        <div class="row d-none d-lg-block">

            <div class="col-lg-12 mt-2 d-flex justify-content-around">

                <a href="https://www.maitresrestaurateurs.fr/" class="text-decoration-none">
                    <img src="assets/img/labels/label_resto.jpg" class="border border-dark rounded-2" alt="" style="width: 10rem; height: auto;">
                </a>

                <a href="https://www.artisanat.fr/metiers/labels-qualifications/titre-maitre-artisan" class="text-decoration-none">
                    <img src="assets/img/labels/artisanat_certifie.jpg" class="border border-dark rounded-2" alt="" style="width: 10rem; height: auto;">
                </a>

                <a href="https://www.bienvenue-a-la-ferme.com/" class="text-decoration-none">
                    <img src="assets/img/labels/producteurs_locaux.jpeg" class="border border-dark rounded-2" alt="" style="width: 10rem; height: auto;">
                </a>

            </div>

        </div>

    </main>

<?php

    include "assets/php/fichiers_php/footer.php";

?>
