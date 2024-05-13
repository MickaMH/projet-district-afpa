<?php

    require('assets/php/fichiers_php/PDO.php');

?>

<?php

// Récupérer l'ID de la catégorie depuis l'URL

if (isset($_GET['id'])) {

    $categorie_id = $_GET['id'];


    // Vérifier que l'ID de la catégorie est dans la plage 1-8

    if ($categorie_id < 1) {

        $categorie_id = 1;

    } elseif ($categorie_id > 8) {

        $categorie_id = 8;

    }


    // Sélectionner les plats de la catégorie spécifiée

    try {

        $query = "SELECT * FROM plat WHERE id_categorie = :categorie_id";

        $stmt = $pdo->prepare($query);

        $stmt->bindParam(':categorie_id', $categorie_id, PDO::PARAM_INT);

        $stmt->execute();

        $plats = $stmt->fetchAll(PDO::FETCH_ASSOC);


        // Afficher les plats

        foreach ($plats as $plat) {

            echo '<div class="col-lg-3 mb-5 mb-lg-5 mt-3 mt-lg-5">';

            echo '<div class="card w-auto border-4 bordures rounded-5">';

            echo '<img src="assets/img/plats/' . $plat['image'] . '" class="card-img-top p-3 rounded-5" alt="">';

            echo '<h5 class="card-text fs-3 fw-medium ms-3">' . $plat['libelle'] . '</h5>';

            echo '<p class="fw-medium mb-2 ms-3 me-3">' ."Prix: ". $plat['prix'] ." €". '</p>';

            echo '<p class="fw-medium mb-2 ms-3 me-3" style="cursor: pointer;" onclick="toggleDescription(this)">Voir la description du plat ▼</p>';

            echo '<div class="fw-medium fst-italic mb-3 ms-3 me-3" id="description-' . $plat['id'] . '" style="display: none;">' . $plat['description'] . '</div>';

            echo '<a href="commande.php?id=' . $plat['id'] . '" class="card-text fs-5 fw-medium text-center shadow-lg p-2 m-3 mt-0 rounded-4 text-decoration-none fond_logo lettres_blanches">' . "Commander" . '</a>';

            echo '</div>';

            echo '</div>';

        }

    } catch (PDOException $e) {

        // Gérer l'erreur

        echo "Erreur : " . $e->getMessage();

    }

}

// Lorsque l'utilisateur clique sur le bouton "Suivant"
if (isset($_GET['page'])) {
    $page = $_GET['page']; // Page actuelle
    $items_per_page = 10; // Nombre d'éléments par page

    // Calculer l'offset pour la requête SQL
    $offset = ($page - 1) * $items_per_page;

    // Sélectionner les catégories pour la page actuelle
    try {
        $query = "SELECT * FROM categorie LIMIT :offset, :items_per_page";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':offset', $offset, PDO::PARAM_INT);
        $stmt->bindParam(':items_per_page', $items_per_page, PDO::PARAM_INT);
        $stmt->execute();
        $categories = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // Afficher les catégories ici...
        foreach ($categories as $categorie) {
            echo '<div class="categorie">' . $categorie['nom'] . '</div>';
        }
    } catch (PDOException $e) {
        // Gérer l'erreur
        echo "Erreur : " . $e->getMessage();
    }

    // Lorsque l'utilisateur clique sur le bouton "Précédent"
if (isset($_GET['precedent'])) {
    $categorie_id -= 1; // Décrémenter l'ID de la catégorie
}

// Lorsque l'utilisateur clique sur le bouton "Suivant"
if (isset($_GET['suivant'])) {
    $categorie_id += 1; // Incrémenter l'ID de la catégorie
}

// Sélectionner les plats de la catégorie spécifiée
try {
    $query = "SELECT * FROM plat WHERE id_categorie = :categorie_id";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':categorie_id', $categorie_id, PDO::PARAM_INT);
    $stmt->execute();
    $plats = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Afficher les plats (comme vous l'avez déjà fait)
    // ...
} catch (PDOException $e) {
    // Gérer l'erreur
    echo "Erreur : " . $e->getMessage();
}
}

?>
