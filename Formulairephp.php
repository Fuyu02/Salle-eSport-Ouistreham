<?php
            $serveur = "localhost";
            $dbname = "formulairedonnees";
            $user = "root";
            $pass = "";
    
            $nom = valid_donnees($_POST["nom"]);
            $prenom = valid_donnees($_POST["prenom"]);
            $email = valid_donnees($_POST["email"]);
            $message1 = valid_donnees($_POST["message1"]);
            
            function valid_donnees($donnees){
                $donnees = trim($donnees);
                $donnees = stripslashes($donnees);
                $donnees = htmlspecialchars($donnees);
                return $donnees;
            }
            
            try{
                //On se connecte à la BDD
                $dbco = new PDO("mysql:host=$serveur;dbname=$dbname",$user,$pass);
                $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
                //On insère les données reçues si les champs sont remplis
                /*Si les champs prenom et mail ne sont pas vides et si les donnees ont
                *bien la forme attendue...*/
                
                if(!empty($nom) && strlen($prenom) <= 20
                && preg_match("^[A-Za-z '-]+$",$prenom)  
                && !empty($prenom) <=20
                && preg_match("^[A-Za-z '-]+$",$nom)
                && !empty($email) 
                && !empty($message1)){
                    $sth = $dbco->prepare("
                        INSERT INTO form(nom, prenom, email, message1)
                        VALUES(:nom, :prenom, :mail, :message1)");
                    $sth->bindParam(':nom',$nom);
                    $sth->bindParam(':prenom',$prenom);
                    $sth->bindParam(':email',$email);
                    $sth->bindParam(':message1',$message1);
                    $sth->execute();

                    //On renvoie l'utilisateur vers la page de remerciement
                    header("Location:RedirectionFormulaire.php");
                }
            
                
                //On récupère les infos de la table 
                $sth = $dbco->prepare("SELECT nom,prenom, mail, message1 FROM form");
                $sth->execute();
                //On affiche les infos de la table
                $resultat = $sth->fetchAll(PDO::FETCH_ASSOC);
                $keys = array_keys($resultat);
                for($i = 0; $i < count($resultat); $i++){
                    $n = $i + 1;
                    echo 'Utilisateur n°' .$n. ' :<br>';
                    foreach($resultat[$keys[$i]] as $key => $value){
                        echo $key. ' : ' .$value. '<br>';
                    }
                    echo '<br>';
                }
            
            }   
            catch(PDOException $e){
                echo 'Impossible de traiter les données. Erreur : '.$e->getMessage();
            }
        
?>