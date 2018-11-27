<?php
namespace Blueair\BookingManager;

use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Psr\Log\LoggerInterface;
use Blueair\Response\XmlTestResponse;

class BookingResponseTest
{

	protected $logger;

	public function __construct(LoggerInterface $logger) {
		$this->logger = $logger;

	}

	public function index($request, $response)
    {
    	$r = new XmlTestResponse();  // inicializez clasa
    	$s = $r->getXmlResponse();   // atac metoda

    	$response->write($s);
    	$response = $response->withHeader('Content-Type', 'application/xml');
    	return $response;
    	
    }
	
}