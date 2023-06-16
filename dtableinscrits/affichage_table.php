<?php
// Sélectionnez les données de la table
$sql = "SELECT * FROM inscrits";
$result = $conn->query($sql);

// Vérifiez s'il y a des résultats
if ($result->num_rows > 0) {
    // Parcourez les lignes de résultats
    while ($row = $result->fetch_assoc()) {
        // Affichez les données
        echo "ID : " . $row["id"] . "<br>";
        echo "Nom : " . $row["Nom"] . "<br>";
        echo "Prénom". $row["Prenom"]."<br>";
        echo "Age". $row["Age"]."<br>";
        echo "Email".$row["Email"]."<br>";
        echo "Groupe" . $row ["Groupe"]."<br>";
        echo "Peut jouer à des jeux PEGI 16".["PeutJouerPEGI16"]."<br>";
        // Affichez d'autres colonnes si nécessaire
        echo "<br>";
    }
} else {
    echo "Aucun résultat trouvé.";
}

// Fermez la connexion à la base de données
$conn->close();
?>
