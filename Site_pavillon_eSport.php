<!DOCTYPE html>
<html lang="fr">
    
    <head>
        <title> Pavillon eSport</title>
        <link rel="stylesheet" href="page css.css" type="text/css"/>
        <link rel="icon" type="image/x-icon" href="favicon.ico">
        <script type="text/javascript" src="page js.js"></script>
        <script type="text/php" src="page php.php" ></script>
        <meta name="author" content=" Ophélie NOEL">
        <meta charset="utf-8"/>
    </head>


    <header>
        <div>
        <nav class="menu">
            <form method="post" action="page php.php"></form>
            <img src="logo-ORB-quadri.png"><!--bandeau avec image (en trouver une autre) et faire redirection vers le site de la mairie de ousitreham -->
            <!--menu déroulant faire en sorte même hauter que l'image -->
            
            <!--utilisation de liste -->
            <ul>
                <li class="mderoulant"> <a href="">Présentation</a>
                    <ul class="sous">
                        <li> <a href="Salle-eSport.php">La salle eSport</a> </li>
                        <li> <a href="Articles.php">Actualité</a> </li>
                    </ul>
                </li>
                <li> <a href="Horaire-Inscription.php">Horaire et inscription</a></li>
                <li> <a href="NousContacter.php">Nous Contacter</a></li>
            </ul>
        </nav> 
        </div>
    </header>

    <body>
        <!--image slide (trouver image salle) avec boutons redirigeant -->
        <div id="contentAccueil">
        <section id="slider">
            <div id=imgAcc style="text-align: center;">
                <img src="img1" alt="slider" id="ImageAccueil"/>
            </div>
            <div id="conteneur_slider">
                <button id="BtnPresentation"  onclick="ClickPresentation()">Présentation</button>
                <button id="BtnHo-In" onclick="ClickHoIn()">Horaire & Inscription</button>
            </div>
        </section>
        </div>
    </body>
   
    <footer>
                <!-- bas de page classique de site web -->
        <a href="Salle-eSport.php">Présentation</a> <br><br>
        <a href="Horaire-Inscription.php">Horaire & Inscription</a> <br><br>
                <!-- Sur le coté mettre adresse et petit plan -->
        <h4 id="contact">Nous contacter:</h4></br>
        <div id="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10412.115093748775!2d-0.2625332!3d49.275852!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x480a66a9b31e0a9f%3A0x50a7fb6f4b8cb9d3!2sLe%20Pavillon%20de%20Ouistreham%20Riva-Bella!5e0!3m2!1sfr!2sfr!4v1684946837964!5m2!1sfr!2sfr" width="200" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </footer>


   
</html>