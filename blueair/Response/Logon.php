<?php
namespace Blueair\Response;

use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Psr\Log\LoggerInterface;
use Blueair\Xml\XmlConector;
use Blueair\Response\LogonResponse;


class Logon
{
    use \Blueair\Traits\XmlParserTrait;

	protected $logger;
    protected $xmlConector;
    
	public function __construct(LoggerInterface $logger) 
	{
		$this->logger = $logger;

	}

    public function logonResponse()
    {    	
        $a = new LogonResponse();
        $s = $a->getString();
        
        if ($this->parseXmlString($s)) {
            var_dump($s);
        }

    }
}
