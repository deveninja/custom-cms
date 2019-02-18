<?php

/**
 * App Core Class
 * Fetches the URL and use it as controllers and methods
 * URL FORMAT - https:/domain.com/:controller/:method/:params
 * 
 */

 class Core {
   
  public function __construct() {
    $this->getRoute();
    // echo 'Core initiated';
  }

  public function getRoute() {
    $route = $_GET['route'];
    $route = explode('/', $route);

    return $route;
  }


 }