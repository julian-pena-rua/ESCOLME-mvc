<?php

class UsuarioController{
   public function RegistrarUsuario(){
      if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST["registrar"]){
         require_once "../modelo/Usuario.php";
         $usuario = new Usuario();
         $usuario->nombre = $_POST["nombre"];
         $usuario->apellido = $_POST["apellido"];
         $usuario->genero = $_POST["genero"];
         $usuario->edad = $_POST["edad"];
         $usuario->crear();
      }
   }
   public function LeerUsuario($id){
      if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST["buscar"]){
         require_once "../modelo/Usuario.php";
         $usuario = new Usuario();
         return $usuario->buscar($id);
      }
   }

   public function Listar(){
      require_once "../modelo/Usuario.php";
      $usuario = new Usuario();
      return $usuario->listar();
   }

   public function Actualizar(){
      if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST["actualizar"]){
         require_once "../modelo/Usuario.php";
         $usuario = new Usuario();
         $usuario->nombre = $_POST["nombre"];
         $usuario->apellido = $_POST["apellido"];
         $usuario->genero = $_POST["genero"];
         $usuario->edad = $_POST["edad"];
         $usuario->actualizar();
      }
   }
   
   public function Eliminar($id){

   }
}

?>