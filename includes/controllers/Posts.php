<?php

/**
 * Pages Class
 * This will handle all the methods passed on URL under Pages Controller
 * URL MAP https://domain.com/PAGES/:METHOD
 */

class Posts extends Controller{

  public function __construct() {
    require_once(CMSROOT . '/includes/views/inc/header.php');
    $this->index();
    require_once(CMSROOT . '/includes/views/inc/footer.php');
  }

  public function index() {
    $this->view('posts/index');
  }
}