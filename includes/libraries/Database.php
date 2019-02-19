<?php

/**
 * Database Class
 * 
 */

require_once '../includes/config/DBconstants.php';


class Database {
  private static $instance = null;

  private function __construct() {
    // echo 'Database instantiated';
    // echo dirname(__FILE__);
    // echo 'Database Class <br />';
  }

  public static function getInstance() {
    if(!isset(self::$instance)) {
      self::$instance =  new Database();
    }
    
    return self::$instance;
  }
}