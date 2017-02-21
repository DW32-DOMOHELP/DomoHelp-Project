# DomoHelp-Project

## Descripción

Proyecto de fin de curso del grado de Desarrollo de Aplicaciones Web 2015-2017

Es un proyecto colaborativo entre dos centros, que consiste en la instalacion de unos dispositivos electronicos en el hogar
de los clientes que se puedan controlar a traves de una aplicacion web.

Características
--------

- Autentificacion usando email y contraseña
- Estructura MVC
- PHP + Laravel
- MySQL + PHPmyadmin
- Materialize CSS + Bootstrap
- Formulario de contacto con gmail
- Datos en tiempo real con Pusher
- **Account Management**
    - Cambio de contraseña en caso de no acordarse de ella

### Landing Page
La landing page es la primera página que ven los usuarios al acceder a nuestra web. Esta contiene un boton login para que el usuario se
registre o se loguee. Información sobre quienes somos, que servicios ofrecemos y que tecnologias utilizamos.

Tambien contiene in formulario que cualquiera puede rellenar y preguntarnos lo que necesiten. Una vez pulsado el boton de Enviar
nos llegara un corrreo electronico a nuestra cuenta de gmail.

### Login / Registro
Al pulsar el boton Login de la Landing Page nos llevara a la ruta /login, aqui el usuario en el caso de que tenga una cuenta
se podra loguear, en caso contrario en el navbar tiene un link de registro el cual llevara al usuario a /register que tiene un formulario
con los campos necesarios a rellenar y con sus respectivas validaciones para cada uno de ellos.

Para acceder a la aplicacion web solo hay que introducir el usuario y la contraseña que coincdan. Hay tres tipos de Usuarios:

    - Contacto: Este usuario, esta registrado pero no tiene contratado ningún dispositivo. Cuando acceda a su interfaz esta le aparecera
      con un mensaje diciendole que no tiene ningún item.
     
    - Cliente: Este usuario esta registrado y si tiene contratado algunos dispositivos. Al acceder a su interfaz, le apareceran los items 
      contratados, y los podra manejar de la manera que desee.
      
    - Administrador: Cuando el administrador acceda a la aplicacion le llevara a la ruta /admin en la que podra configurar todos los items
      y los usuarios.

### Panel de Administración
En el panel de administración a parte de la barra de navegacion para desconectarte, el administrador dispondra de 2 botones, uno para administrar
usuarios y el otro para administrar dispositivos.

El boton de administrar usuarios le llevara a la ruta /admin/users.

El boton de administrar dispositivos le llevara a la ruta /admin/items.

### Dispositivos
En el panel de administración de los items al administrador le aparecera una lista con todos los items instalados a todos los
usuarios. Hay 3 botones para administrar los items, para modificar el dispositivo, para eliminarlo o para añadir uno nuevo.

A parte de esos 3 botones, tambien hay uno que devuelve al administrador al panel de administración.

#### Modificar Dispositivo
Hay un boton de modificar al lado de cada dispositivo, una vez pulsado dicho boton, nos llevara a la ruta /admin/items/{id}/edit. En esta
página aparece un formulario cuyos campos contienen los datos del item a editar, para que puedas modificar lo que quieras. En el caso que al 
final no quieras editar el dispositivo puedes pulsar el boton cancelar. Y en el caso de haber hecho los cambios al pulsar el boton editar
se guarda en la base de datos el dispositivo actualizado.

#### Añadir Dispositivo
Al pulsar el boton de Añadir nuevo dipositivo, nos redirecciona a la ruta /admin/items/create. Una vez aqui nos aparecera un formulario con
los campos que debe de tener el dispositivo IP, Nombre, Descripcion, Estado y la ID del usuario. Al rellenar los campos a nuestro gusto, tenemos
el boton de añadir, para añadir el item a la base de datos y el boton de cancelar.

#### Eliminar dispositivo
En el caso de que pulsemos el boton de eliminar el dispositivo, nos aparecera una alerta preguntandonos si estamos seguros de que queremos
eliminar el item. Si pulsamos aceptar el dispositivo se eliminará. 

