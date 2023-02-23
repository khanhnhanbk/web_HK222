<?php
// Controller => Action
$controllers = array(
  'home' => ['home', 'user'],
  'sample' => ['home', 'error', 'edit'],
  'news' => ['home', 'detail'],



); 

// default controller and action is SampleController and home
if (!array_key_exists($controller, $controllers) || !in_array($action, $controllers[$controller])) {
  $controller = 'sample';
  $action = 'error';
}

include_once(USER_PATH.'controllers/' .  ucfirst($controller) . 'Controller.php');

// create an instance of the controller
$classname = ucfirst($controller). 'Controller';
$controller = new $classname;
$controller->$action();