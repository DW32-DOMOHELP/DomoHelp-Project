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

Route::get('/home', function () {
    return view('01_landing.home');
});

Route::get('/interface', function () {
    return view('04_interface.interface');
});


/*
// route to show our edit form
Route::get('user/edit/{id}', array('as' => 'user.edit', function($id) 
{
    // return our view and User information
    return View::make('form') // pulls app/views/form.blade.php
        ->with('user', User::find($id));
}));

// route to process the form
Route::post('user/edit', function() {
    // process our form
});
*/

// route to show contact form
Route::get('home',
   ['as' => 'home', 'uses' => 'HomeController@create']);
   
Route::post('home',
    ['as' => 'contact_store', 'uses' => 'HomeController@store']);

Auth::routes();

Route::get('/logout', function () {
    Auth::logout();
    return redirect('/home');
});


Route::post('/interface', 'InterfaceController@sendCommand');

//Route::get('/', 'LandingController@index');