### Usuarios
En el panel de administración de los usuarios le aparecera una lista con todos los usuarios que existen en la base de datos, con lo valores
que contiene cada campo. Hay 3 botones para administrar los usuarios, uno para añadir uno nuevo, otro para editarlo y otro para eliminar
el usuario.

A parte de esos 3 botones, tambien hay otro botom que devuelve al administrador al panel de administración.

#### Modificar Usuario
Hay un boton de modificar al lado de cada usuario, una vez pulsado ese boton, nos llevara a la ruta /admin/users/{id}/edit. En esta página
aparecera un formulario cuyos campos contienen los datos del usuario a editar para modificarlo y asi poder corregir errores etc. En el caso
de no querer guardar los cambios pulsas el boton cancelar, y si quieres guardar los datos en la base de datos se pulsa el boton editar.

#### Añadir Usuario
Una vez pulsado el boton de Añadir nuevo usuario, se redirecionara al administrador a la ruta /admin/users/create. En esta página se nos creara
un formulario con los campos necesarios para crear el usuario, RELLENAR CON LOS CAMPOS. Una vez los campos han sido rellenados el administrador
pulsara el boton añadir para insertar el usuario en la base de datos o el boton de cancelar si no quiere añadirlo.

#### Eliminar Usuario
Al pulsar el boton de eliminar que se situa al lado de cada usuario, nos aparecera una alerta para confirmar si queremos eliminar dicho usuario,
en el caso de aceptar ese usuario quedara eliminado de la base de datos.

### Interfaz
Cuando un usuario que no sea administrador se loguee en la aplicación, al pulsar el boton login se le redireccionara a la
ruta /interfaz. En el caso que dicho usuario no tenga ningun item, es decir, que sea contacto le aparecera un mensaje en
su interfaz pidiendole que contacte con nosotros y un boton para volver a la página principal.

En el caso de que el usuario sea cliente, la interfaz se creara mostrando los dispositivos que tiene contratados el cliente
sacando los datos de la base de datos.

En la interfaz se mostraran 2 tipos de dispositivos:

      - Dispositivos de Luz: En la interfaz se mostrará la bombilla en dos estados diferentes, la luz encendida y la luz apagada,
        si pulsamos la bombilla cuando esta apagada esta se encendera en la aplicacion y en casa. Lo mismo al reves.
        
      - Sensor de temperatura: En la interfaz aparecera el dato que nos envia el sensor con la temperatura que hace en tiempo real
        en el hogar del cliente.
