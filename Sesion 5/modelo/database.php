<?php
require_once "log.php";
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
            $log = new Log("Falló la conexión: " . $this->conn->connect_error, 0);

        }
        //echo "<p>Conectado a la base de datos exitosamente</p>";
        $log = new Log("Conectado a la base de datos exitosamente", 2);
    }

    // Cierra la conexión
    public function cerrar(){
        $this->conn->close();
        //echo "<p>Cerrada la conexión con la base de datos exitosamente</p>";
        $log = new Log("Cerrada la conexión con la base de datos exitosamente", 2);
    }

    //  Ejecutar consultas
    public function exec($sql){
        $result = $this->conn->query($sql);
        $log = new Log("Se ha ejecutado la consulta: $sql", 2);
        return $result;
    }
}

?>
