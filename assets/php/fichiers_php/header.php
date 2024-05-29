<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
            rel="stylesheet" 
            integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
            crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/colors.css" type="text/css" media="all">

    <title>The District</title>
</head>


<body class="m-1 bordures_body parallax_desktop">


    <!-- HEADER -->
    <header class="container-fluid">

        <div class="row">

            <!-- navbar -->
            <div class="navbar navbar-expand-lg">

                <div class="container-fluid">
    
                    <button class="navbar-toggler border-3 hamburger" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    
                    <span class="navbar-toggler-icon hamburger"></span>
    
                    </button>

                    <!-- images logo desktop et mobile -->
                    <div class="col-3 col-lg-2">
                    
                        <img src="assets/img/district/logo.png" alt="Logo The District" 
                                title="Logo The District" class="w-100 navbar-brand img-fluid d-none d-lg-block bordures_logo">

                        <img src="assets/img/district/logo.png" alt="Logo The District" 
                                title="Logo The District" class="w-100 navbar-brand img-fluid d-block d-sm-none bordures_logo">        
                
                    </div>  

                    <div class="col-9 col-lg-10 flex-column">

                        <div class="row">

                            <!-- liens navbar -->
                            <div class="collapse navbar-collapse justify-content-center ms-2 mb-lg-5" id="navbarTogglerDemo03">
    
                                <ul class="navbar-nav border-4 fs-1 fw-medium gap-lg-5">
    
                                    <li class="nav-item">

                                        <a class="liens_header" aria-current="page" href="index.php">ACCUEIL</a>

                                    </li>
    
                                    <li class="nav-item">

                                        <a class="liens_header" aria-current="page" href="categories.php">CATÉGORIES</a>

                                    </li>
    
                                    <li class="nav-item">

                                        <a class="liens_header" aria-current="page" href="plats.php">PLATS</a>

                                    </li>
    
                                    <li class="nav-item">

                                        <a class="liens_header" aria-current="page" href="contact.php">CONTACT</a>

                                    </li>
    
                                </ul>
                    
                            </div>

                        </div>
                            
          
                        <!-- barre de recherche -->
                        <div class="row justify-content-center mb-lg-5">

                            <div class="position-absolute z-3 input-group d-flex flex-column 
                                        d-none d-lg-block champ_recherche" style="width: 30rem; height: auto;">

                                <div class="d-flex p-1 ms-2">

                                    <span class="input-group-text fs-4 sans_bordures bg-white">&#x1F50E;</span>

                                    <input type="text" class="ms-1 fs-4 fw-medium form-control sans_bordures" 
                                            placeholder="Rechercher un plat" aria-label="Rechercher" id="recherche_dynamique">
                
                                </div>

                                <div id="suggestions" class="fs-4 fw-medium li_recherche"></div>
                        
                            </div>

                        </div>
    
                    </div>

                </div>
    
            </div>

        </div>
        
    </header>

    
    <!-- NAV -->
    <nav class="container-fluid">
    
        <div class="row fond_logo d-flex align-items-center">

            <!-- videos -->
            <div class="col-4 d-none d-lg-block">

                <div class="actually mx-auto mb-5">
                    <p class="fs-2 fw-medium lettres_blanches">" En ce moment "</p>
                </div>

                <div class="bordures_promo mx-auto">
                    <p class="promo fw-bold mx-auto mt-3">-10%</p>
                    <p class="phrase_promo lettres_blanches fw-bold text-center">Sur catégorie VEGGIE</p>
                </div>

            </div>
    
            <div class="col-4 display-inline-block d-none d-lg-block bordure_haut">

                <video autoplay loop muted class="img-fluid">

                    <source src="assets/img/videos/video_the_district_projet.mp4" type="video/mp4">
                    <p>Votre navigateur ne prend pas en charge la vidéo.</p>

                </video>                
    
            </div>

            <div class="col-4 d-none d-lg-block text-center">

                <img src="assets/img/district/ecriture_district_blanc.png" class="w-75"><br>
                <p class="lettres_blanches fs-3">1 rue de la paix 80000 Amiens</p>
                <p class="lettres_blanches fs-3">Tel: 06.12.34.56.78</p>
                <p class="lettres_blanches fs-3">Email: TheDistrict@gmail.com</p>

            </div>


            <!-- barre de recherche dans video -->
            <!-- <div class="position-absolute input-group d-flex flex-column align-self-center justify-content-center
                        w-50 d-none d-lg-block champ_recherche">

                <div class="d-flex p-1 ms-2">

                    <span class="input-group-text fs-4 sans_bordures bg-white" id="basic-addon1">&#x1F50E;</span>

                    <input type="text" class="ms-1 fs-4 fw-medium form-control sans_bordures" 
                            placeholder="Rechercher un plat" aria-label="Rechercher" id="recherche_dynamique">
                
                </div>

                <div id="suggestions" class="fs-4 fw-medium"></div>
                        
            </div> -->

            <?php

                include "assets/php/fichiers_php/carousel_mobile.php";

            ?>   

        </div>
    
    </nav>