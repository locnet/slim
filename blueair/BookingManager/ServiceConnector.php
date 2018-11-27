<?php
namespace Blueair\BookingManager;

use Blueair\Xml\XmlConector;
use SoapClient;


/*
* This class manage all Navitaire's services calls
*/
class ServiceConnector extends XmlConector
{
	/* 
	* XmlParserTrait
	* methods availables: setXmlString($xmlString), getNodes($nod, $subnod)
	*
	*/ 
	use \Blueair\Traits\XmlParserTrait;

	/*
	* UriParserTrait
	* methods availables: parseString($string)
	*/
	use \Blueair\Traits\UriParserTrait;

    private $params = array();
    private $xmlString;
    
    /**
    * This method is the responsable to connect to a service and retrive the XML response
    *
    * @param $request
    * @param $response
    * @param $args         the request arguments
    * @return xmlString    the search response 
    */
	public function getService($request, $response, $args)
	{
		try {			
			// the service name to conect
			$service = $request->getAttribute('service');

			// get the request parameters from url
			$uri = $request->getAttribute('uri');

			// UriParserTrait method	
			$this->params = $this->parseUrlString($uri, ServiceParameters::getSvcParams($service));
			
            if ($this->params) {
			    var_dump(array("parametri obligatorii" => "") + ServiceParameters::getSvcParams($service));
            } else {
            	return "parametri insuficienti";
            }
	        die();

	        // method getXmlString from parent class XmlConector
	        // connect to  Navitaire api and get the xml result
	        $this->xmlString = $this->getXmlString($this->bookingManagerWsdl, $service, $this->params);

	        return $this->xmlString;
	        
		} catch (Exception $e) {
			$this->logger->error('ServiceConnector error: '.$e);
		}		
	}	
}
