function deleteCategory(id){
    var retVal = confirm("La suppression de cette catégorie va entrainer la suppression de tout ses enfants.");

    if( retVal == true ){
        window.location = 'http://localhost/admin/supprimer/Category/'+id
    }
}
