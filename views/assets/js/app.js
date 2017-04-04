function validar(){
    var nombre, descripcion;
    nombre = document.getElementById("name").value;
    descripcion = document.getElementById("desc").value;

    if (nombre === "") {
        alert("El campo nombre está vacío");
        return false;
    }

    if (descripcion === "") {
        alert("El campo descripción está vacío");
        return false;
    }
}

$(document).ready( function () {
    $('#dataTable').DataTable();
    $('#dataTable_length').remove();
    $('#dataTable_info').remove();


});
