$(obtener_datos());
function obtener_datos(productos){
    $.ajax({
        url: '../models/BuscarModel.php',
        type: 'POST',
        dataType: 'html',
        data: { productos: productos },
    })
    .done(function(respuesta) {
        console.log(respuesta);
        $("#tabla-productos").html(respuesta);
    })
    .fail(function() {
        console.log("error");
    })
}

$(document).on('keyup', '#buscar', function(){
    var valor = $(this).val();
    if(valor !== ''){
        obtener_datos(valor);
    }else{
        obtener_datos();
    }
});