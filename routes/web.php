<?php

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

Route::group(['prefix' => 'admin'], function(){
   
   Route::resource('users', 'UserController');
   Route::resource('items', 'ItemController');
    
});

//Ruta a la vista de la interfaz de usuario
// Route::get('/interface', function () {
//     return view('04_interface.interface');
// });

//Rutas para controlar el formulario de contacto
Route::get('home',
   ['as' => 'home', 'uses' => 'HomeController@create']);
Route::post('home',
    ['as' => 'contact_store', 'uses' => 'HomeController@store']);



//Ruta de redireccion al desloguearte
Route::get('/logout', function () {
    Auth::logout();
    return redirect('/home');
});


Route::post('/interface', 'InterfaceController@sendCommand')->middleware('auth');



Route::get('/interface', 'stateController@getItemState')->middleware('auth');
