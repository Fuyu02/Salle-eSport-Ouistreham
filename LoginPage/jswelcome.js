const addButton = document.querySelector('.add-button');
const addForm = document.querySelector('.add-form');

addButton.addEventListener('click', () => {
addForm.style.display = 'block';
});



function editData(id) {
    // Rediriger vers la page de modification avec l'ID de la ligne sélectionnée
    window.location.href = "dtableinscrits/modifier_donnees_table_inscrits.php?id=" + id;
}

function confirmDelete(id) { 
    
    
        // Supprimer la donnée selectionné
        window .location.href = "dtableinscrits/supprimer_donnees_table_inscrits.php?id=" + id;
        // Actualiser la page après la suppression
        //window.location.reload();
    
}

// Ajoute la classe "active" au lien cliqué pour le menu sur le coté
var links = document.querySelectorAll('.sidebar a');
links.forEach(function(link) {
    link.addEventListener('click', function() {
        links.forEach(function(item) {
            item.classList.remove('active');
        });
        this.classList.add('active');
    });
});

// Filtre pour ne pas envoyer le fomulaire d'ajout si il est vide

function validateForm() {
        // Récupérer les valeurs des champs
        var id = document.getElementById("id").value;
        var nom = document.getElementById("Nom").value;
        var prenom = document.getElementById("Prenom").value;
        var age = document.getElementById("Age").value;
        var email = document.getElementById("Email").value;
        var groupe = document.getElementById("Groupe").value;
        var peutJouerPEGI16 = document.getElementById("PeutJouerPEGI16").value;

        // Vérifier si les champs sont vides
        if (nom === "" || prenom === "" || age === "" || email === "" || groupe === "" || peutJouerPEGI16 === "") {
            alert("Veuillez remplir tous les champs du formulaire.");
            return false; // Empêcher l'envoi du formulaire
        }

        // Vérifier que le champ "Nom" contient uniquement des lettres
        if (!/^[A-Za-z]+$/.test(nom)) {
        alert("Le champ 'Nom' doit contenir uniquement des lettres.");
        return false; // Empêcher l'envoi du formulaire
        }
        
        // Vérifier que le champ "Prénom" contient uniquement des lettres
        if (!/^[A-Za-z]+$/.test(prenom)) {
        alert("Le champ 'Prénom' doit contenir uniquement des lettres.");
        return false; // Empêcher l'envoi du formulaire
        }
        
        // Vérifier que le champ "Âge" contient uniquement des chiffres
        if (!/^\d+$/.test(age)) {
        alert("Le champ 'Âge' doit contenir uniquement des chiffres.");
        return false; // Empêcher l'envoi du formulaire
        }
        
        // Vérifier que le champ "Email" contient un "@"
        if (email.indexOf("@") === -1) {
        alert("Le champ 'Email' doit contenir un '@'.");
        return false; // Empêcher l'envoi du formulaire
        }

        //Vérifier que le champ "peutJouerPEGI16 contient oui ou non uniquement"
         // Vérifier que le champ "PeutJouerPEGI16" contient uniquement "oui" ou "non"
         if (peutJouerPEGI16 !== "oui" && peutJouerPEGI16 !== "Oui" && peutJouerPEGI16 !== "non"  && peutJouerPEGI16 !== "Non") {
            alert("Le champ 'Peut Jouer aux jeux PEGI 16' doit être 'oui' ou 'non'.");
            return false; // Empêcher l'envoi du formulaire
        }

        //on peut ajouter d'autres vérifications après si on veut


        return true; // Envoyer le formulaire si tout est valide
    }

