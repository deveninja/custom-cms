<?php

/**
 * Base Contoller
 * This will load all the models and views
 */

 class Controller {
   /**
    * This will load the model
    */
   public function model($model) {
    /**
     * Require the model file
     */
    require_once "../includes/models/" . $model . ".php";
   }

   /**
    * This will laod the view
    */
   public function view($view, $data = []) {
    /**
     * Check if the viewfile exist
     */
    if(file_exists('../includes/views/' . $view . '.php')){
      require_once '../includes/views/' . $view . '.php';
    } else {
      echo 'View does not exist';
    }
   }
 }
