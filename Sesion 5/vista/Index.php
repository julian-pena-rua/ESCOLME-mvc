<?php
// titulo de la página
$GLOBALS['pagina'] = "Sistema control de usuarios";
require_once '../vista/plantilla/head.php';
?>
<style>
  @font-face {
  font-family: 'Allerta Stencil';
  font-style: normal;
  font-weight: 400;
  src: url(https://fonts.gstatic.com/s/allertastencil/v22/HTx0L209KT-LmIE9N7OR6eiycOe1_Db2.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
  .w3-Allerta {
    font-family: 'Allerta Stencil', serif;
    background-color: black;
    color: white;
  }
</style>

<body>
    <div class="w3-container">
    <h1 class="w3-center w3-Allerta">Sistema de control de usuarios</h1>
    <p class="w3-center">En esta plataforma se podrá administrar la información de los 
    registrados.</p>
    <ul class="w3-ul">  
    <li class="w3-bar">
      <img src="img/crear.png" class="w3-bar-item w3-circle w3-hide-small" style="width:85px">
      <div class="w3-bar-item">
        <span class="w3-large">Crear</span><br>
        <a href="crear_usuario.php" class="w3-btn w3-green">C - Crear</a>
      </div>
    </li>
    <li class="w3-bar">
      <img src="img/buscar.png" class="w3-bar-item w3-circle w3-hide-small" style="width:85px">
      <div class="w3-bar-item">
        <span class="w3-large">Leer usuario</span><br>
        <a href="leer_usuario.php" class="w3-btn w3-green">R - Buscar</a>
      </div>
    </li>
    <li class="w3-bar">
      <img src="img/listar.png" class="w3-bar-item w3-circle w3-hide-small" style="width:85px">
      <div class="w3-bar-item">
        <span class="w3-large">Listar usuarios</span><br>
        <a href="listar_usuarios.php" class="w3-btn w3-green">R - Listar</a>
      </div>
    </li>
    <li class="w3-bar">
      <img src="img/actualizar.png" class="w3-bar-item w3-circle w3-hide-small" style="width:85px">
      <div class="w3-bar-item">
        <span class="w3-large">Actualizar</span><br>
        <a href="#" class="w3-btn w3-yellow">U - Actualizar</a>
      </div>
    </li>
    
    <li class="w3-bar">
      <img src="img/eliminar.png" class="w3-bar-item w3-circle w3-hide-small" style="width:85px">
      <div class="w3-bar-item">
        <span class="w3-large">Eliminar</span><br>
        <a href="#" class="w3-btn w3-red">D - Eliminar</a>
      </div>
    </li>
  </ul>
</div>

<?php require_once 'plantilla/footer.php'; ?>

</body>
</html>