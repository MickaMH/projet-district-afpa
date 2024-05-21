<?php

// --------------------------------------------------------------------------------------------------------------------------
// Fichier PDO.php

require('assets/php/fichiers_php/PDO.php');

// ---------------------------------------------------------------------------------------------------------------------------------
// Fonction Affichage Catégories

function get_categories() {
    global $pdo; // Utilisez la connexion PDO définie précédemment

    try {
        $query = "SELECT * FROM categorie WHERE active='Yes' ";
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);

    } catch (PDOException $e) {
        // Gérer l'erreur (par exemple, journaliser ou afficher un message d'erreur)
        echo "Erreur : " . $e->getMessage();
        return [];
    }
}

// ------------------------------------------------------------------------------------------------------------------------------
// Fonction Affichage Plats

function get_plats() {
    global $pdo; // Utilisez la connexion PDO définie précédemment

    try {
        $query = "SELECT * FROM plat WHERE active='Yes' ";
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);

    } catch (PDOException $e) {
        // Gérer l'erreur (par exemple, journaliser ou afficher un message d'erreur)
        echo "Erreur : " . $e->getMessage();
        return [];
    }
}

// ------------------------------------------------------------------------------------------------------------------------------
// Fonction Affichage Libellé Catégorie

function get_libelle() {
    global $pdo; // Utilisez la connexion PDO définie précédemment
    if (isset($_GET['id'])) {
        $categorieId = $_GET['id'];

        // Requête pour récupérer les détails du plat associé à l'ID
        $query = "SELECT libelle FROM categorie WHERE id = :categorieId ";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':categorieId', $categorieId, PDO::PARAM_INT);
        $stmt->execute();
        $resultat = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($resultat) {
            $libelleCategorie = $resultat['libelle'];
            $libelleCategorieMaj = strtoupper($libelleCategorie);
            echo "<div class='fs-1 fw-medium ms-sm-0 ms-lg-3 mt-lg-3 mb-3 lettres text-center'>$libelleCategorieMaj</div>";

        } else {
            echo "<div class='fs-1 fw-medium ms-sm-0 ms-lg-3 mt-lg-3 mb-3 lettres text-center'>FIN DES CATEGORIES</div>";
        }

        } else {
            echo "<div>Aucun ID de catégorie spécifié dans l'URL.</div>";
        }
}

// ------------------------------------------------------------------------------------------------------------------------------------
// Fonction Affichage Plats par Catégorie

function get_plats_categorie() {
    global $pdo; // Utilisez la connexion PDO définie précédemment
    if (isset($_GET['id'])) {
        $platId = $_GET['id'];
    try {
        $query = "SELECT * FROM plat WHERE id_categorie = $platId";
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);

    }  catch (PDOException $e) {
        // Gérer l'erreur (par exemple, journaliser ou afficher un message d'erreur)
        echo "Erreur : " . $e->getMessage();
        return [];
    }
}
}

// -----------------------------------------------------------------------------------------------------------------------------------
// Fonction Affichage Commande

function get_commande() {
    global $pdo; // Utilisez la connexion PDO définie précédemment
    if (isset($_GET['id'])) {
        $platId = $_GET['id'];

        // Requête pour récupérer les détails du plat associé à l'ID
        $query = "SELECT * FROM plat WHERE id = :platId";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':platId', $platId, PDO::PARAM_INT);
        $stmt->execute();
        $plat = $stmt->fetch(PDO::FETCH_ASSOC);

        return $plat; // Retourne les détails du plat
    } else {
        return false; // ID du plat non spécifié dans l'URL
    }
}

// ----------------------------------------------------------------------------------------------------------------------------------------
// Fonction Affichage Index

function get_index() {


}


?>

