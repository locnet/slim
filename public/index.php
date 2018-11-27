<?php

require __DIR__ . '/../vendor/autoload.php';

session_start();

require __DIR__ . '/../config/constants.php';

// import settings 
$settings = require __DIR__ . '/../app/settings.php';

// create app
$app = new \Slim\App($settings);

/*
|------------------------------------------------------------
|    filp/whoops error handler, only for develop stage
|------------------------------------------------------------
*/
$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();


// set up dependecies

require __DIR__ . "/../app/container.php";

// register routes
require __DIR__ ."/../app/routes.php";

// Run!
$app->run();