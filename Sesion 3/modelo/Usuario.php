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
        function buscar(){
            // aquí código
        }
    }


?>