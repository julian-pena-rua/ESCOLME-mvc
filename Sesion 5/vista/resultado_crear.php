<?php
    //echo "Me están creando...";
    
    // Globales
    // var_dump($_POST);
    
    require_once "../controlador/UsuarioController.php";
    $usuarioController = new UsuarioController();
    $usuarioController->RegistrarUsuario();
?>