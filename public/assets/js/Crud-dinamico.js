function añadir_datos(productos){
    $.ajax({
        url: '../models/ProductoModel.php',
        type: 'POST', // Tipo de petición
        data: {productos: productos},
        success: function(response){
            console.log(response);
            $('#tabla_productos').html(response);
        }
    })
    .done(function(addProductos) {
        
    })
    .fail(function() {
        console.log("error");
    })
}