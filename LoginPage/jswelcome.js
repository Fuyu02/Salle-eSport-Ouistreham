const addButton = document.querySelector('.add-button');
const addForm = document.querySelector('.add-form');

addButton.addEventListener('click', () => {
addForm.style.display = 'block';
});

function editData(id) {
    // Rediriger vers la page de modification avec l'ID de la ligne sélectionnée
    window.location.href = "dtableinscrits/modifier_donnees_table_inscrits.php?id=" + id;
}