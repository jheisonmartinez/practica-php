<?php

require_once './controlador/controlador.php';

$action = isset($_GET['action']) ? $_GET['action'] : 'login';

$controller = new Controller();

switch ($action) {
    case 'login':
        $controller->login();
        break;
    case 'register':
        $controller->register();
        break;
   
}

?>
