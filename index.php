<?php
	
  require_once('connection.php');

  if (isset($_GET['controller'])) {
    $controller = $_GET['controller'];
    $action     = (!isset($_GET['action']))?'index':$_GET['action'];
  } else {
    $controller = 'pages';
    $action     = 'index';
  }
  require_once('views/layout.php');

?>