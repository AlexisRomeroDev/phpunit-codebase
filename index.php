<?php

require __DIR__.'/vendor/autoload.php';

use App\HelloController;

$controller = new HelloController();

$response = $controller->sayHello();

$response->send();


