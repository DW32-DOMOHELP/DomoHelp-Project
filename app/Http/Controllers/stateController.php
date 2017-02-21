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
        //Coger item del usuario solo HACER
        //$id_user =  Auth::user()->id_user ;
        
        
        DB::table('items')
            ->where('type', $id)
            ->update(['state' => $val]);
        
        //hacer el pusher
        $pusher = App::make('pusher');
        //hacer un array con los datos a pasar
        $arr = array ('estado' => $val, 'id_item' => $id);
        //pasarlo a json
        $datos=json_encode($arr);
        //mandar mensaje
        $pusher->trigger('domohelp', 'actualizar', $datos);
    }
    
    public function sacarItems($id_user){
        $items = DB::table('items')->where('id_usuario', $id_user)->get();
        return view('04_interface.interface', ['items' => $items]);
        
    }
    //
    
}
