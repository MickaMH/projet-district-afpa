<?php

    include "assets/php/fichiers_php/header.php";

?>

<!-- MAIN -->
<main class="container-fluid pb-lg-5">

    <!-- intitulé main -->
    <div class="row d-flex justify-content-center">

        <div class="col-12 col-lg-4 fs-1 fw-medium mb-3 mb-lg-3 mt-3 mt-lg-3 text-center">

            <p class="lettres fond_intitule">LES CATÉGORIES DE PLAT</p>
            
        </div>

    </div>

    <div class="row d-flex justify-content-around">

        <?php
                    
            require 'assets/php/dao.php';

            $categories = get_categories();

            foreach ($categories as $category) {
                        
            $libelle = $category['libelle'];
            $libelleMaj = strtoupper($libelle);

            echo '<div class="col-lg-4 mb-5 mb-lg-5 mt-3 mt-lg-5 d-flex justify-content-around">';
                echo '<div class="card w-auto border-4 bordures rounded-5">';
                    echo '<img src="assets/img/categories/' . $category['image'] . '" class="card-img-top p-3 rounded-5" alt="">';
                    echo '<a href="plats_par_categorie.php?id=' . $category['id'] . '" class="card-text fs-5 fw-medium text-center shadow-lg p-2 m-3 mt-0 rounded-4 text-decoration-none text-uppercase fond_logo lettres_blanches">' . $libelleMaj . '</a>';
                echo '</div>';
            echo '</div>';
            }

        ?>

    </div>

</main>

<?php

    include "assets/php/fichiers_php/footer.php";

?>