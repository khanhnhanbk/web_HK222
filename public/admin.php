<?php

define('BASE_PATH', '../');

require_once BASE_PATH . 'lib/connection.php';
require_once BASE_PATH . 'lib/config.php';
require_once BASE_PATH . 'lib/helper.php';

// Login Action


if (isset($_GET['controller'])) {
    $controller = $_GET['controller'];
    if (isset($_GET['action'])) {
        $action = $_GET['action'];
    } else {
        $action = 'home';
    }
} else {
    $controller = 'admin';
    $action = 'home';
}


/* Load external routes file */
require_once ADMIN_PATH . "routes.php";
