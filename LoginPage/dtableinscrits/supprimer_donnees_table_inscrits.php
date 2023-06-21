

<?php
// Vérifier si l'ID est passé en paramètre
if (isset($_POST['id'])) {
    // Récupérer l'ID de la ligne à supprimer
    $id = $_POST['id'];

    // Vérifier si le formulaire de suppression a été soumis
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Connexion à la base de données
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "dbinscrit";

        // Créer la connexion
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Vérifier la connexion
        if ($conn->connect_error) {
            die("Erreur de connexion à la base de données : " . $conn->connect_error);
        }

        // Préparer la requête de suppression
        $sql = "DELETE FROM inscrits WHERE id=$id";

        // Préparer et exécuter la requête préparée
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $id);
        //$stmt->bind_param("ssssssi", $Nom,$Prenom,$Age, $Email,$Groupe,$PeutJouerPEGI16, $id); //ERREUR ICI
        $stmt->execute();

        // Vérifier si la suppression a réussi
        if ($stmt->affected_rows > 0) {
            // Rediriger vers la page principale après la suppression
            header("Location: welcome.php");
            exit;
        } else {
            echo "Erreur lors de la suppression des données.";
        }

        // Fermer la requête et la connexion à la base de données
        $stmt->close();
        $conn->close();
    }

    // Code pour récupérer les données de la ligne à supprimer depuis la table SQL
    // Connexion à la base de données
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "dbinscrit";

    // Créer la connexion
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Vérifier la connexion
    if ($conn->connect_error) {
        die("Erreur de connexion à la base de données : " . $conn->connect_error);
    }

    // Préparer la requête de sélection
    $sql = "SELECT Nom, Prenom, Age, Email, Groupe, PeutJouerPEGI16 FROM inscrits WHERE id=?";

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
} else {
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

        /* Style du bouton de suppression */
        .delete-button {
            background-color: #ff5555;
            color: #fff;
            border: none;
            border-radius: 4px;
            padding: 6px 12px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .delete-button:hover {
            background-color: #ff0000;
        }
    </style>
</head>
<body>
    <h2>Supprimer les données</h2>

    <p>Êtes-vous sûr de vouloir supprimer les données suivantes :</p>
    <p>Nom : <?php echo $Nom; ?></p>
    <p>Email : <?php echo $Email; ?></p>

    <form method="POST">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <button class="delete-button" type="submit">Supprimer</button>
    </form>
</body>
</html>