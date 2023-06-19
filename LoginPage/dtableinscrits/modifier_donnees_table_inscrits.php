<?php
// Récupérez les nouvelles données du formulaire
$id = $_POST["id"];
$nouveauNom = $_POST["nouveau_Nom"];
$nouveauPrenom= $_POST["nouveau_Prenom"];
$nouveauAge=$_POST["nouveau_Age"];
$nouvelEmail = $_POST["nouvel_Email"];
$nouveauGroupe=$_POST["nouveau_Groupe"];
$nouveauPeutJouerPEGI16=$_POST["nouveau_PeutJouerPEGI16"];



// Mettez à jour les données dans la table
$sql = "UPDATE inscrits SET Nom='$nouveauNom',Prenom='$nouveauPrenom',Age='$nouveauAge', Email='$nouvelEmail',Groupe='$nouveauGroupe',PeutJouerPEGI16='$nouveauPeutJouerPEGI16', WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "Enregistrement mis à jour avec succès.";
} else {
    echo "Erreur lors de la mise à jour de l'enregistrement : " . $conn->error;
}

// Fermez la connexion à la base de données
$conn->close();
?>