<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\App;
use DB;


class stateController extends Controller
{
    
    public function getItemState($id_user, $id, $val){
        //$id_user =  Auth::user()->id_user ;
        
        
        DB::table('items')
            ->where('type', $id)
            ->update(['state' => $val]);
            
        //Creamos el Psuher
        $pusher = App::make('pusher');
        //Creamos un array con los datos que vamos a pasar
        $arr = array ('estado' => $val, 'id_item' => $id);
        //Pasamos los datos a JSON
        $datos=json_encode($arr);
        //Creamos el canal y el evento 
        $pusher->trigger('domohelp', 'actualizar', $datos);
    }
    
    public function sacarItems($id_user){
        $items = DB::table('items')->where('id_usuario', $id_user)->get();
        return view('04_interface.interface', ['items' => $items]);
        
    }
    //
    
}
