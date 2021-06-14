$(document).ready(funcPrincipal);

function funcPrincipal(){
    $("#sendUserInput").on("click", funcVerificarUsuario);
    $('#userInput').keypress(function(event){                        
        var keycode = (event.keyCode ? event.keyCode : event.which);
        if(keycode == '13'){
            funcVerificarUsuario();
        }
        event.stopPropagation();
    });
}
    
function funcVerificarUsuario(){
    var input = $('#userInput').val();
    $.ajax({
        url: "verificarUsuario.php",
        type: "GET",
        async: true,
        data: "usuario="+input,
        success: function(data){
            var respuesta;
            if(data=="Existe")
                respuesta = "Este nombre de usuario ya está en uso";
            else respuesta = "Este nombre de usuario está disponible";
            
            $('#respuesta').text(respuesta);
        }
        // error: opcional
    });
}