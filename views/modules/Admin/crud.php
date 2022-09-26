<?php
if(isset($_POST['addnombre']) && isset($_POST['addprecio']) && isset($_POST['addcategoria'])){
    ProductoModel::addProductos();
}

if(isset($_POST['editnombre']) && isset($_POST['editprecio']) && isset($_POST['editcategoria'])){
    ProductoModel::updateProductos();
}

if(isset($_POST['delid'])){
    ProductoModel::deleteProductos();
}
?>
<h1 class="text-center blanco">
    CRUD de Productos
</h1>
<div class="col-md my-4 bg-form">
    <form action="#" method="post" enctype="multipart/form-data">
        <h2 class="text-center">Agregar Producto</h2>
            <div class="mb-3">
                <label class="form-label" for="nombre">Nombre Producto</label>
                <input class="form-control" type="text" id="nombre" name="addnombre">
            </div>
            <div class="mb-3">
                <label class="form-label" for="nombre">Precio</label>
                <input class="form-control" type="text" id="precio" name="addprecio">
            </div>
            <div class="mb-3">
                <label class="form-label" for="nombre">Categoria</label>
                <input class="form-control" type="text" id="categoria" name="addcategoria">
            </div>
            <div class="mb-3">
                <label class="form-label" for="nombre">Stock</label>
                <input class="form-control" type="number" id="categoria" name="addstock">
            </div>
            <div class="form-group">
                <label for="my-input" class="form-label"> Seleccione una imagen</label>
                <input id="my-input" class="form-control" type="file" name="addthumb-producto">
            </div>
            <button type="submit" class="btn btn-primary">Agregar</button>
    </form>
</div>
<div class="col-md my-4 bg-form">
    
    <form action="#" method="POST" class="container">
        <h2 class= "text-center">Editar Producto</h2>
            <div class="mb-3">
                <label class="form-label" for="nombre">Editar por ID</label>
                <input class="form-control" type="text" id="id" name="editid">
            </div>
            <div class="mb-3">
                <label class="form-label" for="nombre">Nombre Producto</label>
                <input class="form-control" type="text" id="nombre" name="editnombre">
            </div>
            <div class="mb-3">
                <label class="form-label" for="nombre">Precio</label>
                <input class="form-control" type="text" id="precio" name="editprecio">   
            </div>
            <div class="mb-3">
                <label class="form-label" for="nombre">Categoria</label>
                <input class="form-control" type="text" id="categoria" name="editcategoria">
            </div>
            <button type="submit" class="btn btn-warning">Editar Producto</button>
    </form>
</div>
<div class="col-md my-4 bg-form">

    <form action="#" method="POST" class="container">
        <h2 class="text-center">Eliminar Producto</h2>
    
            <div class="mb-3">
                <label for="nombre">Eliminar por ID</label>
                <input class="form-control" type="text" id="id" name="delid">
            </div>
            <button type="submit" class="btn btn-danger">Eliminar Producto</button>
    </form>
</div>