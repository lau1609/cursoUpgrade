<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0,
    initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=raleway:400,300" type='text/css'>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Registrate</title>
</head>
<body>
    <div class="contenedor">
        <h1 class="titulo">Registrate</h1>
        <hr class="border">

        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="formulario" name="login">
            <div class="from-group">
                <i class="icono izquierda fa fa-user"></i> <input type="text" name="usuario" class="usuario" placeholder="Usuario">
            </div>

            <div class="from-group">
                <i class="icono izquierda fa fa-lock"></i> <input type="password" name="password" class="password" placeholder="Contraseña">
            </div>

            <div class="from-group">
                <i class="icono izquierda fa fa-lock"></i> <input type="password" name="password2" class="password-btn" placeholder="Repetir contraseña">
                <i class="submit-btn fa fa-arrow-right" onclick="login.submit()"></i>
            </div>

            <?php if (!empty($errores)): ?>
                <div class="error">
                    <ul>
                        <?php echo $errores; ?>
                    </ul>
                </div>
            <?php endif ?>
        </form>

        <p class="texto-registrate">
            ¿ Ya tienes Cuenta ?
            <a href="login.php">Iniciar sesion</a>
        </p>
    </div>
</body>
</html>