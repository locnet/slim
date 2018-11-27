<?php
namespace Blueair\Xml;

use SoapClient;
use Exception;
use 

class XmlParser
{
	/**
	* clase para manejar los resultados de las peticiones XML
	* pasamos a la function construct la respuesta de la peticion, esta clase luego la pasa a
	* simplexml_load_string
	*/
	private $xml;
	private $logger;           // logger instance

	public function __construct( $xmlString = 'default_xml_string' ,$logger) {

		$this->logger = $logger;
		
        try {

			if(!is_string($xmlString)){
	            throw new Exception('Cadena XML invalida!.');
	        }

	        // leemos XML string
	        if(!$this->xml = simplexml_load_string($xmlString)) {
	            throw new Exception('Eror al leer la cadena XML!');
	        }

	        //si la llamada al servicio devuelve un eror, lo listamos
	        if ($this->xml->ERROR) { 
				foreach($this->xml->ERROR as $error) {
					$error .=  "<br/>Tenemos un eror! codigo: ".$error['cod']." <br/>Mensaje: ".$error['msg'].
					"<br/>Mensaje extra: ".$error['extra'];
					return $error;
				}
			}
		} catch (Exception $e) {
            $this->logger->error('Invalid XML string! Error: ' . $e->getMessage());
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
     * funcion para recuperar los datos de la respuesta XML
     * @param  string $nod, string $subnod
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
			//si tenemos otro nivel, por ejemplo <BOARDS><BOARD /><BOARD /></BOARDS>
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
    		$this->logger->error("Invalid node in XML string! ". $e->getMessage());
    	}	
	}		
}