<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body class="bg-light">
    <div class="container mt-5" style="max-width: 400px;">
        <h3 class="mb-4 text-center">Iniciar Sesión</h3>

        <form action="/index.php?accion=login" method="post">
            <div class="mb-3">
                <label for="usuario" class="form-label">Usuario: </label>
                <input type="text" class="form-control" name="usuario" required>
            </div>

            <div class="mb-3">
                <label for="clave" class="form-label">Clave: </label>
                <input type="password" class="form-control" name="clave" required>
            </div>

            <?php if (!empty($error)):  ?>
                <div class="alert alert-danger text-center">
                    <?php echo $error  ?>
                </div>
            <?php endif ?>

            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary">Ingresar</button>
            </div>
        </form>
    </div>
</body>

</html>