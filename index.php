<?php

require_once 'controller/controller.php';

$action = isset($_GET['action'])?$_GET['action']:'home_DE';

$controller = new controller();

if (method_exists($controller, $action)) {
    $controller -> run($action);
}
