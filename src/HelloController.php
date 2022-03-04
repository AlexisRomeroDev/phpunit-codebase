<?php

namespace App;

use App\Response;

class HelloController
{

    public function sayHello(){

       $name = $_GET['name'];

       $response = new Response(
           "Hello ${name}",
           ['Content-Type: text/html'],
           200
       );

       $response->send();

    }

}