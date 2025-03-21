<?php
$GLOBALS['pagina'] = "Registrar usuario";
require_once '../vista/plantilla/head.php';

if (isset($_GET['id'])) {
    require_once '../controlador/UsuarioController.php';
    $controlador = new UsuarioController();
    $usuario = $controlador->LeerUsuario($_GET['id']);
}
else{
    echo "<p> Debes seleccionar un usuario de la lista para poder actualizar un usuario</p>";
}

?>
<body>
    <form action="resultado_crear.php" method="post">
        <label for="">Nombre<input type="text" name="nombre" id="nombre" value="<?php echo $usuario->nombre ?>"></label><br>
        <label for="">Apellido<input type="text" name="apellido" id="apellido" value="<?php echo $usuario->apellido ?>"></label><br>
        <label for="">Edad<input type="text" name="edad" id="edad" value="<?php echo $usuario->edad ?>"></label><br>
        <label for="">Género<input type="text" name="genero" id="genero" value="<?php echo $usuario->genero ?>"></label><br>
        <input type="submit" value="Actualizar" name="actualizar">
    </form>
</body>
</html>