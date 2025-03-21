<?php 

if(isset($_GET) && isset($_GET['id'])){
    require_once '../controlador/UsuarioController.php';
    $controlador = new UsuarioController();
    $usuarios = $controlador->Eliminar($_GET['id']);
}

?>