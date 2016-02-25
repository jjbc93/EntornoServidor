$(function(){
    $("#datos").submit(obtenerDatos);
});
function obtenerDatos(){
    var provincia = $("input#proDatos").val();
    $.getJSON("Acceso.php",{provincia:provincia},mostrarDatos);
}

function mostrarDatos(respuesta, status, oXHR){
    texto = "<table border=1><tr><th>Nombre</th><th>Apellidos</th><th>edad</th><th>NIF</th><th>E-mail</th><th>Provincia</th><th>Fecha</th><th>telefono</th><th>hora></th></tr>";
    if(status=="succes"){
        $.each(respuesta, function(indice,objeto){
            texto+="<tr><td>"+objeto.nombre+"</td></tr>";
        });
        $("div#info").html(texto);
    }else{
        $("div#info").html("Ha sucedido un error.");
    }
}
