<?php defined('BASEPATH') or die('unauthorized execution.');

/**
 * Simple Route - By Pelcmedia
 */
class Request
{
    public function __construct(){
        $this->request = $_REQUEST;
        $this->server = $_SERVER;
    }
}
