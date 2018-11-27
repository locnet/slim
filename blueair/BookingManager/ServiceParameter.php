<?php
namespace Blueair\BookingManager;


/**
* Every Navitaire service call needs one or more parameters
* In this class we have to declare the required parameters for every service
* 
*/
class ServiceParameters 
{
	
    /**
    * @param      $serviceName, the service name
    * @return     $pArray, all the required parameters to make the service call
    *
    */
	public static function getSvcParams($serviceName) 
	{
	 	$pArray = array(
		    'getAvailability' => array("DepartureStation",
		                               "ArrivalStation",
		                               "BeginDate",
		                               "EndDate",
		                               "CarrierCode", 
		                               "PaxCount",
		                               "FlightType",
		                               "CurrencyCode"),

		    'logon' => array("user")
		);
        
	 	if (array_key_exists($serviceName, $pArray)) {

	 		return $pArray[$serviceName];

	 	}

 		return false;

	}

}