<?php
    
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
     /**
     * Handle an authentication attempt.
     *
     * @return Response
     */
    public function authenticate()
    {
        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            // Authentication passed...
            return redirect()->intended('04_interface.interface');
        }
}
}
