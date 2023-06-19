<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<?php
// Pour la table inscrit dans la bdd bdinscrit
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

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="Welcome.css">
</head>
<body>
    <h1 class="my-5">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>
    <p>
        <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
        <a href="logout.php" class="btn btn-danger ml-3">Sign Out of Your Account</a>
    </p>


    <h2>Liste des inscrits</h2>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Age</th>
            <th>Email</th>
            <th>Groupe</th>
            <th>Peut jouer jeux PEGI 16</th>
        </tr>
    </thead>
    
    <tbody>
    <?php
    // Sélectionnez les données de la table
    $sql = "SELECT * FROM inscrits";
    $result = $conn->query($sql);

    // Vérifiez s'il y a des résultats
    if ($result->num_rows > 0) {
         // Parcourez les lignes de résultats
        while ($row = $result->fetch_assoc()) {
            // Affichez les données
            echo "<tr>";
            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . $row["Nom"] . "</td>";
            echo "<td>" . $row["Prenom"] . "</td>";
            echo "<td>" . $row["Age"] . "</td>";
            echo "<td>" . $row["Email"] . "</td>";
            echo "<td>" . $row["Groupe"] . "</td>";
            echo "<td>" . $row["PeutJouerPEGI16"] . "</td>";
            echo "</tr>";
        }
    } 
    else {
        echo "<tr><td colspan='3'>Aucun résultat trouvé.</td></tr>";
    }

    // Fermez la connexion à la base de données
    $conn->close();
    ?>
    </tbody>
</table>


</body>
</html>