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
    return view('home');
});

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
