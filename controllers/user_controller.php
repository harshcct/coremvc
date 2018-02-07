<?php
  class UserController {
    function __construct()
    {
       require_once('models/user.php');
    }
    public function index() {
      $first_name = 'Jon';
      $last_name  = 'Snow';
      require_once('views/user/index.php');
      return 1; 
    }

    public function login() {

      $first_name = 'Jon';
      $last_name  = 'Snow';
      if($_SERVER['REQUEST_METHOD'] == 'POST')
      {
          $user = User::find($_REQUEST['data']['email'],md5($_REQUEST['data']['password']));   
          if(!empty($user))
          {
              $_SESSION['user'] = $user;
              redirect('index.php?controller=user&action=index','Successfully Login',1);
          }else
          {
            redirect('index.php?controller=user&action=login','Login Password Wrong',0);
          }
      }else{
        require_once('views/user/login.php');
      }
    }

    public function error() {

      require_once('views/user/error.php');
    }

     public function logout() {
        unset($_SESSION['user']);        
       redirect('index.php?controller=user&action=index','Successfully Logout',0);
    }
  }
?>