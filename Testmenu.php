<style>
body {
  margin: 0;
  padding: 0;
}

.connexion{
    text-align:right;
  }


.container {
  display: flex;
  align-items: center;
}

.navbar {
  background-color: #f8f9fa;
  padding: 20px;
}

.navbar-nav {
  list-style: none;
  display: flex;
  justify-content: space-between;
  margin: 0;
  padding: 0;
}

.nav-item {
  margin-right: 15px;
}

.nav-link {
  text-decoration: none;
  color: #333;
  padding: 12px 20px;
  border-radius: 6px;
  font-size: 18px;
}

.nav-link:hover {
  background-color: #ffa500;
  color: #fff;
}

.dropdown-menu {
  display: none;
  position: absolute;
  background-color: #ffa500;
  padding: 10px;
  list-style: none;
  border-radius: 4px;
}

.dropdown-menu li {
  margin-bottom: 5px;
}

.dropdown-item {
  text-decoration: none;
  color: #fff;
  padding: 8px 12px;
  border-radius: 4px;
}

.dropdown-item:hover {
  background-color: #ff7f00;
}
</style>

<html>
<div class="connexion">
    <button type="button" id="login-button" class="boutonlogin" onclick="ClickLogin()">Se connecter</button>
</div>
<div class="container">
  <a href="Site_pavillon_eSport.php" alt="Logo Mairie de Ouistreham"><img src="images/logo-ORB-quadri.png"/></a>
  
  <nav class="navbar">
    <ul class="navbar-nav">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" aria-haspopup="true" aria-expanded="false">Présentation</a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="#">Salle e-Sport</a></li>
          <li><a class="dropdown-item" href="#">Actualité</a></li>
        </ul>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="#">Présentation</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="#">Horaires et Inscription</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="#">Nous Contacter</a>
      </li>
    </ul>
  </nav>
</div>
</html>

<script>
    // Ajoutez une classe "active" pour mettre en surbrillance l'option sélectionnée
var navItems = document.querySelectorAll('.nav-item');
navItems.forEach(function(item) {
  item.addEventListener('click', function() {
    navItems.forEach(function(navItem) {
      navItem.classList.remove('active');
    });
    this.classList.add('active');
  });
});

// Affichez ou masquez le sous-menu de la salle Esport
var dropdownToggle = document.querySelector('.dropdown-toggle');
var dropdownMenu = document.querySelector('.dropdown-menu');

dropdownToggle.addEventListener('click', function() {
  dropdownMenu.style.display = (dropdownMenu.style.display === 'block') ? 'none' : 'block';
});
</script>