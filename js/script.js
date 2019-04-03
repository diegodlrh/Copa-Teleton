$(document).ready(function () {
//$('.mbr-background-video-preview').removeAttr('background-image');
$('.mbr-background-video-preview').attr('background-image', 'url(img/prueba.jpg)');

//    $("#ci").mask("9.999.999-9");
//    $("#datepicker").mask("99/99/9999");
//    
    $('#datepicker').focusout(function () {
//        alert($('#datepicker').val());
        if ($('#datepicker').val() !== '')
            $('#datepicker').removeAttr('placeholder');
        else
            $('#datepicker').attr('placeholder', 'FECHA DE NACIMIENTO');

    });
    //obtengo el evento click 
//    $('#btn').click(function (e) {
//        e.preventDefault();
//        $('#msj').hide();
//        $('#msj').html('');
//        // inicializar();
////       alert("hahaha");
////        limpiarForm();
////    _fechaNacimiento = $('#datepicker').val();
////alert(_fechaNacimiento);
//    });
    $('#ch').click(function (e) {
        if (document.getElementById('cbox1').checked) {
            $("#ci").mask("9.999.999-9");
        } else {
            $("#ci").unmask();
        }
    });
});

var _nombre = "";
var _apellido = "";
var _tipoDocumento = "";
var _documento = "";
var _fechaNacimiento = "";
var _sexo = "";
var _direccion = "";
var _departamento = "";
var _telefono = "";
var _email = "";
var _emergencia = "";
var _mutual = "";
var _talle = "";
var _categoria = "";
var _discapacidad = "";
var _otraDiscapacidad = "";

function enviar() {
    alert('entre');
    mensaje('hola hola', 'ok');
}
function inicializar() {
    _nombre = $('#nombre').val().toUpperCase();
    _apellido = $('#apellido').val().toUpperCase();
    _tipoDocumento = $('#tipoDoc option:selected').val();
    _documento = $('#ci').val();
    _documento = _documento.replace(/\s/g, '');
    _fechaNacimiento = $('#datepicker').val();
    _fechaNacimiento = _fechaNacimiento.replace(/\s/g, '');
    _sexo = $('#genero option:selected').val();
    _direccion = $('#dir').val().toUpperCase();
    _departamento = $('#depto option:selected').text();
    _telefono = $('#tel').val();
    _telefono = _telefono.replace(/\s/g, '');
    _email = $('#email').val().toLowerCase();
    _email = _email.replace(/\s/g, '');

    _emergencia = $('#ne').val();
    _emergencia = _emergencia.replace(/\s/g, '');
    _mutual = $('#sm option:selected').text();

    _talle = $('#talle option:selected').text();

    _categoria = $('#categoria option:selected').val();
    _discapacidad = $('#cualDisc option:selected').val();
    _otraDiscapacidad = $('#otraDs').val();

    validar();

}



