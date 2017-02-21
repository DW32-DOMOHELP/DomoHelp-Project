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

### Instalacion de Laravel

<img src="data:image/png;base64,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" width="200">

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

### Heroku
<img src="data:image/jpeg;base64,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" width="200">
    Para desplegar la aplicación en heroku hemos seguido los pasos de la siguiente guia: https://devcenter.heroku.com/articles/getting-started-with-php#set-up
    
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

### Licencia

The MIT License (MIT)

Copyright (c) 2016 Carlos Villar, David Zubiaurre and Egoitz Uranga.

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.