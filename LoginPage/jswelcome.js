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