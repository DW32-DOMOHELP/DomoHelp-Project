<?php
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
//Todas las rutas de autentificacion de Laravel

Auth::routes();

//Ruta a la vista de la landing page
Route::get('/', function () {
   return redirect('/home'); 
});
Route::get('/home', function () {
    return view('01_landing.home');
});

//Ruta de redireccion al desloguearte
Route::get('/logout', function () {
    Auth::logout();
    return redirect('/home');
});

//Rutas para controlar el formulario de contacto
Route::get('home',
   ['as' => 'home', 'uses' => 'HomeController@create']);
Route::post('home',
    ['as' => 'contact_store', 'uses' => 'HomeController@store']);

//Grupo de rutas para el control de los administradores
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function(){
   
    Route::resource('users', 'UserController');
    Route::get('users/{id_user}/destroy', [
       'as' => 'admin.users.destroy',
       'uses' => 'UserController@destroy'
       ]);
    Route::get('users/{id_user}/edit', [
       'as' => 'admin.users.edit',
       'uses' => 'UserController@edit'
       ]);
    Route::resource('items', 'ItemController');
    
});

//Ruta para obtener los dispositivos del usuario conectado
//Con el middleware('auth') no funciona
Route::get('/interface/{id_user}/{id}/{val}', 'stateController@getItemState');

//Ruta para controlar los dispositivos del usuario conectado
Route::post('/interface/{id_user}', 'InterfaceController@sendCommand')->middleware('auth')->name('CambioEstado');

//Ruta para la interfaz del usuario conectado con sus items
Route::get('/interface/{id_user}', 'stateController@sacarItems')->middleware('auth')->name('InterfaceUser');


//Ruta a la vista de la interfaz de usuario
Route::get('/interface', function () {
    return redirect()->route('InterfaceUser', ['id_user' => Auth::user()->id_user]);
 });
 
Route::post('/interface', function () {
    return redirect()->route('CambioEstado', ['id_user' => Auth::user()->id_user]);
 });
