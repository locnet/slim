<?php
namespace Blueair\Traits;

use Exception;

/**
* Trait to transform a uri segment into an array
*
* From a string like depCity=Madrid&arrCity=Barcelona&StartDate=20-02-2017
*
* We'll make an array from each pair
*/

trait UriParserTrait
{
	private $uriArray = array();
    
    /**
    * Transform a url segment from string to array
    *
    * @param string $string url segment with the service call parameters
    * @param array $requiredParam   an array with the required parameters to call the service
    * 
    * @return array     $uriArray
    *
    * @throws Exception if the array cant be created or for missing parameters
    */
	public function parseUrlString($string, $requiredParams) 
	{
		try {
			// first we'll break the string in smaller strings
			// each string is a parameter=value pair
			$pairs = explode("&", $string);
			// now we have $pairs array like: 0 => "parameter=value",1 => "parameter=value"...

			if (count($pairs) === 0 || $pairs === null) {
                throw new Exception("Invalid uri format.");
			}

			// transform each "parameter=value" string in an array
	        foreach ($pairs as $pair) {
	        	$p = explode("=", $pair);

	        	if (count($p) === 2 && $p[0] != null && $p[1] != null) {
                    // add to the uriArray each parameter with it's corespondent value
	        		$this->uriArray[ trim($p[0]) ] = trim($p[1]);
                    
	        	} else {
	        		throw new Exception("The uri must be in key=value format!");	        		
	        	}	        	
	        }

            // check if we have all the required parameters to make the request
            // $requiredParams array contain all the mandatory parameters
            foreach ($requiredParams as $param) {

            	if (!array_key_exists($param, $this->uriArray)) {

            		throw new Exception("We haven't enough parameters to make the request!");

            		return;         		
            	}
            }
	        return $this->uriArray;

		} catch (Exception $e) {
			$this->logger->error("UriParseTrait: " . $e->getMessage());
		}        
	}
}