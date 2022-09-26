<?php
    Class UsuarioModel{
        public function getUsuarios(){
            
            $db = new Conectar();
            $mysqli = $db->conexion();
            $sql = "SELECT * FROM usuarios";
            $result = $mysqli->query($sql);
            $listaUsuarios = array();
            while($u = $result->fetch_assoc()){
                $listaUsuarios[] = $u;
            }
            return $listaUsuarios;
            
        }
        public function verificUsuarios($UserParam,$PasswdParam){
                $usuariovalidado = [];
                $listaUsuarios = $this->getUsuarios();
                foreach($listaUsuarios as $u){

                    if($u['nombre'] == $UserParam && $u['passwd'] == $PasswdParam ){
                        $usuariovalidado = $u;
                        return $usuariovalidado;        
                    }
                }
                return false;
        }

        public function registerUsuario($nombre,$passwd){
            $db = new Conectar();
            $mysqli = $db->conexion();
            $sql = "INSERT INTO usuarios (nombre,passwd) VALUES ('$nombre','$passwd')";
            $result = $mysqli->query($sql);
            return $result;
        }
    }

    
    
    

?>