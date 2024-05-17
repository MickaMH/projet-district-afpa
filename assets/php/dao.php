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

function get_plats_categorie($pdo, $categorie_id = 1, $page = 1) {
    // Vérifier que l'ID de la catégorie est dans la plage 1-8
    if ($categorie_id < 1) {
        $categorie_id = 1;
    } elseif ($categorie_id > 8) {
        $categorie_id = 8;
    }

    // Calculer le nombre total d'éléments pour la pagination
    $items_per_page = 10;
    $offset = ($page - 1) * $items_per_page;
    $total_items_query = "SELECT COUNT(*) AS total_items FROM plat WHERE id_categorie = :categorie_id ";
    $total_items_stmt = $pdo->prepare($total_items_query);
    $total_items_stmt->bindParam(':categorie_id', $categorie_id, PDO::PARAM_INT);
    $total_items_stmt->execute();
    $total_items = $total_items_stmt->fetchColumn();

    // Sélectionner les plats de la catégorie spécifiée
    try {
        $query = "SELECT * FROM plat WHERE id_categorie = :categorie_id LIMIT :offset, :items_per_page";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':categorie_id', $categorie_id, PDO::PARAM_INT);
        $stmt->bindParam(':offset', $offset, PDO::PARAM_INT);
        $stmt->bindParam(':items_per_page', $items_per_page, PDO::PARAM_INT);
        $stmt->execute();
        $plats = $stmt->fetchAll(PDO::FETCH_ASSOC);

        

        // Afficher les liens de pagination (exemple)
        for ($i = 1; $i <= ceil($total_items / $items_per_page); $i++) {
            if ($i == $page) {
                echo '<span>' . $i . '</span>';
            } else {
                echo '<a href="?id=' . $categorie_id . '&page=' . $i . '">' . $i . '</a>';
            }
        }
    } catch (PDOException $e) {
        // Gérer l'erreur
    echo "Erreur : " . $e->getMessage();
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

