<?php
	$pagina = "Lista de usuarios";
    require_once '../controlador/UsuarioController.php';
    $controlador = new UsuarioController();
    $usuarios = $controlador->listar();

	require_once '../vista/plantilla/head.php';
?>


<!-- Hero -->
<div class="text-center bg-image rounded-2" style="
    background-image: url('https://www.shutterstock.com/shutterstock/videos/3586154883/thumb/6.jpg?ip=x480');
    height: 100%;
  ">
  <div class="mask" style="background-color: rgba(0, 0, 0, 0.6);">
    <div class="d-flex justify-content-center align-items-center h-50">
        <div class="text-white">
            
        <!-- Seccion: Lista de usuarios -->
            <div class="container mt-5" style="color:black;">
            <h1 class="text-center text-white justify-content-center">Lista de usuarios</h1> <br>
            <a data-mdb-ripple-init class="btn btn-outline-light btn-lg " href="index.php" role="button">Volver</a> <br> <br>
                <div class="row justify-content-center">
                    
			        <?php foreach ( $usuarios as $usuario) {?>
                    <div class="col-md-2">
                        <div class="card mb-4 animate__animated animate__fadeIn">
                            <?php
                                if ($usuario[3] == "Masculino"){
                                    echo '<img src="https://www.w3schools.com/w3css/img_avatar3.png" class="card-img-top" alt="User Avatar">';
                                }
                                if ($usuario[3] == "Femenino"){
                                    echo '<img src="https://www.w3schools.com/w3css/img_avatar4.png" class="card-img-top" alt="User Avatar">';
                                }
                                if ($usuario[3] == "No binario"){
                                    echo '<img src="https://www.w3schools.com/w3css/img_avatar1.png" class="card-img-top" alt="User Avatar">';
                                }
                            ?>
                            <div class="card-body">
                                <h5 class="card-title">ID <?php echo $usuario[0]; ?></h5>
                                <p class="card-text"><?php echo "$usuario[1] $usuario[2]";?><br><?php echo $usuario[4];?><br><?php echo $usuario[3];?></p>
                                <a class="btn btn-outline-primary" href="actualizar_usuario.php?id=<?php echo $usuario[0]?>"><img src="img/actualizar.png" alt="" width="24px"></a>
                                <a class="btn btn-outline-danger" href="eliminar_usuario.php?id=<?php echo $usuario[0]?>"><img src="img/eliminar.png" alt="" width="24px"></a>
                            </div>
                        </div>
                    </div>
			        <?php }?>	                        
                </div>    
                <br>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php 
	require_once '../vista/plantilla/footer.php';
?>