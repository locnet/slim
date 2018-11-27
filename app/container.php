<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

/*
|------------------------------------------------------------------------------------------
| Slim uses a dependency container to prepare, manage, and inject application dependencies
|------------------------------------------------------------------------------------------
*/

$container = $app->getContainer();

/*
* Declare a logger that we'll use in production
*/
$container['Logger'] = function($c) {
	//	Setup	Monolog	logger
	$settings = $c->get('settings');
	$logger	=	new Logger($settings['logger']['name']);
	$logger->pushHandler(new StreamHandler($settings['logger']['path'],	Logger::DEBUG));
	return $logger;

};

// XmlConector
$container['XmlConector'] = function($c) {
    return new Blueair\Xml\XmlConector($c, $c->get('Logger'));
};
// XmlParser
$container['XmlParser'] = function ($c) {
	return new Blueair\Xml\XmlParser($xmlString, $c->get('Logger'));
};
/**
* The service connector is the core of all Navitaire's api calls
*/
$container['ServiceConnector'] = function($c) {
	return new Blueair\BookingManager\ServiceConnector($c, $c->get('Logger'));
};

// logon class
$container['Logon'] = function($c) {
	return new Blueair\Response\Logon($c->get('Logger'));
};

// test
$container['Test'] = function($c) {
	return new Blueair\Response\Test();
};
$container['BookingResponseTest'] = function($c) {
	return new Blueair\BookingManager\BookingResponseTest($c->get('Logger'));
};