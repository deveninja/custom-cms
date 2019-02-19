<?php
 session_start();

 $_SESSION["color"] = 'ice';
  require_once '../includes/bootstrap.php';


// Initialize App functionaility
Database::getInstance();
$init = new Core;