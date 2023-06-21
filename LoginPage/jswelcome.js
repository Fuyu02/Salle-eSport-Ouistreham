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
    window.location.href = "dtableinscrits/supprimer_donnees_table_inscrits.php?id=" + id;
    //if (confirm("Êtes-vous sûr de vouloir supprimer cette donnée ?")) {
        // Supprimer la donnée en utilisant PHP et SQL

        // Actualiser la page après la suppression
        //window.location.reload();
    //}
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



