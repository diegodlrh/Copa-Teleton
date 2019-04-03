var _nombre = '';
var _email = '';
var _telefono = '';
var _mensaje = '';

function enviar() {
    _nombre = $('#nombre').val().toUpperCase();
    _email = $('#email').val().toLowerCase();
    _email = _email.replace(/\s/g, '');
    _telefono = $('#telefono').val();
    _telefono = _telefono.replace(/\s/g, '');
    _mensaje = $('#mensaje').val();


    $.post('enviar_mail.php', {nombre: _nombre, email: _email, telefono: _telefono, mensaje: _mensaje}, function (data) {
        limpiarForm();
        mensaje(data[0]);
    }, "json");


    limpiarForm();

}



function mensaje(e) {
    if (e === 'si') {
        $('#msj').css('background-color', 'darkgreen');
        $('#msj').html('Gracias por contactarse con nosotros! <br>En breve nos estaremos poniendo en contacto con usted.');
    } else
    {
        $('#msj').css('background-color', '#F44336');
        $('#msj').html('Hubo problemas con el envío, intente nuevamente o envíe un mail a la casilla mlucas@teleton.org.uy. <br>Disculpe las molestias!.');
    }


    
    $('#msj').show();
    $('#nombre').focus();
}

function limpiarForm() {
    $('#nombre').val('');
    $('#email').val('');
    $('#telefono').val('');
    $('#mensaje').val('');

}