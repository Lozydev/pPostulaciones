<?php
    include '../models/AgregarImgModel.php';
?>
<div class="d-flex justify-content-center align-items-center">
    <div class="bg-light py-5 px-5 ">
        <form action="../models/AgregarImgModel.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="my-input" class="form-label"> Seleccione una imagen</label>
                <input id="my-input" class="form-control" type="file" name="imagen">
            </div>
            <div class="form-group">
                <label for="my-input" class="form-label"></label>
                <input type="text" value="<?php echo $_SESSION['User'] ?>" name="usuario">
            </div>
            <input type="submit" class="btn btn-danger" value="Guardar" name="Guardar">
        </form>
    </div>
</div>