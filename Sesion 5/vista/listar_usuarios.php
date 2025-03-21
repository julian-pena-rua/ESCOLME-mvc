<?php
    require_once '../controlador/UsuarioController.php';
    $controlador = new UsuarioController();
    $usuario = $controlador->listar();
?>