<!DOCTYPE html>
<html lang="fr">
    
    <head>
        <title> Pavillon eSport</title>
        <link rel="stylesheet" href="csspage/HoraireInscriptionCss.css" type="text/css"/>
        <link rel="stylesheet" href="csspage/GeneralCss.css" type="text/css"/>
        <link rel="icon" type="image/x-icon" href="images/favicon.ico">
        <script type="text/javascript" src="javascriptsheet/pagejs.js"></script>
        <meta name="author" content=" Ophélie NOEL">
        <meta charset="utf-8"/>
        <!-- Pour le calendrier -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="Calendrier/css/style.css">
         <!-- Pour la police d'écriture -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Diphylleia&display=swap" rel="stylesheet">
        <!-- Pour les cookies du site et cookie consent pour le css et le visuel global -->
        <script type="text/javascript" src="//cookie.eurowebpage.com/cookie.js?skin=cookielaw3&amp;box_radius=23&amp;position=bottom_right&amp;delay=4&amp;accept_background=f86e00"></script>
    </head>


    <header>
        <div>
            <div class="connexion">
                <button type="button" id="login-button" class="boutonlogin" onclick="ClickLogin()">Se connecter</button>
            </div>
            <nav class="menu">
                <a href="Site_pavillon_eSport.php" alt="Logo Mairie de Ouistreham"><img src="images/logo-ORB-quadri.png"/></a>
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
    <!--intégration google image pour montrer les disponibilité ou classique en écrit -->    
        <div id="InformationOuverture">
                </br>
                </br>
                <h4>Horaire:</h4></br>
                <h4>Mercredi: </h4> 
                17h-19h Accès -15ans</br>
                <h4>Samedi:</h4>
                14h-16h Accès -15 ans</br>
                16h-18h Accès +15 ans</br>
                </br>
                <h4>Uniquement sur inscription</h4>
                <h4>Sur place, par téléphone et dans l'onglet "Nous contacter"</h4>
            </div>
        <section class="ftco-section">
		    <div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Calendrier</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="elegant-calencar d-md-flex">
						<div class="wrap-header d-flex align-items-center img" style="background-image: url(Calendrier/images/bg.jpg);">
				      <p id="reset">Today</p>
			        <div id="header" class="p-0">
								<!-- <div class="pre-button d-flex align-items-center justify-content-center"><i class="fa fa-chevron-left"></i></div> -->
		            <div class="head-info">
		            	<div class="head-month"></div>
		                <div class="head-day"></div>
		            </div>
		            <!-- <div class="next-button d-flex align-items-center justify-content-center"><i class="fa fa-chevron-right"></i></div> -->
			        </div>
			      </div>
			      <div class="calendar-wrap">
			      	<div class="w-100 button-wrap">
				      	<div class="pre-button d-flex align-items-center justify-content-center"><i class="fa fa-chevron-left"></i></div>
				      	<div class="next-button d-flex align-items-center justify-content-center"><i class="fa fa-chevron-right"></i></div>
			      	</div>
			        <table id="calendar">
		            <thead>
		                <tr>
	                    <th>Sun</th>
	                    <th>Mon</th>
	                    <th>Tue</th>
	                    <th>Wed</th>
	                    <th>Thu</th>
	                    <th>Fri</th>
	                    <th>Sat</th>
		                </tr>
		            </thead>
		            <tbody>
	                <tr>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                </tr>
	                <tr>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                </tr>
	                <tr>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                </tr>
	                <tr>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                </tr>
	                <tr>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                </tr>
	                <tr>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                </tr>
		            </tbody>
			        </table>
			      </div>
			    </div>
				</div>
			</div>
		</div>
	</section>

	<script src="Calendrier/js/jquery.min.js"></script>
    <script src="Calendrier/js/popper.js"></script>
    <script src="Calendrier/js/bootstrap.min.js"></script>
    <script src="Calendrier/js/main.js"></script>
    </body>



    <footer>
        <!-- bas de page classique de site web -->
        <div class="colonnefooter">
                <div id="colonne1">
                    <a href="Salle-eSport.php" class="lienfooter">Présentation</a> <br><br>
                    <a href="Horaire-Inscription.php" class="lienfooter">Horaire & Inscription</a> <br><br>
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