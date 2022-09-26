<?php
    require_once '../config/database.php';

    $db = new Conectar();
    $mysqli = $db->conexion();
    if(isset($_POST['Guardar'])){
        $usuario = $_POST['usuario'];
        $imagen = $_FILES['imagen']['name'];

        if(isset($imagen) && $imagen!=""){
            $tipo = $_FILES['imagen']['type'];
            $temp = $_FILES['imagen']['tmp_name'];

            if(!((strpos($tipo,'gif')|| strpos($tipo,'jpeg')|| strpos($tipo,'webp') || strpos($tipo,'png') || strpos($tipo,'jpg')))){
                    $_SESSION['mensaje']='solo se permite archivos jpeg,gif,webp';
                    header("Refresh:0; url=../views/modules/Admin/config_a.php");
                  }else{
                    $query="UPDATE usuarios SET Pic='$imagen' WHERE nombre = '$usuario'";
                    $resultado = mysqli_query($mysqli,$query);
                    if($resultado){
                        move_uploaded_file($temp,'../public/assets/Img/avatar/'.$imagen);
                        $_SESSION['mensaje']='se ha subido correctamente';
                        header('location:../public/index.php');
                }else{
                   
                        $_SESSION['mensaje'] = 'ocurrio un error en el servidor';    
                }
        }
    }
}