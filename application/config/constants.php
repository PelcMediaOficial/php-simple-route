<?php defined('BASEPATH') or die('unauthorized execution.');

defined("ENVIRONMENT") OR define("ENVIRONMENT", "dev"); //dev - prod

if(ENVIRONMENT== "dev"){
    error_reporting(E_ALL);
    ini_set('display_errors', 'On');
    defined('BASEURL') OR define('BASEURL', 'http://localhost/simple-route/');        
}elseif(ENVIRONMENT== "prod"){
    defined('BASEURL') OR define('BASEURL', $_SERVER["SIMPLEROUTE"]);
}