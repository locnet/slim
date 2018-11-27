<?php
namespace Blueair\Xml;

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;
use SoapClient;

/*
|----------------------------------------------------------------------------------
| This class create a new soap client
| All other class that use the Navitaire api must extends this class
|-----------------------------------------------------------------------------------
*/
class XmlConector
{
    
	protected $xmlClient;
	protected $sessionManagerWsdl;
    protected $bookingManagerWsdl;
    protected $sessionSignature;
    protected $logger;
    protected $apiConnectParams;
    protected $container;

	/**
	* @param $container
	* @param $logger
	*/
	public function __construct($container, $logger)
	{
		/**
		 * array with DomainCode, AgentName and Password required for connect to Navitaire api
		 */
		$this->apiConnectSettings = $container['settings']['navitaire'];
		$this->container = $container;

        // logger instance
        $this->logger = $logger;

		if ($container['settings']['environment'] == "development") {
		   	$this->sessionManagerWsdl = DEVELOPMENT_SESSION_MANAGER_WSDL;
		   	$this->bookingManagerWsdl = DEVELOPMENT_BOOKING_MANAGER_WSDL;
	    } else {
		    $sessionManagerWsdl = PRODUCTION_SESSION_MANAGER_WSDL;
            $bookingManagerWsdl = PRODUCTION_BOOKING_MANAGER_WSDL;
		}

		// get the signature
		if ((!isset($_SESSION['signature'])) || ($this->sessionSignature != $_SESSION['signature'])) {
            // I don't have Navitaire signature, get one
            $this->logon();
		}
	}


    /**
     * Logon and get the session signature
     */
	protected function logon()
	{        
		try {
			// it's time to create a api conection
			if(!$this->xmlClient = new SoapClient($this->sessionManagerWsdl)) {
				
				throw new Exception('Error in connect with the webservice!');			
			}
            // Connect to the Logon service
			if ($logonResponse = $this->xmlClient->__soapCall('LogonRequest', array($apiConnectParams))) {

				$_SESSION['signature'] = $sessionSignature = $logonResponse;
			}

	    } catch (Exception $e) {
	    	$this->logger->error("XmlConnector: Connection error, there is no soap client. Error: " . $e->getMessage());
	    }
	}


	/**
	* Make a service call and return the xml response
	*
	* @param  $wsdlService
	* @param  $methodName
	* @param  $paramArray , array
	* @return $xmlResult    xml string
	*/
    protected function getXmlString($wsdlService, $methodName, $paramArray) {
    	try {
    		// connect with wsdl service
    		if (!$client = new SoapClient($wsdlService)) {

    			throw new Exception ('Cannot retrive results from '.$methodName);
    		}

    		if ($xmlResult = $client->__soapCall($methodName,array($paramArray))) {
    			return $xmlResult;
    		} else {
    			throw new Exception('We have no xml result!');
    		}

    	} catch (Exception $e) {
    		$this->logger->error('XmlConnector, method getXmlString has finished with error, track: '.$e->getMessage());
    	}
    }


	/**
	 * Get the Navitaire signature
	 *
	 * @return $this->sessionSignature
	 */

	public static function getSignature() 
	{
		return $this->sessionSignature;
	}
}