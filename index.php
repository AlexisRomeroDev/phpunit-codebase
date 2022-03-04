<?php

require __DIR__.'/vendor/autoload.php';

use App\HelloController;

$controller = new HelloController();

$controller->sayHello();


