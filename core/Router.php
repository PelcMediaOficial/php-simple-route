<?php defined('BASEPATH') or die('unauthorized execution.');

/**
 * Simple Route - By Pelcmedia
 */
class Router
{

  private $request = null;
  private $server = null;
  private $requestRoutes = null;
  public $load = '';
  public $headers = null;
  public $apikey = '';  


  public function __construct(Request $instance, $requestRoutes){
    $this->request = $instance->request;
    $this->server = $instance->server;
    $this->requestRoutes = $requestRoutes;        
    $this->headers = apache_request_headers();
  }

  public function __init(){

    foreach ($this->headers as $header => $value) {
        if ($header == "x-api-key") {
            $this->apikey = $value;
        }
    }

    $pathinfo = '/';        
    if(isset($this->server["PATH_INFO"])){
      $pathinfo = $this->server["PATH_INFO"];      
      if($pathinfo[0] === '/'){
        $pathinfo = substr($pathinfo, 1, strlen($pathinfo));
      }
    }
               
    foreach ($this->requestRoutes as $path => $file){           
      if($pathinfo == $path){                
        return 'application/views/'.$file;                       
      }
    }

    if($pathinfo == '/'){
      return 'application/views/docs.php';  
    }
     
    return 'application/views/error/404.php';
  }

}