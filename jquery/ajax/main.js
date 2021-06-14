$(document).ready(funcPrincipal);

function funcPrincipal() {
    $('#sendUserInput').on('click', funcVerificarUsuario);              // Al hacer click
    $('#userInput').keypress(function(event){                           // Al apretar ENTER
        var keycode = (event.keyCode ? event.keyCode : event.which);
        if(keycode == '13'){
            funcVerificarUsuario();
        }
        event.stopPropagation();
    });
}

function funcVerificarUsuario() {
    var input = $('#userInput').val();
    $.get("verificarUsuario.php?usuario="+input, function(data) {
        var respuesta;
        if(data=="Existe")     // Como segundo parámetro llamamos una función anónima, en caso de que la solicitud GET tenga éxito
            respuesta = "Este nombre de usuario ya está en uso";
        else respuesta = "Este nombre de usuario está disponible";

        $("#respuesta").text(respuesta);
    });
}