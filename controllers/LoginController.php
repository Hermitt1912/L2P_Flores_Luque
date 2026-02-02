<?php
require_once __DIR__ . '/../models/LoginModelo.php';

class LoginController {
    public function loginUser() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $user = $_POST['username'] ?? '';
            $pass = $_POST['password'] ?? '';

            $loginModel = new LoginModelo();
            $result = $loginModel->LoginAuth($user, $pass);  // cargar usuario y contraseña

            if ($result) {
                session_start();
                $_SESSION['user'] = $result;
                header('Location: /index.php?accion=home');
                exit();
            } else {
                $error =  "Credenciales inválidas.";
                $this->showForm($error);
            }
        }
        else{
            $this->showForm();
        }
    }

    public function logoutUser() {
        session_start();
        session_abort();
        session_destroy();

        header("Location: /index.php?accion=login");
        exit;
    }

    public function showForm($err=''){
        require_once __DIR__ . '/../view/login.php';
        
    }
}
?>