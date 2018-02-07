<?php
  class User {
    // we define 3 attributes
    // they are public so that we can access them using $post->author directly


   
    public static function find($email,$password) {
      $db = Db::getInstance();
      // we make sure $id is an integer
      $user = $db->prepare('SELECT * FROM tbl_user WHERE email = :email and password = :password');
      $user->execute(array('email' => $email,'password' => $password));
      $user = $user->fetch(PDO::FETCH_ASSOC);
      return $user;
    }
  }
?>