Uso de la API
----------------
| Method    | URI                            | Name                | Action                                                                 |
| --------- | ------------------------------ | ------------------- | ---------------------------------------------------------------------- |
| GET|HEAD  | /                              |  .................. | Closure                                                                |
| GET|HEAD  | admin                          |  .................. | Closure                                                                | 
| GET|HEAD  | admin/items                    | items.index         | App\Http\Controllers\ItemController@index                              | 
| POST      | admin/items                    | items.store         | App\Http\Controllers\ItemController@store                              | 
| GET|HEAD  | admin/items/create             | items.create        | App\Http\Controllers\ItemController@create                             | 
| GET|HEAD  | admin/items/{id_item}/destroy  | admin.items.destroy | App\Http\Controllers\ItemController@destroy                            |
| GET|HEAD  | admin/items/{id_item}/edit     | admin.items.edit    | App\Http\Controllers\ItemController@edit                               |
| DELETE    | admin/items/{item}             | items.destroy       | App\Http\Controllers\ItemController@destroy                            |
| PUT|PATCH | admin/items/{item}             | items.update        | App\Http\Controllers\ItemController@update                             |
| GET|HEAD  | admin/items/{item}             | items.show          | App\Http\Controllers\ItemController@show                               |
| GET|HEAD  | admin/items/{item}/edit        | items.edit          | App\Http\Controllers\ItemController@edit                               |
| POST      | admin/users                    | users.store         | App\Http\Controllers\UserController@store                              |
| GET|HEAD  | admin/users                    | users.index         | App\Http\Controllers\UserController@index                              |
| GET|HEAD  | admin/users/create             | users.create        | App\Http\Controllers\UserController@create                             |
| GET|HEAD  | admin/users/{id_user}/destroy  | admin.users.destroy | App\Http\Controllers\UserController@destroy                            |
| GET|HEAD  | admin/users/{id_user}/edit     | admin.users.edit    | App\Http\Controllers\UserController@edit                               |
| GET|HEAD  | admin/users/{user}             | users.show          | App\Http\Controllers\UserController@show                               |
| DELETE    | admin/users/{user}             | users.destroy       | App\Http\Controllers\UserController@destroy                            | 
| PUT|PATCH | admin/users/{user}             | users.update        | App\Http\Controllers\UserController@update                             |
| GET|HEAD  | admin/users/{user}/edit        | users.edit          | App\Http\Controllers\UserController@edit                               |
| GET|HEAD  | api/user                       | ................... | Closure                                                                |
| POST      | home                           | contact_store       | App\Http\Controllers\HomeController@store                              |
| GET|HEAD  | home                           | home                | App\Http\Controllers\HomeController@create                             |
| POST      | interface                      | ................... | Closure                                                                |
| GET|HEAD  | interface                      | ................... | Closure                                                                |
| GET|HEAD  | interface/{id_user}            | InterfaceUser       | App\Http\Controllers\stateController@sacarItems                        |
| POST      | interface/{id_user}            | CambioEstado        | App\Http\Controllers\InterfaceController@sendCommand                   |
| GET|HEAD  | interface/{id_user}/{id}/{val} | ................... | App\Http\Controllers\stateController@getItemState                      |
| POST      | login                          | ................... | App\Http\Controllers\Auth\LoginController@login                        |
| GET|HEAD  | login                          | login               | App\Http\Controllers\Auth\LoginController@showLoginForm                | 
| GET|HEAD  | logout                         | ................... | Closure                                                                | 
| POST      | logout                         | logout              | App\Http\Controllers\Auth\LoginController@logout                       |
| POST      | password/email                 | ................... | App\Http\Controllers\Auth\ForgotPasswordController@sendResetLinkEmail  |
| GET|HEAD  | password/reset                 | ................... | App\Http\Controllers\Auth\ForgotPasswordController@showLinkRequestForm |
| POST      | password/reset                 | ................... | App\Http\Controllers\Auth\ResetPasswordController@reset                |
| GET|HEAD  | password/reset/{token}         | ................... | App\Http\Controllers\Auth\ResetPasswordController@showResetForm        |
| GET|HEAD  | register                       | register            | App\Http\Controllers\Auth\RegisterController@showRegistrationForm      |
| POST      | register                       | ................... | App\Http\Controllers\Auth\RegisterController@register                  |


