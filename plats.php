<?php

    include "assets/php/fichiers_php/header.php";

?>

<!-- MAIN -->
<main class="container-fluid pb-lg-5">

    <!-- intitulé main -->
    <div class="row d-flex justify-content-center">

        <div class="col-8 col-lg-3 fs-1 fw-medium mb-3 mb-lg-3 mt-3 mt-lg-3 text-center">

            <p class="lettres fond_intitule">TOUS LES PLATS</p>
            
        </div>

    </div>

    <div class="row d-flex justify-content-around">

        <?php
                
            require 'assets/php/dao.php';

            $plats = get_plats();

            foreach ($plats as $plat) {
    
            echo '<div class="col-lg-3 mb-5 mb-lg-5 mt-3 mt-lg-5 ms-lg-2 me-lg-2">';
                echo '<div class="card w-auto border-4 bordures rounded-5">';
                    echo '<img src="assets/img/plats/' . $plat['image'] . '" class="card-img-top p-3 rounded-5" alt="">';
                    echo '<h5 class="card-text fs-3 fw-medium ms-3">' . $plat['libelle'] . '</h5>';
                    echo '<p class="fw-medium mb-2 ms-3 me-3">' ."Prix: ". $plat['prix'] ." &#8364;". '</p>';
                    echo '<p class="fw-medium mb-2 ms-3 me-3" style="cursor: pointer;" onclick="toggleDescription(this)">Voir la description du plat &#x25BC;</p>';
                    echo '<div class="fw-medium fst-italic mb-3 ms-3 me-3" id="description-' . $plat['id'] . '" style="display: none;">' . $plat['description'] . '</div>';
                    echo '<a href="commande.php?id=' . $plat['id'] . '" class="card-text fs-5 fw-medium text-center shadow-lg p-2 m-3 mt-0 rounded-4 text-decoration-none fond_logo lettres_blanches">' . "Commander" . '</a>';
                echo '</div>';
            echo '</div>';
            }

        ?>
                
    </div>

</main>

<?php

    include "assets/php/fichiers_php/footer.php";

?>

  