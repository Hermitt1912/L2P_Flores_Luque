<?php
session_start();

require_once __DIR__ . '/config/conexion.php';
require_once __DIR__ . '/controllers/LoginController.php';

$loginController = new LoginController();

$accion = $_GET['accion'] ?? 'default';

switch ($accion) {
    case 'home':
        require_once 'view/layouts/header.php';
        echo '<div class="container mt-5">
            <h2 class="text-center fw-bold">Bienvenido la Lección Práctica</h2>
        </div>';
        require_once 'view/layouts/footer.php';
        break;
    
    case 'login':
        $loginController->loginUser();
        require_once 'view/layouts/footer.php';
        break;

    default:
        $loginController->showForm();
        break;
}

?>