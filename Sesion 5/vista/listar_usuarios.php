<?php
    require_once '../controlador/UsuarioController.php';
    $controlador = new UsuarioController();
    $usuarios = $controlador->listar();
?>

<h1>Lista de usuarios</h1>

<table border=1>
		<head>
			<td>Nombre</td>
			<td>Apellido</td>
            <td>Genero</td>
            <td>Edad</td>
			<td>Actualizar</td>
			<td>Eliminar</td>
		</head>
		<body>
			<?php foreach ( $usuarios as $usuario) {?>
			<tr>
                <td><?php echo $usuario[1] ?></td>
                <td><?php echo $usuario[2] ?></td>
				<td><?php echo $usuario[3] ?></td>
				<td><?php echo $usuario[4] ?></td>
				<td><a href="actualizar_usuario.php?id=<?php echo $usuario[0]?>">Actualizar</a> </td>
				<td><a href="eliminar_usuario.php?id=<?php echo $usuario[0]?>">Eliminar</a>   </td>
			</tr>
			<?php }?>
		</body>
	</table>
	<a href="index.php">Volver</a>