<?php
$pagina = "Crear usuario";
require_once '../vista/plantilla/head.php';
?>
 
    <main class="form-signin w-100 m-auto w3-center">
        <form action="resultado_crear.php" method="post" >
            <img id="avatar" class="mb-4" src="https://www.w3schools.com/w3css/img_avatar3.png" alt="" width="200" height="">
            <h1 class="h3 mb-3 fw-normal">Crear usuario</h1>
            <div class="form-floating">
                <input type="text" class="form-control" id="floatingInput" name="nombre" placeholder="John">
                <label for="floatingInput">Nombre</label>
            </div>
            
            <div class="form-floating">
                <input type="text" class="form-control" id="floatingInput" name="apellido" placeholder="Doe">
                <label for="floatingInput">Apellido</label>
            </div>

            <div class="form-floating">
                <input type="number" class="form-control" id="floatingInput" name="edad" placeholder="59">
                <label for="floatingInput">Edad</label>
            </div>

            <div class="form-floating">
                M <input type="radio" name="genero" value="Masculino" class="form-check-input" onclick="cambiarImagenFormulario(1);">
                F <input type="radio" name="genero" value="Femenino" class="form-check-input" onclick="cambiarImagenFormulario(2);">
                No binario <input type="radio" name="genero" value="No binario" class="form-check-input" onclick="cambiarImagenFormulario(3);">
            </div>

            <br>

            <input class="btn btn-primary py-2" type="submit" name="registrar" value="Crear">
            <a  href="index.php" class="w3-button w3-red">Cancelar</a>
        </form>
    </main>
    <script src="/docs/5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<script>
    function cambiarImagenFormulario(sexo) {
        if(sexo == 1){
            document.getElementById("avatar").src = "https://www.w3schools.com/w3css/img_avatar2.png";
        }
        if(sexo == 2){
            document.getElementById("avatar").src = 'https://www.w3schools.com/w3css/img_avatar4.png';
        }
        if(sexo == 3){
            document.getElementById("avatar").src = "https://www.w3schools.com/w3css/img_avatar1.png";
        }
    }
</script>

<?php
require_once '../vista/plantilla/footer.php';
?>