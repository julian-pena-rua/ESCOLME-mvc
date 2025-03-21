<?php

    class Usuario{
        // atributos - propiedades
        public $id;
        public $nombre;
        public $apellido;
        public $genero;
        public $edad;

        // métodos - acciones
        function crear(){
            // aquí código
            require_once '../modelo/database.php'; 
            $database = new BaseDatos();
            $database->conectar();
            $sql = "INSERT INTO usuario (nombre, apellido, genero, edad)  
                    VALUES ('$this->nombre', '$this->apellido', '$this->genero', '$this->edad');";
            $result = $database->exec($sql);
            if ($result === TRUE) {
                echo "<p>Nuevo registro creado con éxito</p>";
              } else {
                echo "<p>Error: " . $sql . "<br>" . $result->error."</p>";
            }
            $database->cerrar();
        }
        function eliminar(){
            // aquí código
        }
        function actualizar(){
            // aquí código
        }
        function buscar($id){
            // aquí código
            require_once '../modelo/database.php'; 
            $database = new BaseDatos();
            $database->conectar();
            $sql = "SELECT id, nombre, apellido, genero, edad FROM usuario where id = $id";
            $result = $database->exec($sql);
            if ($result->num_rows > 0) {
              // output data of each row
              while($row = $result->fetch_assoc()) {
                $usuario = new Usuario();
                $usuario->id = $row["id"]; 
                $usuario->nombre = $row["nombre"]; 
                $usuario->apellido = $row["apellido"]; 
                return $usuario;
              //echo "id: " . $row["id"]. " - nombre: " . $row["nombre"]. " " . $row["apellido"]. "<br>";
            }
            } else {
              echo "0 results";
            }
            $database->cerrar();
        }
    }


?>