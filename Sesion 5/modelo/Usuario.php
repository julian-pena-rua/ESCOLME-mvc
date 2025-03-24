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
            $database->cerrar();
            if ($result === TRUE) {
                echo "<p>Nuevo registro creado con éxito</p>";
              } else {
                //echo "<p>Error: " . $sql . "<br>" . $result->error."</p>";
                $log = new Log("Error: " . $sql . "\n\t" . $result->error, 0);
            }
        }
        function buscar($id){
            // aquí código
            require_once '../modelo/database.php'; 
            $database = new BaseDatos();
            $database->conectar();
            $sql = "SELECT id, nombre, apellido, genero, edad FROM usuario where id = $id";
            $result = $database->exec($sql);
            $database->cerrar();
            if ($result !== FALSE) {
              if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                  $usuario = new Usuario();
                  $usuario->id = $row["id"]; 
                  $usuario->nombre = $row["nombre"]; 
                  $usuario->apellido = $row["apellido"]; 
                  $usuario->genero = $row["genero"];
                  $usuario->edad = $row["edad"];
                  return $usuario;
                  //echo "id: " . $row["id"]. " - nombre: " . $row["nombre"]. " " . $row["apellido"]. "<br>";
                }  
              }
            }else{
                echo "0 results";
            }  
        }

        function listar(){
          // aquí código
          require_once '../modelo/database.php'; 
          $database = new BaseDatos();
          $database->conectar();
          $sql = "SELECT * FROM usuario";
          $result = $database->exec($sql);
          $database->cerrar();
          $usuarios = array();
          if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
              //echo "id: " . $row["id"]. " - nombre: " . $row["nombre"]. " " . $row["apellido"]. "<br>";
              $usuario = array($row["id"], $row["nombre"], $row["apellido"], $row["genero"], $row["edad"]);
              array_push($usuarios, $usuario);
            }
            return $usuarios;
          } else {
            echo "0 results";
          }
      }
      
    function actualizar($id){
        // aquí código
        require_once '../modelo/database.php'; 
        $database = new BaseDatos();
        $database->conectar();
        $sql = "UPDATE usuario SET nombre='$this->nombre',apellido='$this->apellido',genero='$this->genero',edad='$this->edad' WHERE id = $id";
        $result = $database->exec($sql);
        $database->cerrar();
        if ($result === TRUE) {
            echo "<p>Registro actualizado con éxito</p>";
          } else {
            //echo "<p>Error: " . $sql . "<br>" . $result->error."</p>";
            $log = new Log("Error: " . $sql . "\n\t" . $result->error, 0);
        }
    }

    function eliminar($id){
      // aquí código
      require_once '../modelo/database.php'; 
      $database = new BaseDatos();
      $database->conectar();
      $sql = "DELETE FROM `usuario` where id = $id";
      $result = $database->exec($sql);
      $database->cerrar();
      if ($result === TRUE) {
          echo "<p>Registro eliminado con éxito</p>";
        } else {
          //echo "<p>Error: " . $sql . "<br>" . $result->error."</p>";
          $log = new Log("Error: " . $sql . "\n\t" . $result->error, 0);
      }
    }
  }
?>