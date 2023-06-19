<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbinscrits";

// Créez une connexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifiez la connexion
if ($conn->connect_error) {
    die("La connexion a échoué : " . $conn->connect_error);
}
?>


