<?php
// Récupérez l'ID de l'enregistrement à supprimer
$id = $_GET["id"];

// Supprimez l'enregistrement de la table
$sql = "DELETE FROM inscrits WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "Enregistrement supprimé avec succès.";
} else {
    echo "Erreur lors de la suppression de l'enregistrement : " . $conn->error;
}

// Fermez la connexion à la base de données
$conn->close();
?>