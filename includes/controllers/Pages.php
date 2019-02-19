<?php

/**
 * Pages Class
 * This will handle all the methods passed on URL under Pages Controller
 * URL MAP https://domain.com/PAGES/:METHOD
 */

class Pages extends Controller {

  public function __construct() {
    // echo 'Hello Pages <br />';
    $this->view('../inc/header');
  }

  public function index() {
    $this->view('pages/home');    
  }

  public function about() {
    echo 'About Page';
  }

  public function contact() {
    echo 'Contact Page';
  }

  public function portfolio() {
    echo 'Portfolio Page';
  }

  public function services() {
    echo 'Service Page';
  }
}