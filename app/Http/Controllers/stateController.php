<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class stateController extends Controller
{
    
    public function getItemState(){
        
        $items = DB::table('items')->get();
        return view('04_interface.interface', ['items' => $items]); 
    }
    //
    
}
