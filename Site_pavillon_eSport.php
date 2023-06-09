<!DOCTYPE html>
<html lang="fr">
    
    <head>
        <title> Pavillon eSport</title>
        <link rel="stylesheet" href="PageAccueilCss.css" type="text/css"/>
        <link rel="icon" type="image/x-icon" href="favicon.ico">
        <script type="text/javascript" src="pagejs.js"></script>
        <meta name="author" content=" Ophélie NOEL">
        <meta charset="utf-8"/>
    </head>


    <header>
        <div>
            
            <nav class="menu">
                <a href="Site_pavillon_eSport.php" alt="Logo Mairie de Ouistreham"><img src="logo-ORB-quadri.png"/></a>
                <form method="post" action="page php.php"></form>
            <!--bandeau avec image (en trouver une autre) et faire redirection vers le site de la mairie de ousitreham -->
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
        <br/>
        <br/>
        <br/>
        <br/>
        <div id="contentAccueil">
        <section class="hero">
            <div id=imgAcc>
                <img src="img1.jpg" alt="slider" class="transparent" id="ImageAccueil"/>
                <div >
                <span class="button" onclick="ClickPresentation()">Présentation</span>
                <span class="button" onclick="ClickHoIn()">Horaire & Inscription</span>
                </div>
            </div>
            <br/>
            <br/>
            <br/>
            <br/>
            <div class="hero">
                <img class="transparent" src="img3.jpg"/>
                <div class="TxtImageAccueil">
                    <h1>L'esport à porté de clavier</h1>
            </div>
        </section>
        </div>
    </body>
   
    <footer>
        <!-- bas de page classique de site web -->
        <main id="colonnefooter">
            <div id="wrapper">
                <div id="colonne1">
                    <a href="Salle-eSport.php">Présentation</a> <br><br>
                    <a href="Horaire-Inscription.php">Horaire & Inscription</a> <br><br>
                    <h4 style="color:orange;">Nous suivre :</h4>
                    <a href="https://www.facebook.com/lepavillonorb/"><img src="facebookicone.png" style="width:30px;height:30px"/></a>
                    <a href="https://twitter.com/OuistrehamRB"><img src="twittericone.png" style="width:30px;height:30px"/></a>
                    <a href="https://www.youtube.com/channel/UCicu38EACvQ1byF7T2Lzk4A"><img src="youtubeicone.png" style="width:30px;height:30px"/></a>
                    <a href="https://www.instagram.com/ouistrehamrb/"><img src="instagramicone.png" style="width:30px;height:30px"/></a>
                </div>
        
                <div id="colonne2">
                    <h4 id="contact" style="color:orange;">Nous contacter:</h4><br/>
                    <img src="localisationicone.png" style="width:20px;height:20px"/> Rue des Arts, 14150 Ouistreham <br/>
                    <img src="telephoneicone.png" style="width:20px;height:20px"/> 02 31 25 51 60 </br>
                    <img src="mailicone.png" style="width:20px;height:20px"/>accueil.csc@ville-ouistreham.fr <br/> 
                </div>
            
                <div id="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10412.115093748775!2d-0.2625332!3d49.275852!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x480a66a9b31e0a9f%3A0x50a7fb6f4b8cb9d3!2sLe%20Pavillon%20de%20Ouistreham%20Riva-Bella!5e0!3m2!1sfr!2sfr!4v1684946837964!5m2!1sfr!2sfr" width="200" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </main>
    </footer>

   
</html>