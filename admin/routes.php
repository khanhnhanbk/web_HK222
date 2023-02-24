<?php
// Controller => Action
$controllers = array(
    'sample' => ['home', 'error', 'edit'],
    'dashboard' => ['home'],



);

// default controller and action is SampleController and home
if (!array_key_exists($controller, $controllers) || !in_array($action, $controllers[$controller])) {
    $controller = 'page';
    $action = 'error';
}


// echo ADMIN_PATH . 'controllers/' .  ucfirst($controller) . 'Controller.php';
include_once(ADMIN_PATH . 'controllers/' .  ucfirst($controller) . 'Controller.php');
// create an instance of the controller
$classname = ucfirst($controller) . 'Controller';
$controller = new $classname;
$controller->$action();
