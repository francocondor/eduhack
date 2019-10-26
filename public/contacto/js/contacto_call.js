var idcontacto = null;
function guardarContacto(){
    //datos
    var paterno   = $('#paternoID').val();
    var materno   = $('#maternoID').val();
    var nombres   = $('#nombresID').val();
    var estado    = $('#selectEstado').val();
    var mensaje    = $('#mensajeID').val();
    var asunto    = $('#asuntoID').val();
    
    
    $.ajax({
        url: 'contacto/C_contacto_call/guardarContacto',
        data: {
            idcontacto, paterno, materno, nombres, estado, mensaje,asunto
        },
        type: 'POST'
    }).done(function (response) {
        let data = JSON.parse(response);
        if (data.error == 0) {
            window.close();
            alert('Se guardó correctamente');
        } else {
            alert('Ha ocurrido un error');
        }
    }).fail(function () {
        alert('Ha ocurrido un error');
    });
}