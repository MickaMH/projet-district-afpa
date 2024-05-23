<?php

// Connexion à la base de données (PDO)
try {
    $pdo = new PDO("mysql:host=localhost;dbname=the_district_base", "admin", "Afpa1234");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
} catch (PDOException $e) {
    // Gérer l'erreur (par exemple, journaliser ou afficher un message d'erreur)
    echo "Erreur : " . $e->getMessage();
}

?>