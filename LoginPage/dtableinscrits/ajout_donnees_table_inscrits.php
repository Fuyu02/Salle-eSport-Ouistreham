
<?php
//// IL FAUT ETABLIR UNE CONNEXION POUR AJOUTER DANS LA TABLE
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbinscrit";

// Créez une connexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifiez la connexion
if ($conn->connect_error) {
    die("La connexion a échoué : " . $conn->connect_error);
}
?>


<?php
// Récupérez les données du formulaire
$id=$_POST["id"];
$Nom = $_POST["Nom"];
$Prenom = $_POST["Prenom"];
$Age = $_POST["Age"];
$Email = $_POST["Email"];
$Groupe = $_POST["Groupe"];
$PeutJouerPEGI16 = $_POST["PeutJouerPEGI16"];

// Insérez les données dans la table
$sql = "INSERT INTO inscrits (id, Nom ,Prenom ,Age ,Email ,Groupe ,PeutJouerPEGI16) VALUES ('$id','$Nom', '$Prenom', '$Age','$Email','$Groupe','$PeutJouerPEGI16')";

if ($conn->query($sql) === TRUE) {      //ERREUR SUR LA LIGNE
    echo "Nouvel enregistrement créé avec succès.";
} 
else {
    echo "Erreur lors de la création de l'enregistrement : " . $conn->error;
}

// Fermez la connexion à la base de données
$conn->close();
?>