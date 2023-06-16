<?php
// Récupérez les données du formulaire
$Nom = $_POST["Nom"];
$Prenom = $_POST["Prenom"];
$Age = $_POST["Age"];
$Email = $_POST["Email"];
$Groupe = $_POST["Groupe"];
$PeutJouerPEGI16 = $_POST["PeutJouerPEGI16"];

// Insérez les données dans la table
$sql = "INSERT INTO inscrit (Nom ,Prenom ,Age ,Email ,Groupe ,PeutJouerPEGI16) VALUES ('$Nom', '$Prenom','$Email','$Groupe','$$PeutJouerPEGI16')";

if ($conn->query($sql) === TRUE) {
    echo "Nouvel enregistrement créé avec succès.";
} else {
    echo "Erreur lors de la création de l'enregistrement : " . $conn->error;
}

// Fermez la connexion à la base de données
$conn->close();
?>