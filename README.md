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
 - Detalles de perfil
 - Cambio de contraseña

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
        
