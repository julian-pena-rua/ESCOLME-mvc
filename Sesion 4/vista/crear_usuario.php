<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar usuario</title>
</head>
<body>
    <form action="resultado_crear.php" method="post">
        <label for="">Id <input type="text" name="id" id="id"> </label><br>
        <label for="">Nombre<input type="text" name="nombre" id="nombre"></label><br>
        <label for="">Apellido<input type="text" name="apellido" id="apellido"></label><br>
        <label for="">Edad<input type="text" name="edad" id="edad"></label><br>
        <label for="">Género<input type="text" name="genero" id="genero"></label><br><br>
        <input type="submit" value="Enviar" name="registrar">
    </form>
</body>
</html>