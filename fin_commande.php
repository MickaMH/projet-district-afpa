<?php

    include "assets/php/fichiers_php/header.php";

?>

<main class="container-fluid pb-5">

    <?php

        include "assets/php/fichiers_php/enreg_com_mail.php";

    ?>


    <div class="row main_validation_mobile d-sm-none">

        <div class="fs-4 message_validation_mobile">

            <?php

                echo "Votre commande est validée. $confirm_mail_mobile";

            ?>

        </div>

    </div>


    <div class="row main_validation d-none d-lg-block ">

        <div class="bloc_message_validation">

            <div class="fs-3 message_validation">

                <?php

                    echo "Votre commande est validée. $confirm_mail";

                ?>

            </div>

        </div>

    </div>

    <div class="row">

        <div class="col-12 col-lg-12 d-flex justify-content-center">

            <a class="d-flex justify-content-center align-items-center fw-medium mx-auto shadow-lg fs-5 rounded-4 bouton_categories" 
                style="width: 10rem; height: 3rem;" href="index.php" role="button">Accueil</a>
                        
        </div>        
        

    </div>

</main>

<?php

    include "assets/php/fichiers_php/footer.php";

?>