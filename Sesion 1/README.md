# Sesion 1 - Sistema de Control de Usuarios

## Estructura de Archivos

- **modelo/**:
- Se anticipa que habrá archivos de modelos de datos para la base de datos.

- **modelo/Usuario.php**: 
  - Clase `Usuario` que contiene las propiedades y métodos para manejar la información del usuario.
  - **Propiedades**:
    - `int $id`: Identificador único del usuario.
    - `string $nombre`: Nombre del usuario.
    - `string $apellido`: Apellido del usuario.
    - `string $genero`: Género del usuario.
    - `string $edad`: Edad del usuario.
  - **Métodos**:
    - `crear()`: Método para crear un nuevo usuario.
    - `eliminar()`: Método para eliminar un usuario.
    - `actualizar()`: Método para actualizar la información del usuario.
    - `buscar()`: Método para buscar un usuario.
    
- **vista/**: 
  - Se anticipa que habrá archivos de vista que interactúen con la clase `Usuario`, como formularios para registrar y listar usuarios.

- **vista/crear_usuario.php**: 
  - Archivo que contiene un formulario para crear un nuevo usuario. El formulario envia la información del usuario a la vista **resultado_crear.php** utilizando el **método** POST.

- **vista/Index.html**: 
  - Página principal del sistema de control de usuarios.

## Uso de Funciones
Para registrar un nuevo usuario, se debe utilizar el método `crear()` de la clase `Usuario`. Asegúrese de proporcionar los valores necesarios para las propiedades del usuario antes de llamar a este método.

Nota: El archivo `UsuarioController.php` está ausente en esta sesión. Se debe crear para manejar las operaciones de controlador. 

[Volver al Inicio](../README.md)