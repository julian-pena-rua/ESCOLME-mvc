<?php  

class Log {
    private $rutaArchivo = "../log/log.txt";
    private $logLevel; // 0 = error, 1 = alerta, 2 = info, 3 = debug
    private $logMenesaje;
    private $logHora;

    function __construct($mensaje, $level) {
        // file is opened for writing (w) or appending (a).
        $archivoLog = fopen($this->rutaArchivo, "a") or die("Unable to open file!");
        $this->logMensaje = $mensaje;
        $this->logLevel = $level;
        $this->logHora = date("Y-m-d H:i:s");
        fwrite($archivoLog, 
                "$this->logHora\tLEVEL $this->logLevel\t$this->logMensaje\n");
      }
}

?>