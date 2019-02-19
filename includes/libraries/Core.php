<?php

/**
 * App Core Class
 * Fetches the URL and use it as controllers and methods
 * URL FORMAT - https:/domain.com/:controller/:method/:params
 * 
 */

 class Core {

  /**
   * Setting the default controller to Pages
   * It will load the Pages controller if the https:/domain.com/:controller is non existing in the controllers folders or not defined in the URL
   */
  private $defaultController = 'Pages';

  /**
   * Setting the default method to index
   * It will load the index method of the instantiated controller if https:/domain.com/:controller/:method is non existing in the controller class or not defined in the URL
   */
  private $defaultMethod = 'index';

  /**
   * Setting the $params to empty Array
   * This will make sure that the $params variable will not return an error during echo/print_r when the URL is set to the root domain
   */
  private $params = [];
   

  public function __construct() {
    /**
     * Invoke the function at initialization
     */
    // echo 'Core Class <br />';
    $route = $this->getRoute();

    /**
     * Set the path for the Controllers Folder
     */
    $controllerPath = '../includes/controllers/';

    /**
     * Checks if the URL path https:/domain.com/:controller existed in the controllers folder
     */
    if(file_exists($controllerPath . ucwords($route[0] . '.php'))){
      $this->defaultController = ucwords($route[0]);
      unset($route[0]);
    }

    /**
     * If route[0] existed as a controller, then we require it as our defaultController
     * We will also set it as our defaultController
     */
    require_once $controllerPath . $this->defaultController . '.php';
    $this->defaultController = new $this->defaultController;


    /**
     * Checks if we the method is typed on the address bar https:/domain.com/:controller/:method
     */
    if(isset($route[1])) {

      /**
       * Checks if the URL path https:/domain.com/:controller/:method existed in the controller class
       */
      if(method_exists($this->defaultController, $route[1])) {

        /**
         * If route[1] existed as a method, then we require it as our defaultMethod
         */
        $this->defaultMethod = $route[1];
        unset($route[1]);

      }

      /**
       * We can now call the controller class and its method
       * Depending on the URL, it can be the default value or the defined ones on the URL https:/domain.com/:controller/:method
       */

       $this->params = $route ? array_values($route) : [];

        /**
         * PHP native function that will call a $callback with array of params
         */
        call_user_func_array([$this->defaultController, $this->defaultMethod], $this->params);


    }
  }

  /**
   * Get the URL parameters to be used for the class controllers and methods
   */
  public function getRoute() {

    if(isset($_GET['route'])){
      $route = rtrim($_GET['route'], '/');
      $route = filter_var($route, FILTER_SANITIZE_URL);
      $route = explode('/', $route);
  
      return $route;
    }
    
  }


 }