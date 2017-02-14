<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PusherDataController extends Controller
{
    use Illuminate\Support\Facades\App;

    function createChannel() {
        $pusher = App::make('pusher');
    
        $pusher->trigger( 'test-channel',
                          'test-event', 
                          array('text' => 'Preparing the Pusher Laracon.eu workshop!'));
    
        return view('welcome');
    }
}
