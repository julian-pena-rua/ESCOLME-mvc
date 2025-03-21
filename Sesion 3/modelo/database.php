<?php

class BaseDatos {

    private $servername = "127.0.0.1";
    private $username   = "root";
    private $password   = "";
    private $dbname     = "sistema_control_usuarios";
    private $conn;
    
    public function conectar(){

        // Crea conexión
        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);

        // Verifica conexión
        if ($this->conn->connect_error) {
            die("<p>Falló la conexión: " . $this->conn->connect_error . "</p>");
        }
        echo "<p>Conectado a la base de datos exitosamente</p>";
    }

    // Cierra la conexión
    public function cerrar(){
        $this->conn->close();
        echo "<p>Cerrada la conexión con la base de datos exitosamente</p>";
    }

    //  Ejecutar consultas
    public function exec($sql){
        $result = $this->conn->query($sql);
        return $result;
    }
}

?>
