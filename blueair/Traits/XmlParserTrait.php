<?php
namespace Blueair\Traits;

use SoapClient;
use Exception;

trait XmlParserTrait
{
	private $xml;

	/**
	*
	* Handling the XML response 
	* 
	* @param $xmlString, string xml
	* @return xml object
	*/	

	public function parseXmlString( $xmlString = 'default_xml_string') {
        try {

			if(!is_string($xmlString)){
	            throw new Exception('Cadena XML invalida!.');
	        }

	        // leemos XML string
	        if(!$this->xml = simplexml_load_string($xmlString)) {
	            throw new Exception('Eror al leer la cadena XML!');
	        }
	        return $this->xml;

		} catch (Exception $e) {
            $this->logger->error('XmlParserTrait Invalid XML string! Error: ' . $e->getMessage());
		}
    }

    public function hasError() {
    	if ($this->xml->ERROR) {    		
    		return true;
    		exit;
    	}
    	return false;
    }
    
    /**
     * Read the XML object from a given node
     *
     * @param  string $nod, string $subnod, ej. "RESPONSE->BOARD"
     *
     * @return string
     */
    public function getNodes($nod, $subnod)
    {
    	try {
    	    //si tenemos un solo nodo por debajo del root, que en nuestro caso es "<RESPONSE>
			if ($nod) {
				$node = $this->xml->$nod;
			} else {
				throw new Exception('Error: falta el primer nodo a buscar!');
			}
			//si tenemos otro nivel, 
			if ($subnod) {
				$subnode = $this->xml->$nod->$subnod;
				//echo "<br/>nombre subnode: ".$subnode;
			}
			//creo un array para pasarle el resultado
			$result = array();
			//si  tenemos dos niveles en la respuesta..
			if ($subnod) {
				foreach($this->xml->$nod->$subnod as $name) {
				        $result[] = $name;
			    }
			} else {//tenemos solo un nivel..
				foreach ($this->xml->$nod as $name) {
				    $result[] = $name;
			    }
			}
			
			//devuelvo el array	
			return $result;

    	} catch (Exception $e) {
    		$this->logger->error("XmlParserTrait: Invalid node in XML string! ". $e->getMessage());
    	}	
	}		
}