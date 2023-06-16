<!DOCTYPE html>
<html lang="fr">
    
    <head>
        <title> Pavillon eSport</title>
        <link rel="stylesheet" href="csspage/PresentationCss.css" type="text/css"/>
        <link rel="stylesheet" href="csspage/GeneralCss.css" type="text/css"/>
        <link rel="icon" type="image/x-icon" href="images/favicon.ico">
        <script type="text/javascript" src="javascriptsheet/pagejs.js"></script>
        <meta name="author" content=" Ophélie NOEL">
        <!-- Pour la police d'écriture -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Diphylleia&display=swap" rel="stylesheet">
        <meta charset="utf-8"/>
        <!-- Pour les cookies du site et cookie consent pour le css et le visuel global -->
        <script type="text/javascript" src="//cookie.eurowebpage.com/cookie.js?skin=cookielaw3&amp;box_radius=23&amp;position=bottom_right&amp;delay=4&amp;accept_background=f86e00"></script>
    </head>


    <header>
    <nav class="menu">
        <a href="Site_pavillon_eSport.php" alt="Logo Mairie de Ouistreham"><img src="images/logo-ORB-quadri.png"/></a>
        <div class="connexion">
            <button type="button" id="login-button" class="boutonlogin" onclick="ClickLogin()">Se connecter</button>
        </div>
            <!--bandeau avec image (en trouver une autre) et faire redirection vers le site de la mairie de ousitreham -->
            <!--menu déroulant faire en sorte même hauter que l'image -->
            
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
    </header>

    <body>
        <br>
        <br>
        <br>
        <br>  
        Le ouest france : <a href="https://www.ouest-france.fr/normandie/ouistreham-14150/avec-dix-postes-une-salle-de-sport-ouvre-ses-portes-a-ouistreham-a606bb56-d225-11ed-a4d7-24d4124528e0">Lire l'article ici</a></br>
        </br> 
        Actu.fr : <a href="https://actu.fr/normandie/ouistreham_14488/e-sport-une-salle-unique-voit-le-jour-a-ouistreham_58848760.html">Lire l'article ici</a>
        <br>
        <br>
        <br>
        <br>  
    </body>

    <footer>
        <!-- bas de page classique de site web -->
        <div class="colonnefooter">
                <div id="colonne1">
                    <a href="Salle-eSport.php">Présentation</a> <br><br>
                    <a href="Horaire-Inscription.php">Horaire & Inscription</a> <br><br>
                    <h4 style="color:orange;">Nous suivre :</h4>
                    <a href="https://www.facebook.com/lepavillonorb/"><img src="images/facebookicone.png" style="width:30px;height:30px"/></a>
                    <a href="https://twitter.com/OuistrehamRB"><img src="images/twittericone.png" style="width:30px;height:30px"/></a>
                    <a href="https://www.youtube.com/channel/UCicu38EACvQ1byF7T2Lzk4A"><img src="images/youtubeicone.png" style="width:30px;height:30px"/></a>
                    <a href="https://www.instagram.com/ouistrehamrb/"><img src="images/instagramicone.png" style="width:30px;height:30px"/></a>
                </div>
        
                <div id="colonne2">
                    <h4 id="contact" style="color:orange;">Nous contacter:</h4><br/>
                    <img src="images/localisationicone.png" style="width:20px;height:20px"/>11 Rue des Arts, 14150 Ouistreham <br/>
                    <img src="images/telephoneicone.png" style="width:20px;height:20px"/> 02 31 25 51 60 </br>
                    <img src="images/mailicone.png" style="width:20px;height:20px"/>accueil.csc@ville-ouistreham.fr <br/>
                    <img src="images/horaireouverture.png" style="width:20px;height:20px"/> Mardi-Jeudi-Vendredi : 13h30-19h30 <br/>
                    Mercredi-Samedi : 9h30-12h30/13h30-19h30 
                </div>
            
                <div id="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10412.115093748775!2d-0.2625332!3d49.275852!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x480a66a9b31e0a9f%3A0x50a7fb6f4b8cb9d3!2sLe%20Pavillon%20de%20Ouistreham%20Riva-Bella!5e0!3m2!1sfr!2sfr!4v1684946837964!5m2!1sfr!2sfr" width="200" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
        </div>                
    </footer>
</html>