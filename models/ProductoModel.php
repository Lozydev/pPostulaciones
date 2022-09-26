<?php
Class ProductoModel{
    
    public function getProductos(){
        require_once '../config/database.php';
        $db = new Conectar();
        $mysqli = $db->conexion();
        $sql = "SELECT * FROM productos";
        $result = $mysqli->query($sql);
        $listaProductos = array();
        while($p = $result->fetch_assoc()){
            $listaProductos[] = $p;
        }
        return $listaProductos;
    }

    public static function addProductos(){
        require_once '../config/database.php';
            $db = new Conectar();
            $mysqli = $db->conexion();    
        
            $nombre = $_POST['addnombre'];
            $precio = $_POST['addprecio'];
            $categoria = $_POST['addcategoria'];
            $stock = $_POST['addstock'];
            $imagen = $_FILES['addthumb-producto']['name'];

            if(isset($imagen) && $imagen!=""){
                $tipo = $_FILES['addthumb-producto']['type'];
                $temp = $_FILES['addthumb-producto']['tmp_name'];
    
                if(!((strpos($tipo,'gif')|| strpos($tipo,'jpeg')|| strpos($tipo,'webp') || strpos($tipo,'png') || strpos($tipo,'jpg')))){
                    echo "<div class='alert alert-warning my-4' id='alert' role='alert'>Ingrese un imagen valida</div>";
                }
            }

            $sql = "INSERT INTO productos (nombre, precio, categoria, stock, img) VALUES ('".$nombre."', '".$precio."', '".$categoria."', '".$stock."', '".$imagen."')";
            $result = $mysqli->query($sql);
            if($result){
                move_uploaded_file($temp,'../public/assets/Img/thumb-productos/'.$imagen);
                echo "<div class='alert alert-success my-4' id='alert' role='alert'>Producto agregado correctamente</div>";
            }else{
                echo "<div class='alert alert-danger my-4' id='alert' role='alert'>Error al agregar el producto</div>";
            }
    }

    public static function updateProductos(){
        require_once '../config/database.php';
            $nombre = $_POST['editnombre'];
            $precio = $_POST['editprecio'];
            $categoria = $_POST['editcategoria'];
            $db = new Conectar();
            $mysqli = $db->conexion();
            $sql = "UPDATE productos SET nombre = '".$nombre."', precio = '".$precio."', categoria = '".$categoria."' WHERE id = '".$_POST['editid']."'";
            $result = $mysqli->query($sql);
            if($result){
                echo "<div class='alert alert-warning my-4' id='alert' role='alert'>Producto editado correctamente</div>";
            }else{
                echo "<div class='alert alert-danger my-4'  id='alert' role='alert'>Error al editar el producto</div>";
            }
    }

    public static function deleteProductos(){
        require_once '../config/database.php';
            $db = new Conectar();
            $mysqli = $db->conexion();
            $sql = "DELETE FROM productos WHERE id = '".$_POST['delid']."'";
            $result = $mysqli->query($sql);
            if($result){
                echo "<div class='alert alert-dark my-4' id='alert'role='alert'>Producto eliminado correctamente</div>";
            }else{
                echo "<div class='alert alert-danger my-4' id='alert' role='alert'>Error al eliminar el producto</div>";
            }
    }

    public static function editProductos($id){
        require_once '../config/database.php';
        $db = new Conectar();
        $mysqli = $db->conexion();
        $sql = "SELECT * FROM productos WHERE id = $id";
        $result = $mysqli->query($sql);
        $listaProductos = array();
        while($p = $result->fetch_assoc()){
            $listaProductos[] = $p;
        }
        return $listaProductos;
    }
}
?>