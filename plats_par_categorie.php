<?php

    include "assets/php/fichiers_php/header.php";

?>

<!-- MAIN -->
<main class="container-fluid pb-5">

        <div class="row d-flex justify-content-center">

            <?php
            
                require 'assets/php/dao.php';
            
                $libelle_categorie = get_libelle();

            ?>

        </div>

        <div class="row d-flex justify-content-around">

            <?php

                $plats = get_plats_categorie();

                foreach ($plats as $plat) {

                echo '<div class="col-lg-3 mb-5 mb-lg-5 mt-3 mt-lg-5">';
                    echo '<div class="card w-auto border-4 bordures rounded-5">';
                        echo '<img src="assets/img/plats/' . $plat['image'] . '" class="card-img-top p-3 rounded-5" alt="">';
                        echo '<h5 class="card-text fs-3 fw-medium ms-3">' . $plat['libelle'] . '</h5>';
                        echo '<p class="fw-medium mb-2 ms-3 me-3">Prix: ' . $plat['prix'] . ' €</p>';
                        echo '<p class="fw-medium mb-2 ms-3 me-3" style="cursor: pointer;" onclick="toggleDescription(this)">Voir la description du plat ▼</p>';
                        echo '<div class="fw-medium fst-italic mb-3 ms-3 me-3" id="description-' . $plat['id'] . '" style="display: none;">' . $plat['description'] . '</div>';
                        echo '<a href="commande.php?id=' . $plat['id'] . '" class="card-text fs-5 fw-medium text-center shadow-lg p-2 m-3 mt-0 rounded-4 text-decoration-none fond_logo lettres_blanches">Commander</a>';
                    echo '</div>';
                echo '</div>'; 
                } 

            ?>

        </div>

        <!-- bouton retour -->
        <div class="row mt-lg-5 mb-lg-5">

            <!-- <div class="col-12 col-lg-12 d-flex justify-content-center">

                <a class="d-flex justify-content-center align-items-center fw-medium mx-auto shadow-lg fs-5 rounded-4 bouton_categories" 
                    style="width: 10rem; height: 3rem;" href="categories.php" role="button">Retour</a>
                        
            </div> -->

            <div class="col-6 col-lg-6 d-flex">

                <a class="d-flex justify-content-center align-items-center fw-medium mx-auto shadow-lg fs-5 bouton_precedent" 
                    id="precedent" style="width: 10rem; height: 3rem;"  href="index.php" role="button">Accueil</a>

            </div>

            <div class="col-6 col-lg-6 d-flex">

                <a class="d-flex justify-content-center align-items-center fw-medium mx-auto shadow-lg fs-5 bouton_suivant" 
                    id="suivant" style="width: 10rem; height: 3rem;"  href="categories.php" role="button">Catégories</a>

            </div>

        </div>

</main>

<?php

    include "assets/php/fichiers_php/footer.php";

?>

  