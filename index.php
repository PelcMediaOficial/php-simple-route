<?php
defined ('BASEPATH') OR define('BASEPATH',realpath(dirname(__FILE__)));

header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
header("Allow: GET, POST, OPTIONS, PUT, DELETE");
$method = $_SERVER['REQUEST_METHOD'];
if($method == "OPTIONS") {
    die();
}

// Prevent caching.
header('Cache-Control: no-cache, must-revalidate');
header('Expires: Mon, 01 Jan 1996 00:00:00 GMT');

$route = [];

/* Application */
include_once BASEPATH.'/application/config/constants.php';
include_once BASEPATH.'/application/config/routes.php';

/* Core */
include_once BASEPATH.'/core/Request.php';
include_once BASEPATH.'/core/Router.php';

if (file_exists(BASEPATH.'/application/vendor/autoload.php')) {
    include_once BASEPATH.'/application/vendor/autoload.php';
}


$core  = new Router(new Request, $route);

$render_router = $core->__init();


if(file_exists($render_router)){    
    include_once $render_router;
}else{
    echo 'Core Message => framework no encuentra el archivo indicado en config/routes.';
}
