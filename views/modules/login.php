<?php
    require_once '../models/auth/validarLogin.php';

    if(isset($_POST['btnLogin'])){
        $login = new UsuarioModel();
        $logged = $login->verificUsuarios($_POST['User'],$_POST['Passwd']);
        $_SESSION['Logged'] = $logged['estado']; //1 si esta logueado, 0 si no esta logueado
        $_SESSION['User'] = $logged['nombre'];
        $_SESSION['Img'] = $logged['Pic'];
        $_SESSION['rol'] = $logged['rol'];
        header('Location: ../public/index.php');
    
    }
?>
<div class="d-flex-center">
    <div class=""> 
        <div class="blanco">
            <h3 class="text-center"> Sistema Login</h3>
        </div>
        <div class="bg-form">
            <div class="">
                <form  method="POST" >
                    <div class="">
                        <label for="exampleInputEmail1"  class="form-label">Usuario</label>
                        <input type="text"  name="User" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="">
                        <label for="exampleInputPassword1"  class="form-label">Contraseña</label>
                        <input type="password" name="Passwd" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="text-center"> 
                        <button type="submit" name="btnLogin" class="bg-login-btn px-2">Ingresar</button>
                    </div>
                </form>  
            </div>
        </div>
    </div>
</div>