<?php

/**
 * Require all App Core Classes
 */
  spl_autoload_register(function($className){

    /**
     * Autoload all Core class
     */
    if(file_exists('../includes/libraries/' . $className . '.php')){
      require_once 'libraries/' . $className . '.php';
    }

    /**
     * Autoload all helper class
     */
    if(file_exists('../includes/helpers/' . $className . '.php')){
      require_once 'helpers/' . $className . '.php';
    }

  });
