<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InterfaceController extends Controller
{
    function sendCommand(Request $request) {
    $url = "http://e23f95bd.ngrok.io/rest/items/" . $request['item'];

      $options = array(
        'http' => array(
            'header'  => "Content-type: text/plain\r\n",
            'method'  => 'POST',
            'content' => $request['state']  //http_build_query($data),
        ),
      );

      $context  = stream_context_create($options);
      $result = file_get_contents($url, false, $context);

      return $result;
      
      

    }
}

