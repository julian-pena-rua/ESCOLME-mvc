<?php
$pagina = "Actualizar usuario";
require_once '../vista/plantilla/head.php';

if (isset($_GET['id'])) {
    require_once '../controlador/UsuarioController.php';
    $controlador = new UsuarioController();
    $usuario = $controlador->LeerUsuario($_GET['id']);
}
elseif (isset($_POST['actualizar'])) {
    require_once '../controlador/UsuarioController.php';
    $controlador = new UsuarioController();
    $usuario = $controlador->Actualizar($_POST['id']);
    $usuario = $controlador->LeerUsuario($_POST['id']);
}
else{
    die("<p> Debes seleccionar un usuario de la lista para poder actualizar un usuario</p>");
}

?>
    <main class="form-signin w-100 m-auto w3-center">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"  method="post" >
            <img id="avatar" class="mb-4" src="https://www.w3schools.com/w3css/img_avatar3.png" alt="" width="200" height="">
            <h1 class="h3 mb-3 fw-normal">Actualizar usuario</h1>
            <div class="form-floating">
                <input type="text" class="form-control" id="floatingInput" name="id" value="<?php echo $usuario->id ?>" hidden>
                <label for="floatingInput">Id</label>
            </div>    
            <div class="form-floating">
                <input type="text" class="form-control" id="floatingInput" name="nombre" value="<?php echo $usuario->nombre ?>" >
                <label for="floatingInput">Nombre</label>
            </div>
            
            <div class="form-floating">
                <input type="text" class="form-control" id="floatingInput" name="apellido"  value="<?php echo $usuario->apellido ?>">
                <label for="floatingInput">Apellido</label>
            </div>

            <div class="form-floating">
                <input type="number" class="form-control" id="floatingInput" name="edad" value="<?php echo $usuario->edad ?>">
                <label for="floatingInput">Edad</label>
            </div>

            <div class="form-floating"> 
                M <input type="radio" name="genero" value="Masculino" class="form-check-input" onclick="cambiarImagenFormulario('Masculino');">
                F <input type="radio" name="genero" value="Femenino" class="form-check-input" onclick="cambiarImagenFormulario('Femenino');">
                No binario <input type="radio" name="genero" value="No binario" class="form-check-input" onclick="cambiarImagenFormulario('No binario');">
            </div>

            <br>
            <input class="btn btn-primary py-2" type="submit" name="actualizar" value="Actualizar">
            <a  href="index.php" class="w3-button w3-red">Cancelar</a>
        </form>
    </main>
    <script src="/docs/5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<script>
    function cambiarImagenFormulario(sexo) {
        if(sexo == "Masculino"){
            document.getElementById("avatar").src = "https://www.w3schools.com/w3css/img_avatar2.png";
        }
        if(sexo == "Femenino"){
            document.getElementById("avatar").src = 'https://www.w3schools.com/w3css/img_avatar4.png';
        }
        if(sexo == "No binario"){
            document.getElementById("avatar").src = "https://www.w3schools.com/w3css/img_avatar1.png";
        }
    }
</script>

<?php
require_once '../vista/plantilla/footer.php';
?>
