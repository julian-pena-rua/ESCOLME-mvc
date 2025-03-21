<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="GET">
    <label for="">Id<input type="text" name="id"></label>
    <br>
    <input type="submit" value="Buscar" name="buscar">
</form>

<?php
    require_once '../controlador/UsuarioController.php';
    $controlador = new UsuarioController();
    if(isset($_GET) && isset($_GET['buscar'])){
        $usuario = $controlador->LeerUsuario($_POST['id']);
        echo $usuario->nombre;
    }
?>

