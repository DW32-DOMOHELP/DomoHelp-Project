<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    //show contact form view
    public function create()
    {
        return view('01_landing.home');
    }
    
    public function store()
    {
        return \Redirect::route('/home')
      ->with('message', 'Thanks for contacting us!');
    }
}
