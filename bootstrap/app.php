<?php
session_start();


require __DIR__ . '/../vendor/autoload.php';



/*
|------------------------------------------------------------
|    filp/whoops error handler, only for develop stage
|------------------------------------------------------------
*/
$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();

// configuracion adicional
$configuration = [
    'settings' => [
        'displayErrorDetails' => true,
    ],
];

// creamos un container
$container = new \Slim\Container($configuration);

// inicializamos la app
$app = new \Slim\App($container);

$app->add(new Slim_Middleware_ContentTypes());

require __DIR__ . "/../app/container.php";
require __DIR__ ."/../app/routes.php";