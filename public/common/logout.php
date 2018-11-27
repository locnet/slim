<?php
error_reporting(E_ALL & ~E_NOTICE);

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

$app->get('/logout',function(){
	echo "ai iesit";
});

$app->get('/hello/{name}', function (Request $request, Response $response) {
    $name = $request->getAttribute('name');
    $response->getBody()->write("Hello, $name");

    return $response;
});

$app->get("/", function(Request $request, Response $response) {
	return $response->getBody()->write("wsdl: ".DEVELOPMENT_SESSION_MANAGER_WSDL);
});

$app->get("/proba", 'f');

//pasando argumentos a una funcion que esta en otro archivo
$app->get('/proba/{id}[/{name}]', function(Request $request, Response $response, $args){
	d($args['id'],$args['name']);
});

// logon proba
$app->get('/logon', function(){
	return "logon";
});
