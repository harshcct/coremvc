<?php
  class UserController {
    public function index() {
      $first_name = 'Jon';
      $last_name  = 'Snow';
      require_once('views/login/index.php');
    }

    public function error() {
      
      require_once('views/user/error.php');
    }
  }
?>