<?php
    //echo "Me están creando...";    
    // Globales
    //var_dump($_POST);
    $pagina="Resultado crear usuario";
    require_once "../vista/plantilla/head.php";
    require_once "../controlador/UsuarioController.php";
    $usuarioController = new UsuarioController();
    $usuarioController->RegistrarUsuario();
?>

<a data-mdb-ripple-init class="btn w3-green btn-lg" href="index.php" role="button">Volver al menú</a>