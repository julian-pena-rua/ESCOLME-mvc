
<?php
$pagina = "Buscar usuario";
require_once '../vista/plantilla/head.php';
require_once '../controlador/UsuarioController.php';
$controlador = new UsuarioController();
?>

<div class="w3-center w3-container">
    <h1 >Buscador</h1>
    <p>Digitar id del usuario que se desea buscar</p>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="">Id <input type="text" name="id"></label>
        <input class = "w3-button w3-green" type="submit" value="Buscar" name="buscar">
    </form>
</div>


<?php
if(isset($_POST) && isset($_POST['buscar'])){
    $usuario = $controlador->LeerUsuario($_POST['id']);
    if( $usuario != null ){
?>
<div id="id01" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">
        <div class="w3-center"><br>
        <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-xlarge w3-transparent w3-display-topright" title="Close Modal">×</span>
            <?php
                if($usuario->genero == "Masculino"){
                    echo '<img src="https://www.w3schools.com/w3css/img_avatar3.png" alt="Avatar" style="width:30%" class="w3-circle w3-margin-top">';
                }
                if($usuario->genero == "Femenino"){
                    echo '<img src="https://www.w3schools.com/w3css/img_avatar4.png" alt="Avatar" style="width:30%" class="w3-circle w3-margin-top">';
                }
                if($usuario->genero == "No binario"){
                    echo '<img src="https://www.w3schools.com/w3css/img_avatar1.png" alt="Avatar" style="width:30%" class="w3-circle w3-margin-top">';
                }
            ?>            
        </div>

        <div class="w3-section w3-center">
            <label><b><?php echo "$usuario->nombre $usuario->apellido" ?></b></label><br>
            <label><b><?php echo $usuario->edad ?></b></label><br>
            <label><b><?php echo $usuario->genero ?></b></label><br>
            <a class="btn btn-outline-primary" href="actualizar_usuario.php?id=<?php echo $usuario->id?>"><img src="img/actualizar.png" alt="" width="24px"></a>
            <a class="btn btn-outline-danger" href="eliminar_usuario.php?id=<?php echo $usuario->id?>"><img src="img/eliminar.png" alt="" width="24px"></a>
        </div>

        <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
            <button onclick="document.getElementById('id01').style.display='none'" type="button" class="w3-button w3-red">Cerrar</button>
        </div>

    </div>
</div>

<?php
        echo "<script  type='text/javascript'>document.getElementById('id01').style.display='block'</script>";
    }
}
?>
<br><br><br>
<a class="w3-btn w3-green" href="index.php">Volver al inicio</a>

<?php
require_once '../vista/plantilla/footer.php';
?>