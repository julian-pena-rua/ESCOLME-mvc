<?php
    //echo "Me están creando...";
    
    // Globales
    var_dump($_POST);

    require '../modelo/database.php'; 

    $database = new BaseDatos();
    $database->conectar();
?>