<!DOCTYPE html>
<html lang="fr">
    <head>
    <title> Pavillon eSport</title>
        <link rel="stylesheet" href="page css.css" type="text/css"/>
        <link rel="icon" type="image/x-icon" href="favicon.ico">
        <script type="text/javascript" src="page js.js"></script>
        <meta name="author" content=" Ophélie NOEL">
        <meta charset="utf-8"/>
    </head>

<body>
<?php
 //à modifier
    $serveur = "localhost";
    $dbname = "formulairesiteesport";
    $user = "root";
    $pass = "root";
    
    try{
        //On se connecte à la BDD
        $dbco = new PDO("mysql:host=$serveur;dbname=$dbname",$user,$pass);
        $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
        //On crée une table form
        $form = "CREATE TABLE form(
            id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            nom TEXT,
            prenom TEXT,
            email TEXT,
            message1 TEXT)";
        $dbco->exec($form);
    }
    catch(PDOException $e){
        echo 'Erreur : '.$e->getMessage();
    }
?>
</body>
</html>