<DOCTYPE html>
<html>
  <head>
    <?php session_start(); ?>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
  </head>
  <body>
    <header>

      <a href='index.php'>Home</a>
      <?php  if(!empty($_SESSION['user'])){ ?>
        <a href='index.php?controller=user&action=index'>user</a>
        <a href='index.php?controller=user&action=logout'>logout</a>
      <?php }else{ ?>
      <?php } ?>
    </header>
    <?php if(!empty($_SESSION['msg'])){ ?>
    <div class="container">
      <div class="alert alert-<?php echo $_SESSION['msg']['type'] ?>">
        <strong> <?php echo $_SESSION['msg']['message'] ?> </strong>
      </div>
    </div>
    <?php unset($_SESSION['msg']); }?>
    <?php  
      
      require_once('routes.php'); ?>
    <footer>
      Copyright
    </footer>
  <body>
<html>
