## Estructura  

1. **Archivos HTML (interfaz de usuario)**:  
   - **form_compra.php**: Formulario para registrar una compra de vehículo.  
   - **form_usuario.php**: Formulario para registrar un nuevo cliente.  
   - **form_vehiculo.php**: Formulario para registrar un nuevo vehículo.  

2. **Archivos PHP (lógica del servidor)**:  
   - **insertar_compra.php**: Procesa la información del formulario de compra y la inserta en la base de datos.  
   - **insertar_usuario.php**: Procesa la información del formulario de usuario y la inserta en la base de datos.  
   - **insertar_vehiculo.php**: Procesa la información del formulario de vehículo y la inserta en la base de datos.  

## Cómo Usar  

1. **Configura la conexión a la base de datos** en los archivos `insertar_compra.php`, `insertar_usuario.php` y `insertar_vehiculo.php` con tus credenciales locales.  
   
2. **Accede a los formularios** a través de un navegador web (por ejemplo, accediendo a `form_compra.php`, `form_usuario.php`, o `form_vehiculo.php`).  

3. **Completa los formularios** y envíalos. Los datos se procesarán y se responderá con un mensaje de éxito o error.  

## Notas  

- Asegúrate de que las tablas estén configuradas correctamente en tu base de datos para que el sistema funcione.  
- Considera mejorar la seguridad y la validación de entradas para evitar problemas de inyección SQL y otros errores.  
- Este proyecto es una base para personalizar y expandir según tus necesidades.  



Explicación de los Archivos
Archivo 1: form_compra.php
Este es un formulario HTML que permite a los usuarios registrar una nueva compra de vehículo. Incluye campos para ingresar la matrícula del vehículo y el DNI del usuario. Al enviar el formulario, los datos se envían a insertar_compra.php.
Funcionalidad: Permite registrar la compra de un vehículo.

Archivo 2: form_usuario.php
Este formulario HTML permite a los usuarios registrar un nuevo cliente. Solicita el DNI, nombre, apellidos, teléfono y correo electrónico del usuario. Los datos se envían a insertar_usuario.php para ser procesados.
Funcionalidad: Permite registrar un nuevo cliente.

Archivo 3: form_vehiculo.php
Similar a los anteriores, este formulario permite registrar un nuevo vehículo. Solicita la matrícula, marca, modelo y precio del vehículo. Los datos se envían a insertar_vehiculo.php.
Funcionalidad: Permite registrar un nuevo vehículo.

Archivo 4: insertar_compra.php
Este archivo PHP procesa la información del formulario de compra. Se conecta a la base de datos e inserta la nueva compra en la tabla Compras. También obtiene y muestra el precio del vehículo comprado.
Funcionalidad: Procesa el registro de una compra y muestra confirmación.
Errores: Maneja errores en la inserción y muestra mensajes relevantes al usuario.

Archivo 5: insertar_usuario.php
Este archivo PHP se encarga de procesar el registro de un nuevo usuario. Conecta a la base de datos y inserta los datos del usuario en la tabla Usuarios. Muestra un mensaje al finalizar.
Funcionalidad: Procesa el registro de un nuevo usuario.
Errores: Maneja errores en la inserción y muestra mensajes relevantes al usuario.

Archivo 6: insertar_vehiculo.php
Similar a los anteriores, este archivo procesa el formulario para registrar un nuevo vehículo. Se conecta a la base de datos e inserta los datos en la tabla Vehiculos.
Funcionalidad: Procesa el registro de un nuevo vehículo.
Errores: Maneja errores en la inserción y muestra mensajes relevantes al usuario.