| Nombre                                        | Descripción                                                        |
| --------------------------------------------- | ------------------------------------------------------------------ |
| **config**/passport.js                        | Passport Local y OAuth estrategias.                                |
| **controllers**/Administracion.js             | Controller para administración                                     |
| **controllers**/Alertas.js                    | Controller el form de alertas                                      |
| **controllers**/Comprar.js                    | Controller el form de compra/renovación                            |
| **controllers**/DatosAPI.js                   | Controller para las API de datos que envían los drones.            |
| **controllers**/DronesAPI.js                  | Controller para las API de drones.                                 |
| **controllers**/Email.js                      | Controller para enviar correos.                                    |
| **controllers**/error404.js                   | Controller que salta cuando no se envían datos APIs correctamente. |
| **controllers**/Estructura_Email.js           | Controller para Mailgun.                                           |
| **controllers**/Home.js                       | Controller para sessiones de usuario.                              |
| **controllers**/LoginRegistro.js              | Controller para login y registro.                                  |
| **controllers**/Perfil.js                     | Controller para el perfil de usuario.                              |
| **controllers**/Productos.js                  | Controller para productos.                                         |
| **controllers**/Pronosticos.js                | Controller para pronósticos.                                       |
| **controllers**/RangoFecha.js                 | Controller para el form de rango de fechas.                        |
| **controllers**/Tienda.js                     | Controller para la tienda.                                         |
| **controllers**/UploadImage.js                | Controller para poder subir avatares.                              |
| **controllers**/validadarAPI.js               | Controller para validar en el servidor las APIs.                   |
| **models**/Alertas.js                         | Schema Mongoose y model de Alertas.                                |
| **models**/Dato.js                            | Schema Mongoose y model de Datos.                                  |
| **models**/Drones.js                          | Schema Mongoose y model de Drones.                                 |
| **models**/HistorialPedidos.js                | Schema Mongoose y model de HistorialPedidos.                       |
| **models**/Productos.js                       | Schema Mongoose y model de Productos.                              |
| **models**/Usuario.js                         | Schema Mongoose y model de Usuario                                 |
| **public**/                                   | (fonts, css, js, img).                                             |
| **public**/**avatar**/                        | El lugar donde se guardan los avatares.                            |
| **public**/**bootstrap**/                     | Todo lo relacinado con bootstrap.                                  |
| **public**/**css**/                           | Ubicación de los css.                                              |
| **public**/**dist**/                          | Un theme de boostrap.                                              |
| **public**/**icons**/                         | Iconos que utilizamos.                                             |
| **public**/**images**/                        | Imágenes que utilizamos.                                           |
| **public**/**js**/browserMqtt.js              | Librería Mqtt.                                                     |
| **public**/**js**/comprar.js                  | Todo lo relacionado con la página de compra.                       |
| **public**/**js**/cookie.js                   | Script para las cookies.                                           |
| **public**/**js**/migrafica2.js               | Script para mostrar gráficas.                                      |
| **public**/**js**/modernizr.js                | Librería Webflow.                                                  |
| **public**/**js**/myscriptMongo.js            | Script que controla toda la página de administración.              |
| **public**/**js**/pace.min.js                 | Librería pace, barra de progreso de carga de la página.            |
| **public**/**js**/scriptMqtt.js               | Script para el protocolo MQTT.                                     |
| **public**/**js**/scriptsMapa.js              | Script para las rutas del dron.                                    |
| **public**/**js**/subscripcion.js             | Script para el modal de subscripción.                              |
| **public**/**js**/validar_administracion.js   | Validaciones de formularios de la página administración.           |
| **public**/**js**/validar_compra.js           | Validaciones de formularios de la página compra.                   |
| **public**/**js**/validar_index.js            | Validaciones de formularios de la página index.                    |
| **public**/**js**/validar_perfil.js           | Validaciones de formularios de la página perfil.                   |
| **public**/**js**/validar_recoverPass.js      | Validación de formularios del modal de recuperación de contraseña. |
| **public**/**js**/webflow.js                  | Librería Webflow.                                                  |
| **public**/**libs**/                          | Librerias JQuery.                                                  |
| **views**/**layouts**/main.handlebars         | Base de la plantilla.                                              |
| **views/partials**/modal.handlebars           | Plantilla del modal de login/registro.                             |
| **views/partials**/404.handlebars             | Página de error.                                                   |
| **views/partials**/admin.handlebars           | Página de administración de la base de datos.                      |
| **views/partials**/administracion.handlebars  | Página de administración del dron.                                 |
| **views/partials**/comprar.handlebars         | Página de la tienda.                                               |
| **views/partials**/index.handlebars           | Página principal de la Web.                                        |
| **views/partials**/perfil.handlebars          | Página de perfil de usuario.                                       |
| **views/partials**/recoverPassword.handlebars | Página para mostrar modal de recuperación de contraseña.           |
| .env. example                                 | Tus API keys, tokens, contraseñas y database URI.                  |
| app.js                                        | Archivo principal de la aplicación.                                |
        
