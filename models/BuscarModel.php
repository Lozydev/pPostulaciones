<?php
require_once '../config/database.php';
        $db = new Conectar();
        $mysqli = $db->conexion();

        $tabla_productos = "";
        $sql = "SELECT * FROM productos";

        if(isset($_POST['productos'])){
            $q = $db->conexion()->real_escape_string($_POST['productos']);

            $sql = "SELECT * FROM productos WHERE nombre LIKE '%".$q."%' OR
            precio LIKE '%".$q."%' OR
            categoria LIKE '%".$q."%' OR
            id LIKE '%".$q."%'";
        }
        $resultado = $mysqli->query($sql);
        if($resultado->num_rows > 0){
            $tabla_productos .= '<table class="table table-success table-striped table-hover">
                                <thead>
                                    <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Precio</th>
                                    <th scope="col">Categoria</th>
                                    <th scope="col">Stock</th>
                                    <th scope="col">Imagen</th>
                                    </tr>
                                </thead>
                                <tbody>';
            while($p = $resultado->fetch_assoc()){
                $tabla_productos .= '<tr>
                                        <td>'.$p['id'].'</td>
                                        <td>'.$p['nombre'].'</td>
                                        <td>'.$p['precio'].'</td> 
                                        <td>'.$p['categoria'].'</td>
                                        <td>'.$p['stock'].'</td>
                                        <td>'.$p['img'].'</td>
                                        </tr>';
            }
            $tabla_productos .= '</tbody></table>';
            echo $tabla_productos;
        }else{
            $tabla_productos .= "No se encontraron resultados";
            echo $tabla_productos;
        }