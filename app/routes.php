<?php
// Controller => Action
$controllers = array(
  'home' => ['home', 'error'],
  'course' => ['home', 'catalog', 'detail'],
  'authorize' => ['login', 'register', 'logout'],
  'user' => ['home', 'profile', 'update'],
  'about' => ['home'],
  'blog' => ['home', 'detail']
);

// default controller and action is SampleController and home
if (!array_key_exists($controller, $controllers) || !in_array($action, $controllers[$controller])) {
  $controller = 'home';
  $action = 'error';
}

include_once(USER_PATH . 'controllers/' .  ucfirst($controller) . 'Controller.php');

// create an instance of the controller
$classname = ucfirst($controller) . 'Controller';
$controller = new $classname;
if (!empty($params)) {
  call_user_func_array(array($controller, $action), $params);
} else {
  $controller->$action();
}
