# Sesion 3 - Sistema de Control de Usuarios

## Estructura de Archivos
- **modelo/Usuario.php**: 
  - Clase `Usuario` que contiene las propiedades y métodos para manejar la información del usuario.
  - **Propiedades**:
    - `public $id`: Identificador único del usuario.
    - `public $nombre`: Nombre del usuario.
    - `public $apellido`: Apellido del usuario.
    - `public $genero`: Género del usuario.
    - `public $edad`: Edad del usuario.
  - **Métodos**:
    - `crear()`: Método para crear un nuevo usuario en la base de datos.
    - `eliminar()`: Método para eliminar un usuario.
    - `actualizar()`: Método para actualizar la información del usuario.
    - `buscar()`: Método para buscar un usuario.

- **modelo/database.php**: 
  - Este archivo gestiona la conexión a la base de datos y contiene métodos para conectar y desconectar de la base de datos.
  - **Propiedades**:
  - `string $host`: Dirección del servidor de base de datos.
  - `string $dbname`: Nombre de la base de datos.
  - `string $user`: Nombre de usuario para la base de datos.
  - `string $password`: Contraseña para la base de datos.
  - **Métodos**:
  - `conectar()`: Método para conectar a la base de datos.
  - `cerrar()`: Método para desconectar de la base de datos.
  - `exec()`: Método para consultar la base de datos.

- **modelo/borrar_basedatos.sql**: 
  - Este archivo contiene las instrucciones SQL para eliminar la base de datos o tablas específicas.

- **modelo/generar_basedatos.sql**: 
  - Este archivo contiene las instrucciones SQL para crear la base de datos y las tablas necesarias para el sistema, incluyendo la tabla `Usuario`.

- **controlador/UsuarioController.php**: 
  - Clase `UsuarioController` que contiene el método `RegistrarUsuario`.
  - **Método**:
    - `RegistrarUsuario()`: Este método maneja el registro de un nuevo usuario. Verifica si la solicitud es de tipo POST y si se ha enviado el campo "registrar". Luego, crea una nueva instancia de la clase `Usuario` y llama al método `crear()` para registrar al usuario.

- **vista/crear_usuario.php**: 
  - Archivo de vista que contiene el formulario para registrar un nuevo usuario.

- **vista/resultado_crear.php**: 
  - Archivo que muestra el resultado de la creación de un usuario, incluyendo mensajes de éxito o error.

- **vista/Index.html**: 
  - Página principal del sistema de control de usuarios.

## Uso de Funciones
Para registrar un nuevo usuario, se debe enviar una solicitud POST con los campos necesarios (nombre, apellido, género, edad) y llamar al método `RegistrarUsuario()` del controlador. El método `crear()` de la clase `Usuario` se encarga de insertar el nuevo usuario en la base de datos.

[Volver al Inicio](../README.md)