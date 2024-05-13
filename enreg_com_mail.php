<?php

    include "assets/php/fichiers_php/header.php";

?>

<main class="container-fluid pb-5">

<?php
require '/home/micka/Bureau/Projet-The-District/vendor/autoload.php';

// Assurez-vous d'avoir inclus la bibliothèque PHPMailer
require '/home/micka/Bureau/Projet-The-District/vendor/phpmailer/phpmailer/src/PHPMailer.php';
require '/home/micka/Bureau/Projet-The-District/vendor/phpmailer/phpmailer/src/SMTP.php';
require '/home/micka/Bureau/Projet-The-District/vendor/phpmailer/phpmailer/src/Exception.php';

// Créez une nouvelle instance PHPMailer
$mail = new PHPMailer\PHPMailer\PHPMailer();

// Configurez vos paramètres SMTP (si vous utilisez SMTP)
$mail->isSMTP();
$mail->Host = 'localhost';
$mail->SMTPAuth = true;
$mail->Username = 'email';
$mail->Password = 'password';
$mail->Port = 1025; // Ajustez le port si nécessaire

$image_plat = $_POST['imageCommande'];

$nom = $_POST['nomCommande'];
$client_mail = $_POST['mailCommande'];
$libelle = $_POST['libelleCommande'];
$prix = $_POST['prixCommande'];
$quantite = $_POST['quantiteCommande'];
$total = ($prix * $quantite);
$total_decimal = number_format($total, 2, '.', ' ');

// Définissez d'autres paramètres d'e-mail
$mail->setFrom('TheDistrict@gmail.com', 'The District');
$mail->addAddress($client_mail, 'Mr ' . $nom);
$mail->Subject = 'Confirmation de commande';
$mail->isHTML(true);

$message = "
<html>
<head>

    <style>
        body {
            font-family: sans-serif;
            font-weight: medium;
            background-color: white;
        }
        .email {
            width: 34rem; height: auto;
            background-color: white;
            padding: 1rem;
            border: 0.2rem solid #f5f5f5;
            border-radius: 1rem 1rem;
        }
        .div_en_tete {
            display: flex;
        }
        .logo_mail {
            width: 7rem; height: 7rem;
            border-radius: 1rem 1rem;
        }
        .politesse{
            margin-left: 1rem;
        }
        .card {
            width: 26rem; height: 11rem;
            border: 0.1rem solid #980848;
            border-radius: 1rem 1rem;
            display: flex;
            margin-top: 1.5rem;
        }
        .image_commande {
            width: 10rem; height: 10rem;
            padding: 0.5rem;
            border-radius: 1rem 1rem;
        }
        .card_body {
            padding: 0.5rem;
            display: flex;
            flex-direction: column;
        }
        .recapitulatif{
            text-decoration: underline;
        }
        .total{
            margin-left: 1rem;
        }
        .au_revoir{
            margin-left: 1rem;
        }
    </style>

</head>
<body>

    <div class='email'>
        
        <div class='div_en_tete'>

            <div>
                <img src=\"http://localhost:8000/assets/img/district/logo.png\" class='logo_mail'>
            </div>

            <div class='politesse'>
                <p>Mme / Mr $nom,</p>

                <p>Nous confirmons la validation de votre commande.</p>

                <p class='recapitulatif'>Récapitulatif :</p>
            </div>

        </div>

        <div class='card'>

            <div>

                <img src=\"http://localhost:8000/$image_plat\" class='image_commande'>
            
            </div>

            <div class='card_body'>

                <p>$libelle</p>
                <p>Quantité: $quantite</p>
                <p>Prix: $prix &#8364;</p>

            </div>

        </div>

            <p class='total'>Total TTC : $total_decimal €</p>
            
            <p class='au_revoir'>A bientôt chez The District.</p>

    </div>

</body>
</html>
";

$mail->Body = $message;

// Envoyez l'e-mail
if ($mail->send()) {
    $confirm_mail = "Un email de confirmation vous a été envoyé à&nbsp;<span class='fw-medium'>$client_mail</span>.";

} else {
    echo 'Erreur : ' . $mail->ErrorInfo;
}

// Informations de connexion à la base de données
$servername = "localhost";
$database = "the_district_base";
$username = "admin";
$password = "Afpa1234";

// Créez une connexion à la base de données MySQL
$conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);

// Définissez les options pour gérer les erreurs
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Requête d'insertion
$id = $_POST['idCommande'];
$prix = $_POST['prixCommande'];
$quantite = $_POST['quantiteCommande'];
$date = new DateTime();
$date_ok = $date->format('Y-m-d H:i:s');
$nom = $_POST['nomCommande'];
$prenom = $_POST['prenomCommande'];
$phone = $_POST['phoneCommande'];
$mail = $_POST['mailCommande'];
$adresse = $_POST['adresseCommande'];

$nom_client = $nom . ' ' . $prenom;

$total = ($prix * $quantite);

$sql = "INSERT INTO commande_test (id_plat, quantite, total, date_commande, nom_client, telephone_client, email_client, adresse_client)
        VALUES ('$id', '$quantite', '$total', '$date_ok', '$nom_client', '$phone', '$mail', '$adresse')";

// Exécutez la requête
$conn->exec($sql);
?>


<?php

    include "assets/php/fichiers_php/carousel_mobile.php";

?>

<div class="row main_validation_mobile d-sm-none">

    <div class="col-10 fs-3 message_validation_mobile">

        <?php

            echo "Votre commande est validée. $confirm_mail";

        ?>

    </div>

</div>

<div class="row main_validation d-none d-lg-block">

    <div class="col-lg-12 fs-3 message_validation">

        <?php

            echo "Votre commande est validée. $confirm_mail";

        ?>

    </div>

</div>

</main>

<?php

    include "assets/php/fichiers_php/footer.php";

?>
