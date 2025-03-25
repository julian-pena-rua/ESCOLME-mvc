# Sesion 5 - Sistema de Control de Usuarios

## Descripción
En esta sesión, se finalizará el sistema de control de usuarios implementando las acciones restantes del CRUD (Actualizar y eliminar), se modificaron algunos de los diseños y elementos en las vistas para garantizar brindar una buena experiencia al usuario y le sea amigable en su manejo. 

## Librerias utilizadas:
- `Boostrap 5`: para el diseño y la estructura de la página.
- `w3css`: para el diseño y la estructura de la página.
- `Animate.css`: para agregar animaciones a los elementos de la página.
- `FontAwesome`: para agregar iconos a la página.
- `Google Fonts`: para agregar fuentes a la página.

## Estructura de Archivos

- **modelo/Usuario.php**: 
  - Clase `Usuario` que contiene las propiedades y métodos para manejar la información del usuario.

- **modelo/log.php**: 
  - Este archivo maneja el registro de acciones o errores en el sistema.

- **modelo/database.php**: 
  - Este archivo gestiona la conexión a la base de datos y contiene métodos para conectar y desconectar de la base de datos.

- **modelo/borrar_basedatos.sql**: 
  - Este archivo contiene las instrucciones SQL para eliminar la base de datos o tablas específicas.

- **modelo/generar_basedatos.sql**: 
  - Este archivo contiene las instrucciones SQL para crear la base de datos y las tablas necesarias para el sistema, incluyendo la tabla `Usuario`.

- **controlador/UsuarioController.php**: 
  - Clase `UsuarioController` que contiene el método `RegistrarUsuario` y `LeerUsuario`.
  - **Método**:
    - `RegistrarUsuario()`: Este método maneja el registro de un nuevo usuario. Verifica si la solicitud es de tipo POST y si se ha enviado el campo "registrar". Luego, crea una nueva instancia de la clase `Usuario` y llama al método `crear()` para registrar al usuario.
    - `LeerUsuario(id)`: Este método maneja la lectura de un usuario. Verifica si la solicitud es de tipo GET y si se ha enviado el campo "id". Luego, crea una nueva instancia de la clase `Usuario` y llama al método `buscar()` para buscar al usuario.
    - `EliminarUsuario(id)`: Este método maneja la eliminación de un usuario. Verifica si la solicitud es de tipo GET y si se ha enviado el campo "id". Luego, crea una nueva instancia de la clase `Usuario` y llama al método `eliminar()` para eliminar al usuario.
    - `ActualizarUsuario(id)`: Este método maneja la actualización de un usuario. Ver ifica si la solicitud es de tipo POST y si se ha enviado el campo "actualizar". Luego, crea una nueva instancia de la clase `Usuario` y llama al método `actualizar()` para actualizar al usuario.

- **vista/eliminar_usuario.php**: 
  - Archivo de vista que muestra un mensaje de confirmación al eliminar un usuario.

- **vista/actualizar_usuario.php**: 
  - Archivo de vista que contiene un formulario para actualizar la información de un usuario.

- **vista/listar_usuarios.php**: 
  - Archivo que muestra una lista de usuarios registrados en el sistema.

- **vista/resultado_crear.php**: 
  - Archivo que muestra el resultado de la creación de un usuario, incluyendo mensajes de éxito o error.

- **vista/leer_usuario.php**: 
  - Archivo de vista que muestra la información de un usuario específico.

- **vista/crear_usuario.php**: 
  - Archivo de vista que contiene el formulario para registrar un nuevo usuario.

- **vista/Index.html**: 
  - Página principal del sistema de control de usuarios.

- **vista/actualizar_usuario.php**:
- Archivo de vista que muestra un formulario para actualizar la información de un usuario.

- **vista/img/**: 
  - Carpeta que contiene imágenes utilizadas en las vistas.

- **vista/plantilla/**: 
  - Carpeta que contiene archivos de plantilla para el encabezado y pie de página.


## Uso de Funciones y Métodos de la clase Usuario

Para registrar un nuevo usuario, se debe enviar una solicitud POST con los campos necesarios (nombre, apellido, género, edad) y llamar al método `RegistrarUsuario()` del controlador. El método `crear()` de la clase `Usuario` se encarga de insertar el nuevo usuario en la base de datos. 

Para leer la información de un usuario, se debe enviar una solicitud GET con el campo "id" y llamar al método `LeerUsuario(id)` del controlador. El método `buscar() ` de la clase `Usuario` se encarga de buscar al usuario en la base de datos. 

Para listar los usuarios registrados, se debe llamar al método `listar_usuarios()` del controlador. El método `listar()` de la clase `Usuario` se encarga de buscar a todos los usuarios.

Para actualizar la información de un usuario, se debe enviar una solicitud POST con los campos necesarios (nombre, apellido, género, edad) y llamar al método `ActualizarUsuario(id)` del controlador . El método `actualizar()` de la clase `Usuario` se encarga de actualizar la información del usuario en la base de datos.

Para eliminar un usuario, se debe enviar una solicitud GET con el campo "id" y llamar al método `EliminarUsuario(id)` del controlador. El método `eliminar()` de la clase `Usuario` se encarga de eliminar al usuario de la base de datos.

## Uso de Funciones y Métodos de la Clase LOG

### modelo/log.php

- **Clase `Log`**: 
  - Esta clase maneja el registro de mensajes en un archivo de log.
  
  **Propiedades**:
  - `rutaArchivo`: Ruta del archivo de log donde se almacenarán los mensajes. En este momento está configurado para ir a la carpeta log y crear el archivo allí si este no existe.
  - `logLevel`: Nivel de severidad del log (0 = error, 1 = alerta, 2 = info, 3 = debug).
  - `logMensaje`: Mensaje que se va a registrar.
  - `logHora`: Marca de tiempo de cuando se creó la entrada de log.

  **Constructor**:
  - `__construct($mensaje, $level)`: 
    - Este constructor toma un mensaje y un nivel de log como parámetros. Abre el archivo de log en modo de anexado y escribe la entrada de log con una marca de tiempo.

### USO
PHP
```
$log = new Log("Mensaje de prueba", 2);
```
Esto significa que se va a registrar un mensaje de nivel de log 2 (info) con el texto "Mensaje de prueba".

[Volver al Inicio](../README.md)
