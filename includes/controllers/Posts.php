<?php

/**
 * Pages Class
 * This will handle all the methods passed on URL under Pages Controller
 * URL MAP https://domain.com/PAGES/:METHOD
 */

class Posts extends Controller{

  public function __construct() {
    // $this->index();
  }

  public function index() {
    $this->view('index');
  }
}