<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactFormRequest;

class HomeController extends Controller
{
    //show contact form view
    public function create()
    {
        return view('01_landing.home');
    }
    
    public function store(ContactFormRequest $request)
    {
        \Mail::send('03_mails.contact',
        array(
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'user_message' => $request->get('message')
        ), function($message)
    {
        $message->from('carlosvwork76@gmail.com');
        $message->to('carlosvwork76@gmail.com', 'Admin')->subject('Consulta DomoHelp');
    });

        return \Redirect::route('home')->with('message', '¡Gracias por contactar con nosotros!');
    }
}