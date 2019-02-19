<?php

/**
 * Loads all function helpers
 */

class FunctionLoader {
  public function __construct() {

    if(file_exists('../includes/helpers/functions.php')){
      include_once '../includes/helpers/functions.php';
      echo 'Loaded';
    }
  }
}

