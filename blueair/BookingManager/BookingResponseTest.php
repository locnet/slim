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
    	$r = new XmlTestResponse();
    	$s = $r->getXmlResponse();
    	return $s;
    	
    }
	
}