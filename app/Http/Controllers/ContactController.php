<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    //show contact form view
    public function create()
    {
        return view('02_forms.contact');
    }
    
    public function store()
    {
    }
}
