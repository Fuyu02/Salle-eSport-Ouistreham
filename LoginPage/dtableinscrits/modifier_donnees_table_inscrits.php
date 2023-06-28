<?php
// Vérifier si l'ID est passé en paramètre
if (isset($_GET['id'])){
    // Récupérer l'ID de la ligne à modifier
    $id = $_GET['id'];


    // Vérifier si le formulaire de modification a été soumis
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupérez les nouvelles données du formulaire
    $id = $_POST["id"];
    $nouveauNom = $_POST["Nom"];
    $nouveauPrenom= $_POST["Prenom"];
    $nouveauAge=$_POST["Age"];
    $nouvelEmail= $_POST["Email"]; 
    $nouveauGroupe=$_POST["Groupe"];
    $nouveauPeutJouerPEGI16=$_POST["PeutJouerPEGI16"];

    //// IL FAUT ETABLIR UNE CONNEXION POUR MODIFIER DANS LA TABLE
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

    // Préparer la requête de modification
    $sql = "UPDATE inscrits SET Nom='?',Prenom='?',Age='?', Email='?',Groupe='?',PeutJouerPEGI16='?' WHERE id=?";
    
    // Préparer et exécuter la requête préparée
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssisssi", $nouveauNom,$nouveauPrenom,$nouveauAge, $nouvelEmail,$nouveauGroupe,$nouveauPeutJouerPEGI16, $id); //ERREUR
    $stmt->execute();

    // Vérifier si la modification a réussi
    if ($stmt->affected_rows > 0) {
    // Rediriger vers la page principale après la modification
        header("Location: welcome.php");
        exit;
    } 
    else {
        echo "Erreur lors de la modification des données.";
    }

    // Fermer la requête et la connexion à la base de données
    $stmt->close();
    $conn->close();
}



// Code pour récupérer les données de la ligne à modifier depuis la table SQL
    // Connexion à la base de données
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "dbinscrit";
    // Créer la connexion
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Vérifier la connexion
    if ($conn->connect_error) {
        die("La connexion a échoué : " . $conn->connect_error);
    }
    // Préparer la requête de sélection
    $sql= "SELECT Nom, Prenom, Age, Email, Groupe, PeutJouerPEGI16  FROM inscrits WHERE id=?";

    // Préparer et exécuter la requête préparée
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();

    // Récupérer les résultats de la requête
    $stmt->bind_result($Nom,$Prenom, $Age,$Email,$Groupe,$PeutJouerPEGI16);
    $stmt->fetch();

    // Fermer la requête et la connexion à la base de données
    $stmt->close();
    $conn->close();
    } 
    else {
       // Rediriger vers la page principale si aucun ID n'est spécifié
       header("Location: welcome.php");
       exit;
   }

?>




<!DOCTYPE html>
<html>
<head>
    <style>
        /* Style général de la page */
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 20px;
        }

        /* Style du formulaire de modification */
        form {
            max-width: 400px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            padding: 20px;
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input[type="text"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 4px;
            margin-bottom: 15px;
        }

        button {
            padding: 8px 16px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 14px;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h2>Modifier les données</h2>
<!-- PROBLEME Essayer d'accéder à l'offset du tableau sur une valeur de type null -->
    <form method="POST">         

        <label for="id">id :</label>
        <input type="text" name="id" value="<?php echo $id; ?>"readonly>

        <label for="Nom">Nom :</label>
        <input type="text" name="Nom" id="Nom" value="<?php echo $Nom; ?>">

        <label for="Prenom">Prenom :</label>
        <input type="text" name="Prenom" id="Prenom" value="<?php echo $Prenom; ?>">

        <label for="Age">Age :</label>
        <input type="text" name="Age" value="<?php echo $Age; ?>">

        <label for="Email">Email :</label>
        <input type="text" name="Email" id="Email" value="<?php echo $Email; ?>">

        <label for="Groupe">Groupe :</label>
        <input type="text" name="Groupe" value="<?php echo $Groupe; ?>">

        <label for="PeutJouerPEGI16">Peut jouer à des jeux PEGI 16 :</label>
        <input type="text" name="PeutJouerPEGI16" value="<?php echo $PeutJouerPEGI16; ?>">

        <button type="submit">Modifier</button>


    </form>
</body>

</html>