function validar() {
    if (_emergencia === '') {
        _emergencia = 'NO TIENE';
    }
    if (_nombre === '' ||
            _apellido === '' ||
            _documento === '' ||
            _fechaNacimiento === '' ||
            _sexo === '' ||
            _direccion === '' ||
            _departamento === '' ||
            _telefono === '' ||
            _email === '' ||
            _mutual === '' ||
            _talle === '' ||
            _categoria === '')
    {
        mensaje('TODOS LOS CAMPOS SON OBLIGATORIOS!', '');
        return;
    }
    else if (_categoria === 'CON_DISC' && _discapacidad === '')
    {
        mensaje('DEBE SELECCIONAR UNA SUB-CATEGORIA.', '');
        return;
    }
    else if (_categoria === 'CON_DISC' && _discapacidad === 'Otra' && _otraDiscapacidad === '')
    {
        mensaje('DEBE ESPECIFICAR SU DISCAPACIDAD.', '');
        return;
    }

    else if (!validarMail()) {
        mensaje('DEBE INGRESAR UN EMAIL VÁLIDO.', '');
        return;
    }
    else if (_tipoDocumento === 'CI' && !validarCedula()) {
        mensaje('DEBE INGRESAR UN DOCUMENTO URUGUAYO VÁLIDO, VERIFIQUE FORMATO ?.???.???-?', '');
        return;
    }
    else if (!validarFecha()) {
        return;
    }
    else if (!$('#ch').prop('checked')) {
        mensaje('DEBE ACEPTAR LAS BASES Y CONDICIONES PARA PODER INSCRIBIRSE!', '');
        return;
    }
    else {
        if (_categoria === 'CON_DISC' && _discapacidad === 'Otra') {
            _discapacidad = _otraDiscapacidad;
        }
        if (_categoria === 'SIN_DISC') {
            _discapacidad = '';
        }
        $.post('enviar.php', {nombres: _nombre, apellidos: _apellido, tipoDocumento: _tipoDocumento, documento: _documento, fechaNacimiento: _fechaNacimiento,
            sexo: _sexo, domicilio: _direccion, departamento: _departamento, email: _email,
            telefono: _telefono, emergencia: _emergencia, mutual: _mutual, tieneDisc: _categoria, discapacidad: _discapacidad, otraDiscapacidad: _otraDiscapacidad}, function (data) {
            limpiarForm();
            mensaje(data[0], 'ok');
//            $("#myModal2").modal();
//            $('#mensajeAncho').css('display', 'block');
//            $('#formularioAncho').css('display', 'none');

            //es menor? hay cupos? si no es menor y hay cupos entonces le mando el pdf
            if (data[1] === 'no' && data[2] === 'si')
            {
                $(location).attr('href', 'crearPDF.php?nombres=' + _nombre + '&apellidos=' + _apellido + '&tipoDocumento=' + _tipoDocumento + '&documento=' + _documento + '&fechaNacimiento=' + _fechaNacimiento +
                        '&sexo=' + _sexo + '&departamento=' + _departamento + '&domicilio=' + _direccion + '&email=' + _email + '&telefono=' + _telefono +
                        '&emergencia=' + _emergencia + '&mutual=' + _mutual + '&tieneDisc=' + _categoria + '&discapacidad=' + _discapacidad);
            }
        }, "json");


        limpiarForm();

    }

}
function mensaje(ms, e) {
    if (e === 'ok')
        $('#msj').css('background-color', 'darkgreen');
    else
        $('#msj').css('background-color', '#F44336');

    $('#msj').html(ms);
    $('#msj').show();
    $('#msj').focus();
}
function limpiarForm() {
    $('#nombre').val('');
    $('#apellido').val('');
    $('#tipoDoc').val('').change();
    $('#ci').val('');

    $('#datepicker').val('');

    $('#genero').val("").change();
    $('#dir').val('');

    $('#depto').val("").change();
    $('#tel').val('');
    $('#email').val('');

    $('#ne').val('');
    $('#sm').val('').change();
    $('#talle').val('').change();
    $('#categoria').val('').change(); //ver si limpia el resto oculto
    $('#cualDisc').val('').change();
    $('#otraDs').val('');

    $("#ch").prop('checked', false);
}
function validarFecha() {
    if (validarFormatoFecha(_fechaNacimiento) && existeFecha(_fechaNacimiento)) {
        if (validarFechaMenorActual(_fechaNacimiento))
            return true;
        else {
            mensaje("LA FECHA DE NACIMIENTO DEBE SER ANTERIOR A LA FECHA ACTUAL.", '');
            return false;
        }
    } else {
        mensaje("DEBE INGRESAR UNA FECHA DE NACIMIENTO VÁLIDA. VERIFIQUE INGRESAR DD/MM/AAAA", '');
        return false;
    }
}
function existeFecha(fecha) {
    var fechaf = fecha.split("-");
    var d = fechaf[2];
    var m = fechaf[1];
    var y = fechaf[0];
    res = m > 0 && m < 13 && y > 0 && y < 32768 && d > 0 && d <= (new Date(y, m, 0)).getDate();

    if (!res) { //ie
        var fechaf = fecha.split("/");
        var d = fechaf[0];
        var m = fechaf[1];
        var y = fechaf[2];
        res = m > 0 && m < 13 && y > 0 && y < 32768 && d > 0 && d <= (new Date(y, m, 0)).getDate();
    }

    return res;
}
function validarFormatoFecha(campo) {
    var RegExPattern = /^\d{1,2}\/\d{1,2}\/\d{4}$/;
    var aux = campo.match(RegExPattern);
    if (aux !== null) {
        return true;
    } else {
        RegExPattern = /^\d{2,4}-\d{1,2}-\d{1,2}$/;
        aux = campo.match(RegExPattern);

        if (aux !== null) {
            return true;
        } else {
            return false;
        }

    }
}

function validarFechaMenorActual(date) {
    var fecha = new Date();
    var anio = fecha.getFullYear();
    var fecha = date.split("/");
    var y = fecha[2];

    if (y >= anio)
        return false;
    else
        return true;
}
function validarMail() {

    var emailReg = /^([\da-zA-Z_\.-]+)@([\da-zA-Z\.-]+)\.([a-zA-Z\.]{2,6})$/;
    if (!emailReg.test(_email)) {
        return false;
    } else {
        return true;
    }
}

function validarCedula() {

    var ciReg = /^[0-9][\\\\.][0-9]{3}[\\\\.][0-9]{3}-[0-9]$/;
    if (!ciReg.test(_documento)) {
        return false;
    } else {
        return true;
    }
}
function seleccionCategoria(that) {
    if (that.value === "CON_DISC") {
        $("#cualDisc").val('');
        $("#cualDisc").attr('required');
        $('#especifique').hide();
        $('#otraDs').val('');
        $('#ocultar').show();
    } else {
        $('#ocultar, #especifique').hide();
        $("#cualDisc").removeAttr('required');
        $('#otraDs').removeAttr('required');
    }
}

function seleccionSubCat(that) {
    if (that.value === "Otra") {
        $('#otraDs').val('');
        $('#especifique').show();
        $('#otraDs').attr('required');
    } else {
        $('#especifique').hide();
        $('#otraDs').removeAttr('required');
    }
}