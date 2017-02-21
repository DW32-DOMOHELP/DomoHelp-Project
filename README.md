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
    - Cambio de contraseña en caso de no acordarse de ella.

### Página web
    http://domohelp.herokuapp.com
    
----------------------------------------------------------------------------------------------

### Instalacion de Laravel

<img src="http://programacion.net/files/article/20151219031213_laravel.png" width="200">

    - composer global require "laravel/installer"
    - composer create-project --prefer-dist laravel/laravel [your project]
    - modificar /config/database.php para configurar la base de datos
    - modificar el archivo .env

----------------------------------------------------------------------------------------------

### Pusher

<img src="https://media.licdn.com/media/AAEAAQAAAAAAAAMiAAAAJDBiMDZlMTY4LTlhOGUtNGRjNC1iNWQ1LTg1NGY2MzU2ZmM4OQ.png" width="200">

    - Ir a https://pusher.com/
    - Registrarse y entrar a la "aplicacion" que tenemos ahi creada
    - Tendremos que copiar las keys que nos da Pusher al .env
    
----------------------------------------------------------------------------------------------

### Heroku

<img src="https://a.slack-edge.com/ae7f/plugins/heroku/assets/service_512.png" width="200">

    Para desplegar la aplicación en heroku hemos seguido los pasos de la siguiente guia: https://devcenter.heroku.com/articles/getting-started-with-php#set-up

----------------------------------------------------------------------------------------------

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
----------------------------------------------------------------------------------------------
        
Métodos y rutas de la aplicación
----------------
| Method    | URI                            | Name                | Action                                                                 |
| --------- | ------------------------------ | ------------------- | ---------------------------------------------------------------------- |
| GET       | /                              |  .................. | Closure                                                                |
| GET       | admin                          |  .................. | Closure                                                                | 
| GET       | admin/items                    | items.index         | App\Http\Controllers\ItemController@index                              | 
| POST      | admin/items                    | items.store         | App\Http\Controllers\ItemController@store                              | 
| GET       | admin/items/create             | items.create        | App\Http\Controllers\ItemController@create                             | 
| GET       | admin/items/{id_item}/destroy  | admin.items.destroy | App\Http\Controllers\ItemController@destroy                            |
| GET       | admin/items/{id_item}/edit     | admin.items.edit    | App\Http\Controllers\ItemController@edit                               |
| DELETE    | admin/items/{item}             | items.destroy       | App\Http\Controllers\ItemController@destroy                            |
| PUT       | admin/items/{item}             | items.update        | App\Http\Controllers\ItemController@update                             |
| GET       | admin/items/{item}             | items.show          | App\Http\Controllers\ItemController@show                               |
| GET       | admin/items/{item}/edit        | items.edit          | App\Http\Controllers\ItemController@edit                               |
| POST      | admin/users                    | users.store         | App\Http\Controllers\UserController@store                              |
| GET       | admin/users                    | users.index         | App\Http\Controllers\UserController@index                              |
| GET       | admin/users/create             | users.create        | App\Http\Controllers\UserController@create                             |
| GET       | admin/users/{id_user}/destroy  | admin.users.destroy | App\Http\Controllers\UserController@destroy                            |
| GET       | admin/users/{id_user}/edit     | admin.users.edit    | App\Http\Controllers\UserController@edit                               |
| GET       | admin/users/{user}             | users.show          | App\Http\Controllers\UserController@show                               |
| DELETE    | admin/users/{user}             | users.destroy       | App\Http\Controllers\UserController@destroy                            | 
| PUT       | admin/users/{user}             | users.update        | App\Http\Controllers\UserController@update                             |
| GET       | admin/users/{user}/edit        | users.edit          | App\Http\Controllers\UserController@edit                               |
| GET       | api/user                       | ................... | Closure                                                                |
| POST      | home                           | contact_store       | App\Http\Controllers\HomeController@store                              |
| GET       | home                           | home                | App\Http\Controllers\HomeController@create                             |
| POST      | interface                      | ................... | Closure                                                                |
| GET       | interface                      | ................... | Closure                                                                |
| GET       | interface/{id_user}            | InterfaceUser       | App\Http\Controllers\stateController@sacarItems                        |
| POST      | interface/{id_user}            | CambioEstado        | App\Http\Controllers\InterfaceController@sendCommand                   |
| GET       | interface/{id_user}/{id}/{val} | ................... | App\Http\Controllers\stateController@getItemState                      |
| POST      | login                          | ................... | App\Http\Controllers\Auth\LoginController@login                        |
| GET       | login                          | login               | App\Http\Controllers\Auth\LoginController@showLoginForm                | 
| GET       | logout                         | ................... | Closure                                                                | 
| POST      | logout                         | logout              | App\Http\Controllers\Auth\LoginController@logout                       |
| POST      | password/email                 | ................... | App\Http\Controllers\Auth\ForgotPasswordController@sendResetLinkEmail  |
| GET       | password/reset                 | ................... | App\Http\Controllers\Auth\ForgotPasswordController@showLinkRequestForm |
| POST      | password/reset                 | ................... | App\Http\Controllers\Auth\ResetPasswordController@reset                |
| GET       | password/reset/{token}         | ................... | App\Http\Controllers\Auth\ResetPasswordController@showResetForm        |
| GET       | register                       | register            | App\Http\Controllers\Auth\RegisterController@showRegistrationForm      |
| POST      | register                       | ................... | App\Http\Controllers\Auth\RegisterController@register                  |

### Metodología       

Para el desarrollo del proyecto hemos utilizado la popular metodología Kanban. No hemos utilizado ninguna aplicacion web, para ello hemos utilizado
las pizarras colocadas en nuestra clase y mediante post-its hemos ido rellenando las columnas de TO DO, DOING y DONE. Cada vez que avanzabamos en el
proyecto hemos ido moviendo cada post-it de columna hasta tener todos en la columna DONE. Señal de que hemos terminado todo lo que teniamos en mente
para la aplicación web.

### Intercambio de datos con Openhab

Enviar datos: Utilizando la funcion sendCommand en el Controlador InterfaceController enviamos mediante un POST a una URL de la Api
de Openhab los datos que necesita para cambiar el estado del dispositivo del cual hemos pasado los datos.

Recibir datos: Aprovechando la existencia de Habmin, una consola de administracion web para Openhab, hemos creado para diferentes
dispositivos unas reglas para que cuando un dispositivo cambie de estado envie un GET a una URL que hemos proporcionado. Cuando dicha
URL reciba un GET el sistema de rutas llamará a la función getItemState del controlador stateController. Esto buscará en la Base de Ddatos
el item y actualizara su estado en la base de datos. Despues de hacer esto utilizamdo Pusher actualizaremos en tiempo real la interfaz
para que la muestre con el estado actual de los items.

----------------------------------------------------------------------------------------------

### Licencia

The MIT License (MIT)

Copyright (c) 2016 Carlos Villar, David Zubiaurre and Egoitz Uranga.

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.