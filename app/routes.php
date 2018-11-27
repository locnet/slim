<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

$app->get('/hello/{name}', function (Request $request, Response $response) {
    $name = $request->getAttribute('name');
    $response->getBody()->write("Hello, $name");

    return $response;
});

$app->get("/", function(Request $request, Response $response) {
	return $response->getBody()->write("wsdl: ".DEVELOPMENT_SESSION_MANAGER_WSDL);
});

//pasando argumentos a una funcion que esta en otro archivo
$app->get('/proba/{id}[/{name}]', function(Request $request, Response $response, $args){
	d($args['id'],$args['name']);
});

// logon proba
$app->get('/logon','Logon:logonResponse');

// routa pt. xml
$app->get('/navitaire',function(){
	echo "No method especified!";
});

// main route
$app->get('/navitaire/{service}/{uri}','ServiceConnector:getService');



// test
$app->get('/test/xml', 'BookingResponseTest:index');

$app->get('/test/{name}','Test:index');
$app->get('/test/joke/{joke}', 'Test:joke');
$app->get('/signature', 'XmlConector:getSignature');