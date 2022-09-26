<?php
Class SitioController{
        
        public static function index(){
            include '../views/layouts/app.php';
        }

        public static function home(){
            include '../views/modules/home.php';
        }

        public static function Productos(){
            include '../views/modules/admin/productos.php';
        }

        public static function catalogo(){
            include '../views/modules/catalogo.php';
        }

        public static function CRUD(){
            include '../views/modules/admin/crud.php';
        }
        
        public static function Login(){
            include '../views/modules/login.php';
        }

        public static function nosotros(){
            include '../views/modules/nosotros.php';
        }

        public static function contacto(){
            include '../views/modules/contacto.php';
        }

        public static function config_avatar(){
            include '../views/modules/admin/config_a.php';
        }
        
        public static function Logout(){
            $_SESSION['Logged']=null;
            include '../views/modules/home.php';
        }
        
}
?>