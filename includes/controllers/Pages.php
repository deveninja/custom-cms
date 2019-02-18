<?php

/**
 * Pages Class
 * This will handle all the methods passed on URL under Pages Controller
 * URL MAP https://domain.com/PAGES/:METHOD
 */

class Pages extends Controller {

  public function __construct() {
    // $this->index();
  }

  public function index() {
    $this->view('index');    
  }

  public function about() {
    echo 'Method Page About';
  }
}