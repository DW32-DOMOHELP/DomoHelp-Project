<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InterfaceController extends Controller
{
    function sendCommand() {
    $url = "http://310fc20c.ngrok.io/rest/items/" . $_POST['item'];

      $options = array(
         'http' => array(
             'header'  => "Content-type: text/plain\r\n",
            'method'  => 'POST',
            'content' => $_POST['state']  //http_build_query($data),
         ),
       );

       $context  = stream_context_create($options);
       $result = file_get_contents($url, false, $context);
        
      return redirect('/interface');
        
    }
    
    
}

?>