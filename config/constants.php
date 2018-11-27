<?php
/*
|--------------------------------------------------------------------------
| WSDL paramenters and  user
|--------------------------------------------------------------------------
|
| The wsdl url, it can be production or development
|
*/
define('ENVIRONMENT','development');
define('DEVELOPMENT_SESSION_MANAGER_WSDL', "https://0btestr4xapi.navitaire.com/SessionManager.svc");
//define('DEVELOPMENT_SESSION_MANAGER_WSDL',"http://www.webservicex.net/uklocation.asmx?wsdl");
define('DEVELOPMENT_BOOKING_MANAGER_WSDL', "https://0btestr4xapi.navitaire.com/BookingManager.svc");
//define('DEVELOPMENT_BOOKING_MANAGER_WSDL', "http://localhost/slim/public/index.php/logon?wsdl");
define('PRODUCTION_SESSION_MANAGER_WSDL',"https://0br4xapi.navitaire.com/SessionManager.svc");
define('PRODUCTION_BOOKING_MANAGER_WSDL',"https://0br4xapi.navitaire.com/BookingManager.svc");
define('DOMANIN_CODE','EXT');
define('AGENT_NAME','locnetapi');
define('API_PASSWORD','Locnetapi-1');