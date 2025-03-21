# Sesion 2 - Sistema de Control de Usuarios

## Estructura de Archivos
- **modelo/Usuario.php**: 
  - Clase `Usuario` que contiene las propiedades y métodos para manejar la información del usuario.
  
- **modelo/database.php**: 
  - Este archivo gestiona la conexión a la base de datos y contiene métodos para conectar y desconectar de la base de datos.
  - **Propiedades**:
  - `string $host`: Dirección del servidor de base de datos.
  - `string $dbname`: Nombre de la base de datos.
  - `string $user`: Nombre de usuario para la base de datos.
  - `string $password`: Contraseña para la base de datos.
  - **Métodos**:
  - `conectar()`: Método para conectar a la base de datos.
  
- **modelo/script.sql**: 
  - Este archivo contiene las instrucciones SQL para crear la base de datos y las tablas necesarias para el sistema, incluyendo la tabla `Usuario`.
  
- **controlador/UsuarioController.php**: 
  - Este archivo está vacío, pero se espera que contenga métodos para manejar las operaciones relacionadas con los usuarios, como registrar, eliminar, actualizar y buscar usuarios.

- **vista/**: 
  - Se anticipa que habrá archivos de vista que interactúen con la clase `Usuario`, como formularios para registrar y listar usuarios.

- **vista/crear_usuario.php**: 
  - Archivo que contiene un formulario para crear un nuevo usuario. El formulario envia la información del usuario a la vista **resultado_crear.php** utilizando el **método** POST.

- **vista/resultado_crear.php**: 
  - Archivo que muestra el resultado de la creación de un nuevo usuario. Si la creación es exitosa, muestra un mensaje de éxito; si no, muestra un mensaje de error. Actualmentes es utilizado para probar la conexión de la base de datos.

## Uso de Funciones
Aunque el archivo `UsuarioController.php` está vacío en esta sesión, se anticipa que en futuras implementaciones se añadan métodos que interactúen con la clase `Usuario` para realizar las operaciones mencionadas. Este controlador es fundamental para gestionar la lógica de negocio del sistema.

[Volver al Inicio](../README.md)