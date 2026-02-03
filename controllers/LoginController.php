<?php
require_once __DIR__ . '/../models/LoginModelo.php';

class LoginController
{
    public function loginUser()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $user = trim($_POST['user'] ?? '');
            $pass = trim($_POST['pass'] ?? '');

            $loginModel = new LoginModelo();
            $res = $loginModel->LoginAuth($user, $pass);  // cargar usuario y contraseña

            if ($res) {
                session_start();
                $_SESSION['user'] = $res['username'];
                header("Location: /index.php?accion=home");
                exit();
            } else {
                $error = "Credenciales incorrectas.";
                $this->showForm($error);
            }
        } else {
            $this->showForm();
        }
    }

    public function logoutUser()
    {
        session_start();
        session_abort();
        session_destroy();

        header("Location: /index.php?accion=login");
        exit;
    }

    public function showForm($error = '')
    {
        require_once __DIR__ . '/../view/login.php';
    }
}
