<?php
// Initialize the session
session_start();

// Fonction pour vérifier si l'utilisateur est administrateur
function estAdmin() {
    return isset($_SESSION['Admin']) && $_SESSION['Admin'] === true;
}
 
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
    <link rel="stylesheet" href="Welcome.css">
</head>
<body>

<style>

/* Style pour le menu visible uniquement pour l'administrateur */
.admin-sidebar {
display: none;
}

</style>



<div class="sidebar">
        <a href="#" class="active">Accueil</a>
        <a href="logout.php" class="">Se déconnecter</a>
        <?php if (estAdmin()) { ?>
            <a href="register.php" class="admin-menu">Enregistrer un nouveau compte </a> 
            <a href="reset-password.php" class="admin-menu">Changer le mot de passe</a>
        <?php } ?> <!-- FAIRE CONDITION VISIBLE QUE POUR ADMIN avec du js ou php-->
</div>


<script>
        // Vérifier le rôle de l'utilisateur en JavaScript
        var estAdmin = <?php echo $estAdmin ? 'true' : 'false'; ?>;
        if (estAdmin) {
            // Afficher le menu réservé à l'administrateur
            var adminMenuItems = document.getElementsByClassName('sidebar');
            for (var i = 0; i < adminMenuItems.length; i++) {
                adminMenuItems[i].style.display = 'block';
            }
        }
</script>

    <div class="content">
    <h1 class="my-5">Bonjour, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b></h1>


    <h2>Liste des inscrits</h2>
    <button class="add-button">Ajouter</button>

    <div class="add-form">
        <h3>Ajouter un/une inscrit</h3>
            <form action="dtableinscrits/ajout_donnees_table_inscrits.php" method="post">
                <label for="id">id :</label>
                <input type="text" id="id" name="id">
                <label for="Nom">Nom :</label>
                <input type="text" id="Nom" name="Nom">
                <label for="Nom">Prenom :</label>
                <input type="text" id="Prenom" name="Prenom">
                <label for="Age">Age :</label>
                <input type="text" id="Age" name="Age">
                <label for="Email">Email :</label>
                <input type="text" id="Email" name="Email">
                <label for="Groupe">Groupe :</label>
                <input type="text" id="Groupe" name="Groupe">
                <label for="PeutJouerPEGI16">Peut Jouer aux jeux PEGI 16 :</label>
                <input type="text" id="PeutJouerPEGI16" name="PeutJouerPEGI16">
                <button type="submit">Ajouter</button>
            </form>
    </div>


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
            echo "<td><button class='edit-button' onclick='editData(" . $row["id"] . ")'>Modifier</button></td>";
            echo "<td><button class='delete-button' onclick='confirmDelete(" . $row["id"] . ")'>Supprimer</button></td>";
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
    </div>

<script type="text/javascript" src="jswelcome.js"></script>


</body>
</html>