<?php
$GLOBALS['pagina'] = "Registrar usuario";
require_once '../vista/plantilla/head.php';
?>
<body>
    <form action="resultado_crear.php" method="post">
        <label for="">Nombre<input type="text" name="nombre" id="nombre"></label><br>
        <label for="">Apellido<input type="text" name="apellido" id="apellido"></label><br>
        <label for="">Edad<input type="text" name="edad" id="edad"></label><br>
        <label for="">Género<input type="text" name="genero" id="genero"></label><br><br>
        <input type="submit" value="Enviar" name="registrar">
    </form>
</body>
</html>