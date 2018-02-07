<?php

function call($controller, $action) {
    require_once('controllers/' . $controller . '_controller.php');
	$controller_class =  ucwords($controller).'Controller';
    $controller = new $controller_class();

   return $controller->{ $action }();exit();
  }


  //$controllers = array('pages' => ['home', 'error']);
if(file_exists('controllers/' . $controller . '_controller.php'))
{	if($controller == 'user' && $action == 'index' && $_SESSION['user'] == '')
	{
		header('location:index.php?controller=user&action=login');
	}
	if($controller == 'user' && $action == 'login' && !empty($_SESSION['user']))
	{
		header('location:index.php?controller=user&action=index');
	}
	call($controller, $action);
}else
{
	 call('pages', 'error');
}

function redirect($url,$message = '',$type = 1)
{
	 $_SESSION['msg']['message'] = $message;
	 $_SESSION['msg']['type'] = ($type==1)?'success':'danger';

	 header('location:'.$url);
	 exit;
}
?>