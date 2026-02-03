<?php

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leccion Práctica</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body class="d-flex flex-column min-vh-100">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm" style="background-color: #0d47a1 !important;">
        <div class="container-fluid">
            <!-- Navbar links -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="?accion=home">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?accion=usuarios">Usuarios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?accion=reportes">Reportes</a>
                    </li>
                </ul>

                <!-- User Info and Logout -->
                <div class="d-flex align-items-center">
                    <span class="navbar-text me-3 text-light">
                        <i class="fas fa-user-circle me-1"></i>
                        <?php echo $_SESSION['user'] ?? 'Invitado'; ?>
                    </span>
                    <a href="?accion=logout" class="btn btn-outline-danger btn-sm">
                        <i class="fas fa-sign-out-alt"></i> Logout
                    </a>
                </div>
            </div>
        </div>
    </nav>

</body>