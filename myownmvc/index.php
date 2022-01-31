<?php

include 'application/lib/Dev.php';

use application\core\Router;

spl_autoload_register(function($class) {
    $root = $_SERVER['DOCUMENT_ROOT'];
    $ds = DIRECTORY_SEPARATOR;
    $filename = $root. $ds . str_replace('\\', $ds, $class) . '.php';
    require($filename);
});

$routes = include 'application/config/routes.php';
(new Router($routes))->run();